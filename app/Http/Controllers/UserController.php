<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class UserController extends Controller
{
    //
    public function registrer()
    {
        return view('users.registrer');
    }
    public function handleRegistrer(User $User,UserRequest $Request)
    {
        $User->name = $Request->username;
        $User->email = $Request->email;
        $User->password = Hash::make($Request->password) ;

        $User->save();
        return redirect()->route('accueil')->with('succes','votre compte a ete Cree');
        
    }
    public function login()
    {
        return view('users.login');
    }
    public function handleLogin(LoginRequest $loginRequest)
    {
        $credentials = $loginRequest->validate([
            'name' =>['required'],
            'password' =>['required']
        ]);
        if(Auth::attempt($credentials)){
            $loginRequest->session()->regenerate();
            return redirect()->intended('accueil');
           
        }
        else{
            return redirect()->back()->with('errors','information mal saisie');
        }
    }
    public function logout()
    {
        FacadesSession::flush();    
        Auth::logout();
        return redirect('login');
    }
}

