<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $pizze = Pizza::all();

        return view("home", compact("pizze"));
    }

    public function detail($id){

        $pizza = Pizza::find($id);

        return view("pizza_detail", compact("pizza"));
    }
}
