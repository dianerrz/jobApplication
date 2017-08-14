<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobVacancies;
use Auth;
use Illuminate\Support\Facades\Input;
class JobVacController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $JobVacancies = JobVacancies::paginate(3);
        return view('JobVacancies.index', compact('JobVacancies'));
    }
    public function store(Request $request){
    	$input = Input::all();
        JobVacancies::create([
            'jobVacName' => $input['jobCatName'],
            'jobVacDesc' => $input['jobCatDesc'],
        ]);
        return redirect('addJobVacancies')->with('status', 'Job Vacancy Successfully Added!');
    }

}
