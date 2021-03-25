    @extends('admin.layout.index')

    @section('content')


<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tài khoản admin
                            <small>{{$user->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    {{$err}}; <br>
                                @endforeach
                            </div>
                        @endif
 
                        @if (session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
 

                        <form action="admin/user/edit/{{$user->id}}" method="POST" enctype="multipart/form-data">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            
                            <div class="form-group">
                            <label>Tên tài khoản</label>
                            <input class="form-control" name="name" value="{{$user->name}}" placeholder="Tên tài khoản..." />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="email" value="{{$user->email}}" placeholder="Email..." />
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input class="form-control" name="password" type="password" value="{{$user->password}}" placeholder="Nhập mật khẩu..." />
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input class="form-control" name="passwordAgain" type="password" placeholder="Nhập lại mật khẩu..." />
                        </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" name="cate_des" class="btn btn-default">Làm mới</button>
                            <button><a href="admin/user/list"> Quay lại</a></button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    @endsection
