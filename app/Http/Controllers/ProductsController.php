<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    // Products index con compact method
    function index(){

        $title = "Questo è uno stupido titolo dinamico LOL!!!!!";
        $description = "AKJHDSAKJDHAKSJHD";

        return view('products.index', compact('title', 'description'));

    }

    // Products index con with method
    // Col with puoi passare una sola variabile
    function indexWith(){
    
        $title = "Questo è uno stupido titolo dinamico LOL (con with method)!!!!!";
        return view('products.index')->with($title, 'title');
    
    }

    function about(){

        return "About page";

    }

}
