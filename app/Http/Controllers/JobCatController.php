<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobCategories;
use Auth;
use Illuminate\Support\Facades\Input;
class JobCatController extends Controller
{
    //
    public function index(){
    	return view('JobCategories.index');
    }
    public function store(){
    	$input = Input::all();
        JobCategories::create([
            'jobCatName' => $input['jobCatName'],
            'jobCatCode' => $input['jobCatCode'],
            'jobCatDesc' => $input['jobCatDesc'],
        ]);
        return back();
    }
}