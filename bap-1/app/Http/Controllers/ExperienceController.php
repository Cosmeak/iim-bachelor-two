<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //! Don't used
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //! Don't used
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
            'company_name' => ['required'],
            'job_name' => ['required'],
            'description' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'sector_id' => ['required']
        ]);

        $input = $request->input();
        $input['candidate_id'] = auth()->user()->candidate->id;
        $experience = Experience::create($input);
        return redirect()->route('candidate.show', [ $experience->candidate->id ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //! Don't used
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //! Don't used
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
        $request->validate([
            'company_name' => ['required'],
            'job_name' => ['required'],
            'description' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'sector_id' => ['required']
        ]);
        $input = $request->input();
        $experience = Experience::findOrFail($id);
        $experience->fill($input)->save();
        return redirect()->route('candidate.show', [ $experience->candidate->id ]);
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
