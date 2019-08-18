<?php namespace App\Http\Controllers\backend;
use App\Http\Requests\{AddCategoryRequest,EditCategoryRequest};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\category;

class categoryController extends Controller {
    function getCategory() {
        $data['categories']=category::all()->toArray();
        return view('backend.category.category',$data);
    }

    function postCategory(AddCategoryRequest $r) {
        
    }


    function getEditCategory() {
        return view('backend.category.editcategory');
    }

    function postEditCategory(EditCategoryRequest $r) {
        
    }
}
