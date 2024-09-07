<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Ambassador;

class HomeController extends Controller
{
    public function index(){
        $newProduct = Product::NewProduct();
        $ProductTopSeller = Product::ProductTopSeller();
        $Get5Ambassadors = Ambassador::Get5Ambassadors();
        // var_dump($newProduct);
        return view ('home',compact('newProduct','ProductTopSeller','Get5Ambassadors'));
    }
}
