<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userRegister()
    {
        return view('user');
    }


    public function saveUserData(Request $request)
    {


        $user = new User();
        $user['name'] = $request->username;
        $user['email'] = $request->useremail;
        $user['password'] = $request->userpassword;
        $user->save();

        return redirect('/');
    }

    public function loginUser()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Auth::logout();
       
        $email = $request->email;
        $password = $request->password;



        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return view('welcome');
        } else {
            return 'try again';
        }
    }
}
