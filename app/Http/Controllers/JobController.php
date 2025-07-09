<?php

namespace App\Http\Controllers;


use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{

    public function index()
    {
        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');
        return view('job.index',
        [
            'featured_jobs' => $jobs[0],
            'jobs' => $jobs[1],
            'tags' => Tag::all()]
        );
    }


    public function create()
    {
//        dd(Auth::user());
        return view('job.create');
    }


    public function store(Request $request)
    {
//        dd(Auth::user());
        $data = $request->validate ([
            'title' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'tags' => 'nullable',
            'url' => 'required',

            'schedule' => 'required',
        ]);

        $job = Auth::user()->employer->jobs()->create(Arr::except($data,'tags'));

        if($data['tags'] ?? false) {

            foreach (explode(',', $data['tags']) as $tag) {
                $job->tag($tag);
            }
        }
        return redirect('/');

    }


    public function show(Job $job)
    {
        //
    }


    public function edit(Job $job)
    {
        //
    }


    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }


    public function destroy(Job $job)
    {
        //
    }
}
