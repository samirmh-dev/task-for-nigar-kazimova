<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showLogin()
    {
        return View::make('login');
    }

    public function doLogin()
    {

    }

    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('login'); // redirect the user to the login screen
    }
}
