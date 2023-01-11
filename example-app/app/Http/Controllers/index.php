<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function website(){
        //Concatenate Multiple views Each Other
            return view("header").view("content").view("footer"); 
    }

    public function home(){
            return view("header").view("content").view("home")
            .view("footer");
    }

    public function blog(){
            return view("header").view("content").view("blog")
            .view("footer");
    }

    public function contact(){
            return view("header").view("content").view("contact")
            .view("footer");
    }
}
