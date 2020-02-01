<?php

namespace App\Http\Controllers\User;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProducts extends Controller
{
    public function getProducts()
    {
        $products = Products::all();
        return view('user.products')->with('Products',$products);
    }
    public function Buy()
    {
     return redirect('/products')->with('status','You have bought new item');
    }
}    
