<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\reservation;
use App\Models\contact;

class Submit extends Controller
{
    public function themorder(Request $req){

 	// 	echo $req->name;
  //   	echo $req->email;
  //   	echo $req->phone;
  //   	echo $req->persons;
  //   	echo $req->date;
  //   	echo $req->time;
  //   	echo $req->occasion;
  //   	echo $req->formnote;
  //   	$kind = substr($req->kinds, 0, 1); 
  //   	$kindint = (int)$kind;
		// echo $kindint;
  //   	echo $req->status;


    	$datban = new reservation;
    	$datban->name=$req->name;
    	$datban->email=$req->email;
    	$datban->phone=$req->phone;
    	$datban->no_of_guest=$req->persons;
    	$datban->date_res=$req->date;
    	$datban->time=$req->time;
    	$datban->kind = (int)substr($req->kinds, 0, 1); ;
    	$datban->status =$req->status;
    	
      if(is_null($req->formnote)){
        $req->formnote="Không có ghi chú";
        $datban->note=$req->formnote;
      }else $datban->note=$req->formnote;
      
      if(is_null($req->occasion)){
        $req->occasion="Không";
        $datban->occasion=$req->occasion;
      }else $datban->occasion=$req->occasion;

      $datban->save();
    	return redirect('home#reservation')->with('thongbao','Order thành công. Mã order của quý khách là ORD_0'.$datban->id.'.');

    }

    public function themfeedback(Request $req){
        $feedback = new contact;
        $feedback->customer_name=$req->hoten;
        $feedback->phone=$req->sdt;
        $feedback->email=$req->email;
        $feedback->message=$req->message;
        $feedback->status=$req->status;
        $feedback->save();

        return redirect('contact')->with('thongbao','Cảm ơn quý khách đã gửi phản hồi cho chúng tôi. Xin chân thành cảm ơn!');
    }
}
