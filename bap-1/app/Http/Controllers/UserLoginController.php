<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.login');
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
      $attributes = request()->validate([
        'email' => 'required|email',
        'password' => 'required'
      ]);
  
      if (auth()->attempt($attributes)){
        session()->regenerate();
        if (auth()->user()->is_company == 1){
          if (!empty(auth()->user()->company->id))
            return redirect()->route('company.show', [auth()->user()->company->id]);
          else {
            return redirect()->route('company.create');
          }
        } else {
          if (!empty(auth()->user()->candidate->id))
            return redirect()->route('candidate.show', [auth()->user()->candidate->id]);
          else {
            return redirect()->route('candidate.create');
          }
        }
      }
  
      return back()->withErrors(['email' => 'Not be verified']);
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
        //! Don't used
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //! Don't used
    }

    /** 
    *  Close a session.
    *
    * @return \Illuminate\Http\Response
    *
    */
    public function close()
    {
      auth()->logout();
      return redirect('/')->with('success', 'Goodbye!');
    }
}
