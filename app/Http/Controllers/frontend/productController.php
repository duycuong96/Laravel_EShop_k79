<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productController extends Controller
{
    function getShop() { 
        return view('frontend.product.shop');
    }

    
    function getDetail() { 
        return view('frontend.product.detail');
    } 
    
}
