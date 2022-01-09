<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Job;
use App\Models\JobTag;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('job.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        if(!empty(auth()->user()->company->id)){
            return view('job.create');
        } else {
            return redirect()->route('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'label'             => ['required'],
            'description'       => ['required'],
            'salary'            => ['nullable'],

            'location_id'       => ['nullable'],
            'working_mode_id'   => ['required'],
            'contract_type_id'  => ['required'],
            'sector_id'         => ['required'],
        ]);

        $input = $request->input();
        $input['company_id'] = auth()->user()->company->id;
        $input['archive_date'] = Carbon::now();

        $job = Job::create($input);

        $company_id = $job->company->id;
        // $tag['job_id'] = $job->id;

        // $tag_list = [$input['tag_id_1'], $input['tag_id_2'], $input['tag_id_3']];
        // foreach($tag_list as $tag_){
        //     $tag['tag_id'] = $tag_;
        //     JobTag::create($tag);
        // }

        return redirect()->route('company.show', [$company_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('job.show', [ 'job' => Job::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
