<?php

namespace App\Http\Controllers\User;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProducts extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        return view('user.products')->with('Products',$products);
    }
    public function Buy($productID, $userID)
    {
        $sales = new Sale;
        $sales->ProductID = $productID;
        $sales->CustomerID = $userID;
        $sales->save();

     //$products = Products::where($id);
     return redirect('/products')->with('status','You have bought new item');
    }
}    
