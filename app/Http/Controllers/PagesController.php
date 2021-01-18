<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;
use App\Models\food;
use App\Models\slide;
use App\Models\kinds;
use App\Models\contact;

/**
 * 
 */
class PagesController extends Controller
{
	
	function home()
	{
		$danhmuc = category::all();
		$slide = slide::all();
		$loaiban = kinds::all();
		return view('pages.home',['danhmuc'=>$danhmuc,'slide'=>$slide,'loaiban'=>$loaiban]);
	}

	function contact()
	{
		$lienhe = contact::all();
		return view('pages.contact',['lienhe'=>$lienhe]);
	}
}