<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $foods = Food::paginate(4);
        $viewsFoods = Food::all()->sortBy('views');
        $discountFoods = Food::all()->sortBy('discount_food');
        return view('home.index', compact('foods', 'viewsFoods', 'discountFoods'));
    }
    function searchFood(Request $request)
    {
        $keyword = $request->keyword;
        $foods = Food::where('name', 'LIKE', '%' . $keyword . '%')->get();
        return response()->json($foods);
    }

    function findFood($id)
    {
        $food = Food::find($id);
        return response()->json($food);
    }
}
