<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CompanyController extends Controller
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
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate ([
            'name'              => ['required'],
            'logo'              => ['nullable'],
            'description'       => ['required'],
            'phone_number'      => ['nullable'],
            'email'             => ['required'],
            'website'           => ['nullable'],
            'linkedin'          => ['nullable'],
            'facebook'          => ['nullable'],
            'instagram'         => ['nullable'],

            'location_id'       => ['nullable'],
            'company_size_id'   => ['nullable'],
            'sector_id'         => ['nullable'],
            'user_id'           => ['required'],
    ]);

        $attributes = $request->input();
    
        Company::create($attributes);
    
        return redirect()->route('company.show', [ auth()->user()->company->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('company.show', [ 'company' => Company::findOrFail($id) ]);
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
