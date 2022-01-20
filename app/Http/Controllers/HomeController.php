<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect(){
        $typeID = Auth::user()->typeID;

        if($typeID == '1'){
            return view('adminPage');
        } else{
            return view('userPage');
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('redirect');
        } else{
            return view('userPage');
        }
    }
}
