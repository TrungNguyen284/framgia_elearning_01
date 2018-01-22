<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LopHoc;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = LopHoc::all();
        return view('pages.home' , compact([
            'classes',
        ]));
    }

    public function about()
    {
        return view('pages.about-us');
    }

    public function fee()
    {
        return view('pages.fee');
    }

    public function support()
    {
        return view('pages.support');
    }

}
