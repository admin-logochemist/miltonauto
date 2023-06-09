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
<<<<<<< HEAD
            'name' => 'User',
            'email' => 'user@miltonauto.com',
=======
            'name' => 'Admin',
            'email' => 'admin@miltonauto.com',
>>>>>>> a60f9e561500359ce9110890b168132cd64dd857
            'password' => Hash::make('1234Abcd'),
            'roles' => 'user'
        ]);

        $data = ['name' => 'Ali', 'salute' => 'Dear Subscriber', 'msg' => 'We Welcome you at Milton Auto'];
        $user['to'] = 'magjcd@gmail.com';

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
            if(auth()->user()->roles == 'admin'){
                return redirect()->route(route: 'adminDashboard');
            }else{
                return redirect()->route(route: 'login')->with('message','Invalid Credentials, you are not an admin');
            }
        }
        return redirect()->route(route: 'login')->with('message','Invalid Credentials');
    }

    public function AdminDashboard(){
        return view(view: 'admin.Dashboard');
    }
}
