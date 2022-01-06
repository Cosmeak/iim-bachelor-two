<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Location;
use App\Models\Candidate;
use Illuminate\Http\Request;

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
      'first_name' => ['required', 'max:30', 'min:3'],
      'last_name' => ['required', 'max:30', 'min:3'],
      'birth_date' => ['date'],
      'phone_number' => ['numeric'],
      'profile_picture' => [''],
      'cv' => ['max:50', 'nullable'],
      'website' => ['nullable'],
      'instagram' => ['max:50', 'nullable'],
      'facebook' => ['max:50', 'nullable'],
      'linkedin' => ['max:50', 'nullable'],

      'id_user' => ['required', 'unique:candidates'],
      'id_status' => ['required'],
      'id_location' => ['nullable']
    ]);
    
    Candidate::create($attributes);

    return view('candidate.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $candidate = Candidate::find($id);
      return view('candidate.show', compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('candidate.edit');
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
      $attributes = $request->validate([
        'first_name' => ['required', 'max:30', 'min:3'],
        'last_name' => ['required', 'max:30', 'min:3'],
        'birth_date' => ['date'],
        'phone_number' => ['numeric'],
        'profile_picture' => [''],
        'cv' => ['max:50'],
        'website' => [''],
        'instagram' => ['max:50'],
        'facebook' => ['max:50'],
        'linkedin' => ['max:50'],
  
        'id_user' => ['required'],
        'id_status' => ['required'],
        'id_location' => ['']
      ]);

      $candidate = Candidate::whereUser;

      $input = $attributes->input();

      $candidate->fill($input)->save();

      return back()->with('message', 'Profil mit à jour');
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
      return view('home');
    }
}
