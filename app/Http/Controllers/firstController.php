<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateForm;
use Illuminate\Http\Request;

class firstController extends Controller
{
    //
    
    public function hello($username){
         return "hello world $username";
    }
    public function accueil(){
        $username = 'nathan';
        
        return view('accueil',['name'=>$username,'age'=>25]);
    }
    public function store(validateForm $request)
    {
        $verifie = $request;
        if($verifie){
            echo "verification passe";
        }
        else{
            return redirect()->back();
        }
    }
}
