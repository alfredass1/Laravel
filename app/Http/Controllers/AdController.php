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
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'email' => 'required',
            'location' => 'required',
            'img' => 'mimes:jpeg,jpg,png,gif|required|max:10000'

        ]);
        $path=$request->file('img')->store('public/images');
        $filename=str_replace('public/',"", $path);

        $ad = Ad::create([
            'title' => request('title'), //name
            'description' => request('description'),
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location'),
            'catid' => request ('catid')
            

        ]);

        return redirect('/valdyti-skelbima');
    }

        public function valdytiSkelbima()
        {
        $ads = Ad::all();
        $categories = Category::all();
        return view('skelbimai.pages.valdytiSkelbima',compact('ads','categories'));

        }


    public function trintiSkelbima(Ad $ad)
    {
        $ad->delete();
        return redirect('/valdyti-skelbima');
    }



    public function redaguotiSkelbima(Ad $ad){

        $categories = Category::all();
        return view ('skelbimai.pages.redaguotiSkelbima', compact('ad','categories'));

    }

    public function redaguoti_Skelbima(Request $request, Ad $ad){

//        dd($ad);

        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
        ]);

        Ad::where('id', $ad->id )
            ->update(['title' => request('title'),
                'description' => request('description'),
                'price' => request('price'),
                'email' => request('email'),
                'phone' => request('phone'),
                'location' => request('location'),
                'catid' => request('catid')
            ]);


        return redirect('/valdyti-skelbima');
    }

    public function paieska(Request $request){

        $categories = Category::all();
        $ads = Ad::where('title', 'LIKE', '%'.request('titleForSearch').'%')->
        where('location', 'LIKE', '%'.request('locationForSearch').'%')->
        where('catid', 'LIKE', '%'.request('categoryID').'%')->get();

        return view ('skelbimai.pages.paieska', compact('ads','categories'));
    }
}







