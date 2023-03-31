<?php


namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class FoodsController extends Controller
{

    public function markets(){
        $markets = Market::all();
        return view("foods.markets",compact("markets"));
    }
}
