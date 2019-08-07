<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class checkoutController extends Controller
{
    function getCheckOut() { 
        return view('frontend.checkout.checkout');
    }
    
    function getComplete() {
        return view('frontend.checkout.complete');
    }
}
