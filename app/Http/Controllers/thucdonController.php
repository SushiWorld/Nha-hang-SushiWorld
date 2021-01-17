<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\food;
use App\Models\category;

class thucdonController extends Controller
{
    //
    public function getDanhSach()
    {
        $thucdon = food::all();
    	return view('admin.food.list',['thucdon'=>$thucdon]);
    }

    public function getThem()
    {
        $danhmuc = category::all();
        return view('admin.food.add',['danhmuc'=>$danhmuc]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'food_name' => 'required|unique:food,food_name|min:1|max:100',
                'food_price' => 'required',
                'food_description' => 'required',
                'DanhMuc' => 'required',
                'food_highlight' => 'required'
            ],

            [
                'food_name.required'=>'Bạn chưa nhập tên món ăn',
                'food_name.unique'=>'Tên món ăn đã tồn tại',
                'food_name.min'=>'Tên món ăn phải có độ dài từ 3-100 kí tự',                
                'food_name.max'=>'Tên món ăn phải có độ dài từ 3-100 kí tự',

                'food_price.required'=>'Bạn chưa nhập giá cả',
                'food_description.required'=>'Bạn chưa nhập mô tả',
                'DanhMuc.required'=>'Bạn chưa nhập danh mục'
            ]);

        $thucdon = new food;
        $thucdon->food_name=$request->food_name;
        $thucdon->food_price=$request->food_price;
        $thucdon->food_description=$request->food_description;
        $thucdon->cate_id=$request->DanhMuc;
        $thucdon->food_highlight=$request->food_highlight;

        if($request->hasFile('food_img')){
            $file = $request->file('food_img');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('admin/food/add')->with('thongbao','Thêm thành công');
            }
            $name = $file->getClientOriginalName();

            $food_img = $name;

            // $food_img = str_random(4)."_".$name;
            // while(file_exists("upload/menu".$food_img)){
            //     $food_img = str_random(4)."_".$name;
            // }


            $file->move("upload/menu",$food_img);
            $thucdon->food_img = $food_img;
            
        }else{
            $thucdon->food_img= "";
        }

        $thucdon->save();

        return redirect('admin/food/add')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $danhmuc = category::all();  
        $thucdon = food::find($id);
        return view('admin.food.edit',['thucdon'=>$thucdon,'danhmuc'=>$danhmuc]);
    }

    public function postSua(Request $request, $id)
    {
        $danhmuc = category::all();
        $thucdon = food::find($id);
        $this->validate($request,
            [
                'food_name' => 'required|min:1|max:100',
                'food_price' => 'required',
                'food_description' => 'required',
                'DanhMuc' => 'required',
                'food_highlight' => 'required'
            ],

            [
                'food_name.required'=>'Bạn chưa nhập tên món ăn',
                'food_name.min'=>'Tên món ăn phải có độ dài từ 3-100 kí tự',                
                'food_name.max'=>'Tên món ăn phải có độ dài từ 3-100 kí tự',

                'food_price.required'=>'Bạn chưa nhập giá cả',
                'food_description.required'=>'Bạn chưa nhập mô tả',
                'DanhMuc.required'=>'Bạn chưa nhập danh mục'
            ]);

        $thucdon->food_name=$request->food_name;
        $thucdon->food_price=$request->food_price;
        $thucdon->food_description=$request->food_description;
        $thucdon->cate_id=$request->DanhMuc;
        $thucdon->food_highlight=$request->food_highlight;

        if($request->hasFile('food_img')){
            $file = $request->file('food_img');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('admin/food/edit')->with('thongbao','Sửa thành công');
            }
            $name = $file->getClientOriginalName();

            $food_img = $name;



            $file->move("upload/menu",$food_img);

            unlink("upload/menu/".$thucdon->food_img);

            $thucdon->food_img = $food_img; 
        }

        $thucdon->save();

        return redirect('admin/food/edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $thucdon = food::find($id);
        $thucdon->delete();

        return redirect('admin/food/list')->with('thongbao','Xóa thành công');
    }
}
