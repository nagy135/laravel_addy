<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index( $category='all' ) {
        if ($category == 'all') {
            $products = \App\Product::paginate(2);
        } else {
            $products = \App\Product::where('category_id', $category)->paginate(2);
        }

        $categories = \App\Category::all();

        return view('catalog', [
            'nav_catalog' => 'active',
            'products' => $products,
            'categories' => $categories,
            'selected_category' => $category
        ]);
    }
}

