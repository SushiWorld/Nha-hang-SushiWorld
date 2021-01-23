<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\reservation;

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
    	$datban->occasion=$req->occasion;
    	$datban->note=$req->formnote;
    	$datban->kind = (int)substr($req->kinds, 0, 1); ;
    	$datban->status =$req->status;
    	$datban->save();

    	return redirect('home')->with('thongbao','Order thành công');

    }
}
