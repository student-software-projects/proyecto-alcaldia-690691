<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    public function formLogin(){
        return view('modules.auth.formLogin');
    }

    public function auth(Request $request){

        $user = User::where('email','=',$request->input('email'))->first();

        if ($user){

            if ($user->password == $request->input('password')){

                session(['USER'=>$user]);

                return redirect()->route('dashboard.index');


            }else{
                return redirect()->route('login.formLogin');
            }

        }else{
            return redirect()->route('login.formLogin');
        }
    }
}

