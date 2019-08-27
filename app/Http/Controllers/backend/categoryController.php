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
        $categories=category::all()->toArray();
        if(getLevel($categories,$r->idParent,1)<3)
        {
            $cate=new category;
            $cate->name=$r->name;
            $cate->slug=str_slug($r->name);
            $cate->parent=$r->idParent;
            $cate->save();
            return redirect()->back()->with('thongbao','Đã thêm thành công!');
        }
        else
        {
            return redirect()->back()->withErrors(['name'=>'Giao diện không hỗ trợ danh mục > 2 cấp']);
        }
       
    }


    function getEditCategory($idCate) {
        $data['category']=category::find($idCate);
        $data['categories']=category::all()->toArray();
        return view('backend.category.editcategory',$data);
    }

    function postEditCategory(EditCategoryRequest $r,$idCate) {
        $categories=category::all()->toArray();
        if(getLevel($categories,$r->idParent,1)<3)
        {
        $cate=category::find($idCate);
        $cate->name=$r->name;
        $cate->slug=str_slug($r->name);
        $cate->parent=$r->idParent;
        $cate->save();
        return redirect()->back()->with('thongbao','Đã Sửa thành công!');
        }
        else
        {
            return redirect()->back()->withErrors(['name'=>'Giao diện không hỗ trợ danh mục > 2 cấp'])->withInput();
        }

    }

    function delCategory($idCate)
    {
        category::destroy($idCate);
        return redirect()->back()->with('thongbao','Đã xoá thành công!');
    }
}
