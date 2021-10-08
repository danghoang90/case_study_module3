<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
{
    function create()
    {
        $services = Service::all();
        return view('foods.create', compact('services'));
    }

    function store(Request $request)
    {
        $food = new Food();
        $food->name = $request->name;
        $food->address = $request->address;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $food->image = $path;
        }
        $food->open_time = $request->open_time;
        $food->close_time = $request->close_time;
        $food->note = $request->note;
        $food->price = $request->price;
        $food->promotional_price = $request->promotional_price;
        $food->service_price = 0;
        $food->explain_service_price = $request->explain_service_price;
        $food->prepare_time = $request->prepare_time;
        $food->discount_code = $request->discount_code;
        $food->count_discount_code = $request->count_discount_code;
        $food->tag = $request->tag;
        $food->views = 0;
        $food->orders = 0;
        $food->nominations = NominationConstant::NOT_NOMINATIONS;
        $food->discount_food = $request->discount_food;
        $food->restaurant = $request->restaurant;
        $food->save();
        Session::flash('success', 'Tạo mới món ăn thành công');
    }
}
