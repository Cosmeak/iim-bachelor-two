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
      return view('candidate.create');
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
    $attributes = $request->validate([
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

      'user_id'         => ['required', 'unique:candidates'],
      'status_id'       => ['nullable'],
      'location_id'     => ['nullable']
    ]);
    
    Candidate::create($attributes);
    $candidate_id = auth()->user()->candidate->id;

    return redirect()->route('candidate.show', [$candidate_id]);
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
  
        return redirect()->route('candidate.show', [ 'candidate' => $candidate ]);
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
      User::find(auth()->user->id)->delete();
      return redirect()->route('home');
    }
}
