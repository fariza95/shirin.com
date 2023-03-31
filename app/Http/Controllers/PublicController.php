<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function aboutus(){
        $airports = Airport::take(10)->get();
        return view("aboutus", compact('airports'));
    }
}
