<?php namespace App\Http\Controllers\backend;
use App\Http\Requests\{AddCategoryRequest,EditCategoryRequest};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categoryController extends Controller {
    function getCategory() {
        return view('backend.category.category');
    }

    function postCategory(AddCategoryRequest $r) {
        
    }


    function getEditCategory() {
        return view('backend.category.editcategory');
    }

    function postEditCategory(EditCategoryRequest $r) {
        
    }
}
