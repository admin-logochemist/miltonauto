<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginReq;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Mail;
class UserCtrl extends Controller
{

    // Admin Sign Up
    public function SignUp(){
        $UserSignedUp = User::insert([
            'name' => 'Admin 5',
            'email' => 'admin5@miltonauto.com',
            'password' => Hash::make('1234Abcd'),
            'roles' => 'admin'
        ]);

        // $data = ['name' => 'Ali', 'salute' => 'Dear Subscriber', 'msg' => 'We Welcome you at Milton Auto'];
        // $user['to'] = 'kevinchemist034@gmail.com';

        // if($UserSignedUp){
        //     Mail::send('signupemail',$data,function($message) use ($user){
        //         $message->from('ts.dev1.ali@gmail.com','TS Dev1 Ali')
        //         ->to($user['to']);
        //     });
        // }
    }

    public function LoginView(){
        return view(view: 'Login');
    }

    public function Login(LoginReq $req){
        $validated = $req->validated();

        if(auth()->attempt($validated)){
            return redirect()->route(route: 'adminDashboard');
        }
        return redirect()->route(route: 'login')->with('message','Invalid Credentials');
    }

    public function AdminDashboard(){
        return view(view: 'admin/Dashboard');
    }
}
