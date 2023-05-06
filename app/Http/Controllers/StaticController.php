<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    // it wll like index page
    public function index(){
      return view('welcome');
    }
    // it wll like about page
    public function about(){
      return view('about');
    }

    // it wll like contact page
    public function contact(){
      return view('contact');
    }


    // it wll like portofolio page
    public function portofolio(){
      return view('portofolio');
    }


}
