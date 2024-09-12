<?php

namespace App\Http\Controllers;
use App\Models\ShopItem;
use App\Models\Mixer;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHomePage()
    {
        return view('homepage');
    }
    public function showProductPage()
    {

        $shopItems = ShopItem::all(); 
        return view('product', compact('shopItems'));

    }
    public function showBeerPage()
    {
        $mix = Mixer::all(); 
        return view('beer', compact('mix'));
    }
    public function aboutPage()
    {
        return view('about');
    }

    public function contactPage()
    {
        return view('contact');
    }
}