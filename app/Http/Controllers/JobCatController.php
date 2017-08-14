<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobCategories;
use Auth;
use Illuminate\Support\Facades\Input;
class JobCatController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request){
        $count = JobCategories::count();
        if ($count == 0){
            $num=0;
        }
        else{
          $roles = JobCategories::select('id')->get()->last();
          $roless = $roles->id; 
          $num = substr($roless,-1,4); 

        };
        $num+=1;
        if (strlen($num) == 1) {
            $code = "JOBCAT-000".$num;
        }
        elseif (strlen($num) == 2) {
            $code = "JOBCAT-00".$num;
        }
        elseif (strlen($num) == 3) {
            $code = "JOBCAT-0".$num;
        }
        elseif (strlen($num) == 4) {
            $code = "JOBCAT-0".$num;
        }
        

    	$this->validate($request,[
    		'jobCatName' => 'required|max:255',
    		'jobCatDesc' => 'required',

   		]);
    	$input = Input::all();
        JobCategories::create([
            'jobCatName' => $input['jobCatName'],
            'jobCatCode' => $code,
            'jobCatDesc' => $input['jobCatDesc'],
        ]);
        return redirect('addJobCategories')->with('status', 'Job Category Successfully Added!');
    }
    public function index(){
    	$JobCategories = JobCategories::paginate(3);
        $count = JobCategories::count();
        return view('JobCategories.index', compact(['JobCategories','count']));
    }
    public function edit(JobCategories $JobCategory){
        return view('JobCategories.edit', compact('JobCategory'));
    }
    public function update(Request $request, JobCategories $JobCategory){
    	$JobCategory->update($request->all());
    	return back()->with('status', 'Job Category Successfully Changed!');
    }

}