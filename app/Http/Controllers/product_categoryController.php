<?php

namespace App\Http\Controllers;
use App\Models\product_category;
use App\Models\products;
use Illuminate\Http\Request;
class product_categoryController extends Controller
{
    public function getproduct_category()
    {
       $product_category = product_category::all();
       return view('product_category', compact('product_category'));
    }
        public function getproduct($product)
        {
            $selectcategory = product_category::whereId($product)->first();
            return view('products', compact('selectcategory'));
        }

}
