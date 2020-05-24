<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index( $product_id=null ) {
        $context = [
            'nav_contact' => 'active',
            'product_id' => $product_id
        ];
        if (!is_null($product_id)){
            $product = \App\Product::find($product_id);
            $context['product_name'] = $product->title;
        }
        return view('contact', $context);
    }
}
