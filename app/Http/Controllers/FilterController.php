<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FilterRequest;
use App\Product;

class FilterController extends Controller
{
    public function index(FilterRequest $request){
        $products_query = Product::query();
        $products_query->with("category","brand");

        if ($request->get('price_from')){
            $products_query->where("price", ">=", $request->get("price_from"));
        }
        
        if ($request->get('price_to')){
            $products_query->where("price", "<=", $request->get("price_to"));
        }

        if ($request->get('categories')&& ($request->get('categories')) != 0 ){
            $products_query->whereIn("category_id", $request->get("categories"));
        }

        if ($request->get('brands')&& ($request->get('brands')) != 0 ){
            $products_query->whereIn("brand_id", $request->get("brands"));
        }

        if ($request->get('sort')){
            switch($request->get('sort')){
                case 1: $products_query->orderBy("price", "ASC");
                case 2: $products_query->orderBy("price", "DESC");
                case 3: $products_query->orderBy("name", "ASC");
                case 4: $products_query->orderBy("name", "DESC");
            }
            
            
        }

        $products = $products_query->get();

        return $products;
    }
}
