<?php

namespace App\Http\Controllers;
use App\JobCategories;
use App\JobVacancies;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $JobCategories = JobCategories::paginate(3);
        $JobVacancies = JobVacancies::paginate(3);
        return view('home', compact('JobCategories'), compact('JobVacancies'));
    }
}
