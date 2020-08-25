<?php

namespace App\Http\Controllers;

use App\Education;
use App\Experience;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
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
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $data = $this->getData();

        return view('home')->with($data);
    }

    /**
     * Show the application dashboard.
     *
     * @return Application|Factory|Response|View
     */
    public function print()
    {
        $data = $this->getData();

        return view('print')->with($data);
        // Output the generated PDF to Browser
//        $pdf = PDF::loadView('print', $data);
//        return $pdf->setPaper('A4')->download('resume.pdf');
    }

    /**
     * Get Data
     *
     * @return array
     */
    private function getData()
    {
        $user    = User::find(1);
        $profile = $user->profile;
        $links   = $user->links;
        $skills  = $user->skills;


        $experiences = Experience::all()->sortByDesc('to')->sortByDesc('current');
        $last = $experiences->sortBy('from')->last();
        $experience_total = Carbon::parse($last->from)->to(Carbon::now(), CarbonInterface::DIFF_ABSOLUTE, false, 2);

        $education   = Education::all()->sortByDesc('to');

        return compact('experiences', 'education', 'profile', 'user', 'links', 'skills', 'experience_total');
    }
}
