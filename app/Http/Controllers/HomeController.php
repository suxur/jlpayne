<?php

namespace App\Http\Controllers;

use App\Education;
use App\Experience;
use App\User;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\View\View;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    public function index()
    {
        $data = $this->getData();

        return view('home')->with($data);
    }

    public function print()
    {
        $data = $this->getData();

        return view('print')->with($data);
    }

    /**
     * Get Data
     *
     * @return array
     */
    private function getData()
    {
        $user = User::find(1);
        $profile = $user->profile;
        $links = $user->links;
        $skills = $user->skills;

        $experiences = Experience::orderBy('current', 'desc')->orderBy('to', 'desc')->get();
        $last = $experiences->sortBy('from')->last();
        $experience_total = Carbon::parse($last->from)->to(Carbon::now(), CarbonInterface::DIFF_ABSOLUTE, false, 2);

        $education = Education::all()->sortByDesc('to');

        return compact('experiences', 'education', 'profile', 'user', 'links', 'skills', 'experience_total');
    }
}
