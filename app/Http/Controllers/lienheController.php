<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contact;

class lienheController extends Controller
{
    //
    public function getDanhSach()
    {
        $lienhe = contact::all();
        return view('admin.contact.list',['lienhe'=>$lienhe]);
    }

    
    public function getSua($id)
    {
        $lienhe = contact::find($id);
        return view('admin.contact.detail',['lienhe'=>$lienhe]);
    }

    public function postSua(Request $request, $id)
    {
        $lienhe = contact::find($id);

        $this->validate($request,
            [
                'customer_name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'message' => 'required',
                'status' => 'required'
            ],

            [
                'customer_name.required'=>'Bạn đã xóa tên',
                'phone.required'=>'Bạn đã xóa số điện thoại',
                'email.required'=>'Bạn đã xóa email',
                'message.required'=>'Bạn đã nội dung',
                'status.required'=>'Bạn đã xóa trạng thái'
            ]);

        $lienhe->customer_name=$request->customer_name;
        $lienhe->phone=$request->phone;
        $lienhe->email=$request->email;
        $lienhe->message=$request->message;
        $lienhe->status=$request->status;

        $lienhe->save();

        return redirect('admin/contact/detail/'.$id)->with('thongbao','Cập nhập thành công');
    }

    public function getXoa($id)
    {
        $lienhe = contact::find($id);
        $lienhe->delete();

        return redirect('admin/contact/list')->with('thongbao','Xóa thành công');
    }
}
