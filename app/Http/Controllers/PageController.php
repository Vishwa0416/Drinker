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
        
    $shopItems = ShopItem::all(); // Fetch items from the database
    return view('product', compact('shopItems'));
        
    }
    public function showBeerPage()
    {
        $mix = Mixer::all(); // Fetch items from the database
    return view('beer', compact('mix'));
    }
    public function aboutPage()
    {
        return view('about');
    }
}