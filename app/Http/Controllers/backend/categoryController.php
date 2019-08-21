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
        $cate=new category;
        $cate->name=$r->name;
        $cate->slug=str_slug($r->name);
        $cate->parent=$r->idParent;
        $cate->save();
        return redirect()->back()->with('thongbao','Đã thêm thành công!');
    }


    function getEditCategory($idCate) {
        $data['category']=category::find($idCate);
        $data['categories']=category::all()->toArray();
        return view('backend.category.editcategory',$data);
    }

    function postEditCategory(EditCategoryRequest $r) {
        
    }

    function delCategory($idCate)
    {
        category::destroy($idCate);
        return redirect()->back()->with('thongbao','Đã xoá thành công!');
    }
}
