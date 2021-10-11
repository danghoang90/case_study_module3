<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function bestSell()
    {
        return view('menu.bestSell');
    }

    public function discount()
    {
        return view('menu.discount');
    }

    public function topview()
    {
        return view('menu.topView');
    }

    public function fastFood()
    {
        return view('menu.fastFood');
    }
}
