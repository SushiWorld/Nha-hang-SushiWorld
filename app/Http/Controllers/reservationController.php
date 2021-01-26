<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\kinds;
use App\Models\reservation;

class reservationController extends Controller
{
    //
    public function getDanhSach()
    {
        $reservation = reservation::all();
        return view('admin.reservation.list',['reservation'=>$reservation]);
    }

    public function getSua($id)
    {
        $loaiban = kinds::all();  
        $reservation = reservation::find($id);
        return view('admin.reservation.detail',['reservation'=>$reservation,'loaiban'=>$loaiban]);
    }

    public function postSua(Request $request, $id)
    {
        $loaiban = kinds::all();  
        $reservation = reservation::find($id);

        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'no_of_guest' => 'required',
                'date_res' => 'required',
                'time' => 'required',
                'occasion' => 'required',
                'DanhMuc' => 'required',
                'note' => 'required',
                'status' => 'required'
            ],

            [
                'name.required'=>'Bạn đã xóa tên khách hàng',
                'email.required'=>'Bạn đã xóa email',
                'phone.required'=>'Bạn đã xóa số điện thoại',
                'no_of_guest.required'=>'Bạn đã xóa số lượng người',
                'date_res.required'=>'Bạn đã xóa ngày đặt bàn',
                'time.required'=>'Bạn đã xóa thời gian đặt bàn',
                'occasion.required'=>'Bạn đã xóa dịp khách hàng đặt',
                'DanhMuc.required'=>'Bạn đã thay đổi loại bàn',
                'note.required'=>'Bạn đã xóa ghi chú',
                'status.required'=>'Bạn đã xóa trạng thái'

            ]);

        $reservation->name=$request->name;
        $reservation->email=$request->email;
        $reservation->phone=$request->phone;
        $reservation->no_of_guest=$request->no_of_guest;
        $reservation->date_res=$request->date_res;
        $reservation->time=$request->time;
        $reservation->occasion=$request->occasion;
        $reservation->kind=$request->DanhMuc;
        $reservation->note=$request->note;
        $reservation->status=$request->status;

        $reservation->save();

        return redirect('admin/reservation/detail/'.$id)->with('thongbao','Cập nhập thành công');
    }

    public function getXoa($id)
    {
        $reservation = reservation::find($id);
        $reservation->delete();

        return redirect('admin/reservation/list')->with('thongbao','Xóa thành công');
    }
}
