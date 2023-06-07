<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class PrdCtrl extends Controller
{
    public function ProductView(){

        $data = Product::paginate(50);
        return view('admin.Products', compact('data'));
    }
}
