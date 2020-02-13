<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function darts(){
        return view('products/darts');
    }

    public function billards(){
        return view('products/billards');
    }

    public function pinballs(){
        return view('products/pinballs');
    }

    public function soccerTables(){
        return view('products/soccer-tables');
    }
}
