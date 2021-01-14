<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\slide;

class slideController extends Controller
{
    //
    public function getDanhSach()
    {
        $slide = slide ::all();
        return view('admin.slide.list',['slide'=>$slide ]);
    }

    public function getThem()
    {
        
    }

    public function postThem(Request $request)
    {
        
    }

    public function getSua($id)
    {
       
    }

    public function postSua(Request $request, $id)
    {
        
    }

    public function getXoa($id)
    {
        
    }
}
