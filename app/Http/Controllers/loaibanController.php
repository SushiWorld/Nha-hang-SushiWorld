<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\kinds;

class loaibanController extends Controller
{
    //
    public function getDanhSach()
    {
        $loaiban = kinds::all();
    	return view('admin.kinds.list',['loaiban'=>$loaiban]);
    }

    public function getThem()
    {
        return view('admin.kinds.add');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'kind_item' => 'required|unique:kinds,kind_item|min:2|max:100',
                'kind_des' => 'required|min:2|max:100'
            ],

            [
                'kind_item.required'=>'Bạn chưa nhập loại bàn',
                'kind_item.unique'=>'Loại bàn đã có',
                'kind_item.min'=>'Tên loại bàn phải có độ dài từ 2-100 kí tự',                
                'kind_item.max'=>'Tên loại bàn phải có độ dài từ 2-100 kí tự',

                'kind_des.required'=>'Bạn chưa nhập mô tả',
                'kind_des.min'=>'Mô tả phải có độ dài từ 3-100 kí tự',
                'kind_des.max'=>'Mô tả phải có độ dài từ 3-100 kí tự'
            ]);

        $loaiban = new kinds;
        $loaiban->kind_item=$request->kind_item;
        $loaiban->kind_des=$request->kind_des;
        $loaiban->save();

        return redirect('admin/kinds/add')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $loaiban = kinds::find($id);
        return view('admin.kinds.edit',['loaiban'=>$loaiban]);
    }

    public function postSua(Request $request, $id)
    {
        $loaiban = kinds::find($id);
        $this->validate($request,
            [
                'kind_item' => 'required|unique:kinds,food_category|min:2|max:100',
                'kind_des' => 'required|min:2|max:100'
            ],

            [
                'kind_item.required'=>'Bạn chưa nhập loại bàn',
                'kind_item.unique'=>'Loại bàn đã có',
                'kind_item.min'=>'Tên loại bàn phải có độ dài từ 2-100 kí tự',                
                'kind_item.max'=>'Tên loại bàn phải có độ dài từ 2-100 kí tự',

                'kind_des.required'=>'Bạn chưa nhập mô tả',
                'kind_des.min'=>'Mô tả phải có độ dài từ 3-100 kí tự',
                'kind_des.max'=>'Mô tả phải có độ dài từ 3-100 kí tự'
            ]);

        $loaiban->kind_item=$request->kind_item;
        $loaiban->kind_des=$request->kind_des;
        $loaiban->save();

        return redirect('admin/kinds/edit/'.$id)->with('thongbao','Sửa thành công');

    }

    public function getXoa($id)
    {
        $loaiban = kinds::find($id);
        $loaiban->delete();

        return redirect('admin/kinds/list')->with('thongbao','Xóa thành công');
    }
}
