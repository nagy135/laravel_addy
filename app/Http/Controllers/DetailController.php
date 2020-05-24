<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show( $id ) {
        $product = \App\Product::find($id);
        return view('detail', [
            'product' => $product
        ]);
    }
}
