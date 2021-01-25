<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;

class danhmucController extends Controller
{
    //
    public function getDanhSach()
    {
        $danhmuc = category::all();
    	return view('admin.category.list',['danhmuc'=>$danhmuc]);
    }

    public function getThem()
    {
        return view('admin.category.add');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'food_category' => 'required|unique:category,food_category|min:2|max:100',
                'cate_des' => 'required|min:2|max:100'
            ],

            [
                'food_category.required'=>'Bạn chưa nhập tên danh mục',
                'food_category.unique'=>'Tên danh mục đã tồn tại',
                'food_category.min'=>'Tên danh mục phải có độ dài từ 3-100 kí tự',                
                'food_category.max'=>'Tên danh mục phải có độ dài từ 3-100 kí tự',

                'cate_des.required'=>'Bạn chưa nhập mô tả',
                'cate_des.min'=>'Mô tả phải có độ dài từ 3-100 kí tự',
                'cate_des.max'=>'Mô tả phải có độ dài từ 3-100 kí tự',
            ]);

        $danhmuc = new category;
        $danhmuc->food_category=$request->food_category;
        $danhmuc->cate_des=$request->cate_des;
        $danhmuc->icon="";
        $danhmuc->save();

        return redirect('admin/category/add')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $danhmuc = category::find($id);
        return view('admin.category.edit',['danhmuc'=>$danhmuc]);
    }

    public function postSua(Request $request, $id)
    {
        $danhmuc = category::find($id);
        $this->validate($request,
            [
                'food_category' => 'required|min:2|max:100',
                'cate_des' => 'required|min:2|max:100'
            ],

            [
                'food_category.required'=>'Bạn chưa nhập tên danh mục',
                'food_category.min'=>'Tên danh mục phải có độ dài từ 3-100 kí tự',                
                'food_category.max'=>'Tên danh mục phải có độ dài từ 3-100 kí tự',

                'cate_des.required'=>'Bạn chưa nhập mô tả',
                'cate_des.min'=>'Mô tả phải có độ dài từ 3-100 kí tự',
                'cate_des.max'=>'Mô tả phải có độ dài từ 3-100 kí tự',
            ]);

        $danhmuc->food_category=$request->food_category;
        $danhmuc->cate_des=$request->cate_des;
        $danhmuc->save();

        return redirect('admin/category/edit/'.$id)->with('thongbao','Sửa thành công');

    }

    public function getXoa($id)
    {
        $danhmuc = category::find($id);
        $danhmuc->delete();

        return redirect('admin/category/list')->with('thongbao','Xóa thành công');
    }
}
