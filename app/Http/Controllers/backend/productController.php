<?php namespace App\Http\Controllers\backend;
use App\Http\Requests\{addProductRequest,EditProductRequest};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productController extends Controller {

    function getListProduct() {
        return view('backend.product.listproduct');
    }

    function getAddProduct() {
        return view('backend.product.addproduct');
    }

    function postAddProduct(addProductRequest $r) {

    }

    function getEditProduct() {
        return view('backend.product.editproduct');
    }

    function postEditProduct(EditProductRequest $r) {

    }
}
