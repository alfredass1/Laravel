<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('skelbimai.pages.home');
    }

    public function showProfile()
    {

        return view('skelbimai.pages.profile');
    }


}