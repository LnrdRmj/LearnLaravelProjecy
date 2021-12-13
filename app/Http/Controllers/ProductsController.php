<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    // Products index con compact method
    function index(){

        $title = "Prodotti";
        $description = "Lista di prodotti:";

        $data = ['Mele', 'Giuseppi'];

        // return view('products.index', compact('title', 'description', 'data'));
        
        // In questo modo le variaibli possono avere nomi diversi dai label della view
        return view('products.index', 
                    [
                        'title' => $title,
                        'description' => $description,
                        'data' => $data,
                    ]);

    }

    // Products index con with method
    // Col with puoi passare una sola variabile
    function indexWith(){
    
        $title = "Questo è uno stupido titolo dinamico LOL (con with method)!!!!!";
        return view('products.index')
                ->with('title', $title)
                ->with('description', 'Descrizione')
                ->with('data', ['Mele', 'Giuseppi']);
    
    }

    function about(){

        return "About page";

    }

    function showProduct($id){

        $data = ['Mele', 'Giuseppi'];

        return view('products.productInfo')->with('name', $data[$id] ?? 'Non ho trovato il prodotto :(');
    
    }

}
