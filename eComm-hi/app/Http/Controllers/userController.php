<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user ;
use Illuminate\Support\Facades\Hash ;


class userController extends Controller
{
    //user login functionality here
    function login(Request $req){
        $user =  user::where(['email'=>$req->email])->first() ;
        if(!$user || !Hash::check($req->password , $user->password)){
            return "username or Password is not matched" ;
        }
        else{
            $req->session()->put('user' , $user) ;
            return redirect('/') ;
        }
    }

    //user Register functionality here
    function register(Request $req){
        // return $req->input() ;
        $user = new user ;
        $user->name = $req->name ;
        $user->email = $req->email ;
        $user->password = Hash::make($req->password) ;
        $user->save() ;
        return redirect('/login') ;
    }


}
