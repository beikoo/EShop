<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    public function getSales()
    {
        $sales = Sale::all();
        return view('admin.sales')->with('Sales',$sales);
    }
}
