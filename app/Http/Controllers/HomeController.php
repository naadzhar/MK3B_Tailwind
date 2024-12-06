<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index'); 
    }

    public function login(){
        return view('login'); 
   }

   public function website(){
    return view('website'); 
    }

    public function about()
   {
    $data = [
            'name'    => 'Nada Nabila Azzahra',
            'address' => 'Purwokerto',
            'email'   => 'nadanabila@gmail.com'
    ];
    return view('about', $data);
    }
}