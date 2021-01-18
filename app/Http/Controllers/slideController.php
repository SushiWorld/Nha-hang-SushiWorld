<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\slide;

class slideController extends Controller
{
    //
    public function getDanhSach()
    {
        $slide = slide::all();
        return view('admin.slide.list',['slide'=>$slide ]);
    }

    public function getThem()
    {
        return view('admin.slide.add');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'slide_content' => 'required'
            ],

            [
                'title.required'=>'Bạn chưa nhập tên',
                'slide_content.required'=>'Bạn chưa nhập nội dung'
            ]);

        $slide = new slide;
        $slide->title=$request->title;
        $slide->slide_content=$request->slide_content;
        $slide->link = "";

        if($request->hasFile('slide_img')){
            $file = $request->file('slide_img');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('admin/slide/add')->with('thongbao','Thêm thành công');
            }
            $name = $file->getClientOriginalName();

            $slide_img = $name;

            // $food_img = str_random(4)."_".$name;
            // while(file_exists("upload/menu".$food_img)){
            //     $food_img = str_random(4)."_".$name;
            // }


            $file->move("upload/special",$slide_img);
            $slide->slide_img = $slide_img;
            
        }else{
            $slide->slide_img= "";
        }

        $slide->save();

        return redirect('admin/slide/add')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $slide = slide::find($id);
        return view('admin.slide.edit',['slide'=>$slide]);
    }

    public function postSua(Request $request, $id)
    {
        $slide = slide::find($id);

        $this->validate($request,
            [
                'title' => 'required',
                'slide_content' => 'required'
            ],

            [
                'title.required'=>'Bạn chưa nhập tên',
                'slide_content.required'=>'Bạn chưa nhập nội dung'
            ]);

        $slide->title=$request->title;
        $slide->slide_content=$request->slide_content;
        $slide->link = "";

        if($request->hasFile('slide_img')){
            $file = $request->file('slide_img');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('admin/slide/add')->with('thongbao','Thêm thành công');
            }
            $name = $file->getClientOriginalName();

            $slide_img = $name;

            // $food_img = str_random(4)."_".$name;
            // while(file_exists("upload/menu".$food_img)){
            //     $food_img = str_random(4)."_".$name;
            // }


            $file->move("upload/special",$slide_img);
            $slide->slide_img = $slide_img;
            
        }

        $slide->save();

        return redirect('admin/slide/add/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $slide = slide::find($id);
        $slide->delete();

        return redirect('admin/slide/list')->with('thongbao','Xóa thành công');
    }
}
