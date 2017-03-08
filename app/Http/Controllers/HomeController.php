<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Validate user if login and redirect to login page
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the change password form.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('auth/passwords/change');
    }
}
