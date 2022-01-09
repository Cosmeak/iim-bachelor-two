<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CandidateController extends Controller
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
        return view('candidate.create');
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
    // Create the user
    $request->validate([
      'first_name'      => ['required', 'min:3', 'max:30'],
      'last_name'       => ['required', 'min:3', 'max:30' ],
      'birth_date'      => ['nullable'],
      'phone_number'    => ['nullable'],
      'profile_picture' => ['nullable'],
      'cv'              => ['nullable', 'max:50'],
      'website'         => ['nullable'],
      'instagram'       => ['nullable','max:50'],
      'facebook'        => ['nullable','max:50'],
      'linkedin'        => ['nullable','max:50'],

      'status_id'       => ['nullable'],
      'location_id'     => ['nullable']
    ]);

    $input = $request->input();

    $input['user_id'] = auth()->user()->id;
    
    $candidate = Candidate::create($input);

    return redirect()->route('candidate.show', [$candidate->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('candidate.show', [ 'candidate' => Candidate::findOrFail($id) ]);
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
          return view('candidate.edit', [ 'candidate' => Candidate::findOrFail(auth()->user()->candidate->id) ]);
        } else {
          return redirect()->route('candidate.show', $id)->with('error', 'Vous n\'êtes pas la personne possèdant se compte!');
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
          'first_name'      => ['required', 'min:3', 'max:30'],
          'last_name'       => ['required', 'min:3', 'max:30' ],
          'birth_date'      => ['nullable'],
          'phone_number'    => ['nullable'],
          'profile_picture' => ['nullable'],
          'cv'              => ['nullable', 'max:50'],
          'website'         => ['nullable'],
          'instagram'       => ['nullable','max:50'],
          'facebook'        => ['nullable','max:50'],
          'linkedin'        => ['nullable','max:50'],

          'status_id'       => ['nullable'],
          'location_id'     => ['nullable']
        ]);
  
        $candidate = Candidate::findOrFail(auth()->user()->candidate->id);

        $input = $request->input();

        $candidate->fill($input)->save();
  
        return redirect()->route('candidate.show', [ 'candidate' => $candidate->id ]);
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
