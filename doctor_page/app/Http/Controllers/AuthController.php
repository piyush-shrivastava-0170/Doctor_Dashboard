<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
     public function DocLogin(Request $request){
        // $valid = $this->rules($request->all());
        // if($valid->fails()){
        //     return redirect()->back();
        // }
        // else{
            $email = $request->get('email');
            $password = $request->get('password');
            if(Auth::attempt(['email'=>$email, 'password'=>$password,'user_type'=>'doctor'])){
                return redirect()->intended('/doctor/dashboard');
            }
            else{
                 return redirect()->back();
             
            }
        }
    //}


    public function rules($data){
        $messages = [
            'email.required' => 'Please enter your E-mail address',
            'email.exist' => 'Email already used',
            'email.email' => 'Plase Enter a Valid Email',
            'password.required' => 'Password Required',
            'password.min' => 'password must be at least 6 character'
        ];

        $validator = Validator::make($data,[
            'email' => 'required [email]|exist:users',
            'password' => 'required'
        ],$messages);
    }

    public function savedoc(Request $request)
    {
  
       $users = new User([
            'name'=> $request->get('name'),
            'email;'=> $request->get('email'),
            'password'=> Hash::make($request->get('password')),
            'user_type' => 'doctor',
            'sql'=> $request->get('sql')
       ]);
       $users->save();

       return redirect()->intended('/doctor/dashboard');
    }
}
