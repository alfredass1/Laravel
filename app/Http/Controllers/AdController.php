<?php

namespace App\Http\Controllers;
use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function addSkelbimas(){
        $categories = Category::all();

        return view('skelbimai.pages.prideti', compact('categories'));

        }

    public function storeAd(Request $request )
    {

        $validateData = $request->validate([
            'title' => 'required'
        ]);
        $ad = Ad::create([
            'title' => request('title'), //name
            'description' => request('description'),
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location'),
        ]);

        return redirect('/valdyti-skelbima');
    }

        public function valdytiSkelbima()
        {
        $ads = Ad::all();
        return view('skelbimai.pages.valdytiSkelbima',compact('ads'));

        }


    public function trintiSkelbima(Ad $ad)
    {
        $ad->delete();
        return redirect('/valdyti-skelbima');
    }

}







