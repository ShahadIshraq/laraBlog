<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest')->except(['destroy']);
    }


    public function create()
    {
    	return view('sessions.login');
    }

    public function store()
    {
    	
    	// $this->validate(request(), [
    	// 		'email' => 'required|email',
    	// 		'password' => 'required'
    	// 	]);

    	if (auth()->attempt(request(['email' , 'password']))) {
            // Authentication passed...
            return redirect()->home();
        	
        }

        else return back();

    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect()->home();
    }
}
