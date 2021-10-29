<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

       if (Auth::attempt($credentials, $request->has('remember'))) {
           session()->flash('success', '歡迎回來');
           return redirect()->route('users.show', [Auth::user()]);
       } else {
           session()->flash('warning', '很抱歉，您的信箱和密碼不正確');
           return redirect()->back()->withInput();
       }
    }
}
