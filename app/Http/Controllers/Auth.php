<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
class Auth extends Controller
{
    //   
    public function Login()
    {
        return view('public.login');
    }
    public function register()
    {
        return view('public.register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:12',
            'confirm-password' => 'required|same:password'
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            dd($user); // 👈 MUST show user

        } catch (\Exception $e) {
            dd($e->getMessage()); // 👈 show error if any
        }
    }


}
