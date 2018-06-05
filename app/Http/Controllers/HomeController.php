<?php

namespace App\Http\Controllers;

use App\Education;
use App\Experience;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->getData();

        return view('home')->with($data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function print()
    {
        $data = $this->getData();

        // Output the generated PDF to Browser
        $pdf = PDF::loadView('print', $data);
        return $pdf->setPaper('A4')->download('resume.pdf');
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


        $experiences = Experience::all()->sortByDesc('to');
        $education   = Education::all()->sortByDesc('to');

        return compact('experiences', 'education', 'profile', 'user', 'links', 'skills');
    }
}
