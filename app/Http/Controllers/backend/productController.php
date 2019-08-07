<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productController extends Controller
{
function getListProduct() { 
    return view('backend.product.listproduct');
}

function getAddProduct() {
    return view('backend.product.addproduct');
}

function getEditProduct() { 
    return view('backend.product.editproduct');
}
}
