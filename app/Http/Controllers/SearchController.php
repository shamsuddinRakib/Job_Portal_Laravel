<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request){
       $jobs = Job::with('employer', 'tags')->where('title','Like', '%'.request('search').'%')->get();

       return view('result', ['jobs' => $jobs]);
    }
}
