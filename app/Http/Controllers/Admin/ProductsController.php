<?php

namespace App\Http\Controllers\Admin;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function getProducts()
    {
        $products = Products::all();
        return view('admin.products')->with('Products',$products);
    }

    public function getProductsDash()
    {
        $products = Products::all();
        return view('admin.dashboard')->with('Products',$products);
    }
    
    public function Save(Request $request)
    {  
            $products = new Products;
            $products->brand = $request->input('brand');
            $products->model = $request->input('model');
            $products->releasedate = $request->input('releasedate');
            $products->description = $request->input('description');
            $products->price = $request->input('price');
            
            $products->save();
            return redirect('/EditProducts')->with('status','The Product has been added to List');
   }

   public function Edit($id)
   {
        $products = Products::FindOrFail($id);
        return view('admin.editproducts')->with('products',$products);
    
   }

   public function Update(Request $request, $id)
   {
       $products = Products::find($id);
       $products->Brand = $request->input('Brand');
       $products->Model = $request->input('Model');
       $products->ReleaseDate = $request->input('ReleaseDate');
       $products->Description = $request->input('Description');
       $products->Price = $request->input('Price');
       $products->update();
       return redirect('/EditProducts')->with('status','Updated Successfully');
   }

   public function Delete($id)
   {
    $products = Products::findorfail($id);
    $products->delete();
    return redirect('/EditProducts')->with('status','The Product is Deleted Successfully');
   }
}
