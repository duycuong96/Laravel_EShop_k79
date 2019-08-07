<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class cartController extends Controller
{
    function getCart() { 
        return view('frontend.cart.cart');
    }
}
