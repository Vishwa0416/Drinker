<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHomePage()
    {
        return view('homepage');
    }
    public function showProductPage()
    {
        return view('product');
    }
    public function showBeerPage()
    {
        return view('beer');
    }
}