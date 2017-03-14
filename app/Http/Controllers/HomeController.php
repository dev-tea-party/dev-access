<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use Hash;
use Validator;

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
    public function showChangePasswordForm()
    {
        return view('auth/passwords/change');
    }

    /**
     * Perform the actual changing of password
     *
     */
     public function changePassword () {
         $user = Auth::user();
         $validation = Validator::make(Request::all(), [
             'password' => 'hash' . $user->password,
             'new_password' => 'required|different:password|confirmed'
         ]);

         if ($validation->fails()) {
             var_dump($validation->errors());exit;
            return redirect()->back()->withErrors($validation->errors());
         }

         $user->password = Hash::make(Request::input('new_password')); //encrypt new password and update user password
         $user->save(); //save all changes to the user

         return redirect()->back()->with('success-message', 'Your new password is now set!');


     }

}
