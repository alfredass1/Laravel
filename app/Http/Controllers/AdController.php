<?php

namespace App\Http\Controllers;
use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class adController extends Controller
{
    public function addSkelbimas(){
        $categories = Category::all();

        return view('skelbimai.pages.prideti', compact('categories'));

        }
}







