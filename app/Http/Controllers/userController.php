<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class userController extends Controller
{
    //
    public function getDanhSach()
    {
        $user = User::all();
        return view('admin.user.list',['user'=>$user]);
    }

    public function getThem()
    {
        return view('admin.user.add');
    }

    public function postThem(Request $request)
    {
        $this->validate($request, 
            [
                'name' => 'required|min:2',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:6|max:32',
                'passwordAgain' => 'required|same:password'
            ],[
                'name.required'=>'Bạn chưa nhập tên tài khoản',
                'name.min'=>'Tên tài khoản phải có ít nhất 2 kí tự',

                'email.required'=>'Bạn chưa nhập email',
                'email.unique'=>'Email đã tồn tại',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',

                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Tên tài khoản phải có ít nhất 6 kí tự',
                'password.max'=>'Tên tài khoản phải có nhiều nhất 32 kí tự',

                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu nhập lại không đúng'
            ]
        );

        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);

        $user->save();

        return redirect('admin/user/add')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $user = user::find($id);
        return view('admin.user.edit',['user'=>$user]);
    }

    public function postSua(Request $request, $id)
    {
        $user = user::find($id);
        $this->validate($request, 
            [
                'name' => 'required|min:2',
                'email' => 'required',
                'password' => 'required|min:6|max:32',
                'passwordAgain' => 'required|same:password'
            ],[
                'name.required'=>'Bạn chưa nhập tên tài khoản',
                'name.min'=>'Tên tài khoản phải có ít nhất 2 kí tự',

                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',

                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Password phải có ít nhất 6 kí tự',
                'password.max'=>'Password phải có nhiều nhất 32 kí tự',

                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu nhập lại không đúng'
            ]
        );

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);

        $user->save();

        return redirect('admin/user/add/'.$id)->with('thongbao','Sửa thành công');
        
    }

    public function getXoa($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/user/list')->with('thongbao','Xóa thành công');
    }

    public function getdangnhapAdmin(){
        return view('admin.login');
    }

    public function postdangnhapAdmin(Request $request){
        $this->validate($request, 
            [
                'email' => 'required',
                'password' => 'required|min:6|max:32'
            ],[
                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',

                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Password phải có ít nhất 6 kí tự',
                'password.max'=>'Password phải có nhiều nhất 32 kí tự'
            ]
        );

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('admin/reservation/list');
        }
        else
        {
            return redirect('admin/dangnhap')->with('thongbao','Đăng nhập thất bại');
        }
    }

    public function getdangxuatAdmin(){
        Auth::logout();
        return redirect ('admin/dangnhap');
    }
}
