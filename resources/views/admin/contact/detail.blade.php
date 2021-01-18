    @extends('admin.layout.index')

    @section('content')


<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi tiết đơn hàng
                            <small>Đơn {{$lienhe->id}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-9" style="padding-bottom:120px">

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
 

                        <form action="admin/contact/detail/{{$lienhe->id}}" method="POST" enctype="multipart/form-data">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            
                            <div class="form-group">
                                <label>Tên khách hàng</label>
                                <input class="form-control" name="customer_name" value="{{$lienhe->customer_name}}"/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" value="{{$lienhe->email}}"/>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" value="{{$lienhe->phone}}"/>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea id="demo" class="form-control" name="message" rows="3">{{$lienhe->message}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Trạng thái &nbsp; &nbsp;</label>
                                <label class="radio-inline">
                                    <input name="status" value="0" 
                                        @if($lienhe->status == 0)
                                            {{"checked"}}
                                        @endif

                                        type="radio">Không hiển thị
                                </label>
                                <label class="radio-inline">
                                    <input name="status" value="1" 
                                        @if($lienhe->status == 1)
                                            {{"checked"}}
                                        @endif

                                    type="radio">Hiển thị
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Cập nhập</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    @endsection
