<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

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

    public function sendEmail(Request $request){
        

        $to = "chouhdryrizwan786@gmail.com";
        $message = "<h1>Welcome.</h1>";
        $subject = "This is subject from testing";

       $result =  Mail::to($to)->send(new TestMail($message,$subject));

        return $result;
    }

}
