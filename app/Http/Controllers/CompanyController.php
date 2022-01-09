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
        if(auth()->user()){
            return view('company.create');
        } else {
            return redirect()->route('login.index');
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
    ]);

        $input = $request->input();
        $input['user_id'] = auth()->user()->id;
        $company = Company::create($input);
        return redirect()->route('company.show', [ $company->id]);
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
        if(auth()->user()->id == $id){
            return view('company.edit', [ 'company' => Company::findOrFail(auth()->user()->company->id) ]);
        } else {
            return redirect()->route('company.show', $id)->with('error', 'Vous n\'êtes pas la personne possèdant se compte!');
        }
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
        if(auth()->user()->id == $id) { 
            $request->validate([
                'name'              => ['required'],
                'logo'              => ['nullable'],
                // 'description'       => ['nullable'],
                'phone_number'      => ['nullable'],
                'email'             => ['required'],
                'website'           => ['nullable'],
                'linkedin'          => ['nullable'],
                'facebook'          => ['nullable'],
                'instagram'         => ['nullable'],
    
                'location_id'       => ['nullable'],
                'company_size_id'   => ['nullable'],
                'sector_id'         => ['nullable'],
            ]);
            $company = Company::findOrFail(auth()->user()->company->id);
            $input = $request->input();
            // ddd($input);
            $company->fill($input)->save();
            return redirect()->route('company.show', [ 'company' => $company ]);
        } else { 
            return back()->withErrors('error', 'Vous n\'êtes pas la personne possèdant se compte!');
        }
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
