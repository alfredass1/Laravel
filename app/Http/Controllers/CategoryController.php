<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function AddKategorija()
    {

        return view('skelbimai.pages.kategorija');
    }


    public function storeCategory(Request $request )
    {

        $validateData = $request->validate([
            'title' => 'required'
        ]);
        $category = Category::create([
            'title' => request('title'),
        ]);

        return redirect('/valdyti-kategorija');
    }


    public function valdytiKategorija()
    {
        $categories = Category::all();
        return view('skelbimai.pages.valdytiKategorija',compact('categories'));
    }

    public function trintiKategorija(Category $category)
    {
        $category->delete();
        return redirect('/valdyti-kategorija');
    }


}

