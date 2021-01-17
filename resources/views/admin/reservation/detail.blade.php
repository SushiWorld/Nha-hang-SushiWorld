    @extends('admin.layout.index')

    @section('content')


<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi tiết đơn hàng
                            <small>Đơn {{$reservation->id}}</small>
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
 

                        <form action="admin/reservation/detail/{{$reservation->id}}" method="POST" enctype="multipart/form-data">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr align="center">
                                        <th style="text-align: center;">Tên khách hàng</th>
                                        <th style="text-align: center;">Email</th>
                                        <th style="text-align: center;">Số điện thoại</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr class="odd gradeX" align="center">
                                        <td><input class="form-control" name="name" value="{{$reservation->name}}" style="text-align: center;"/></td>
                                        <td><input class="form-control" name="email" value="{{$reservation->email}}" style="text-align: center;"/></td>
                                        <td><input class="form-control" name="phone" value="{{$reservation->phone}}" style="text-align: center;"/></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr align="center">
                                        <th style="text-align: center;">Số người</th>
                                        <th style="text-align: center;">Ngày đặt</th>
                                        <th style="text-align: center;">Thời gian</th>
                                        <th style="text-align: center;">Dịp</th>
                                        <th style="text-align: center;">Loại bàn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="odd gradeX" align="center">
                                        <td><input class="form-control" name="no_of_guest" value="{{$reservation->no_of_guest}}" style="text-align: center;"/></td>
                                        <td><input class="form-control" name="date_res" value="{{$reservation->date_res}}" style="text-align: center;"/></td>
                                        <td><input class="form-control" name="time" value="{{$reservation->time}}" style="text-align: center;"/></td>
                                        <td><input class="form-control" name="occasion" value="{{$reservation->occasion}}" style="text-align: center;"/></td>
                                        <td>
                                            <select class="form-control" name="DanhMuc" id="DanhMuc" style="text-align: center;">
                                                @foreach ($loaiban as $lb)
                                                    <option 
                                                    @if($reservation->kinds->id == $lb->id)
                                                        {{"selected"}}
                                                    @endif
                                                    value="{{$lb->id}}">
                                                        {{$lb->kind_item}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="form-group">
                                <label>Ghi chú</label>
                                <input class="form-control" name="note" value="{{$reservation->note}}"/>
                            </div>

                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select class="form-control" name="DanhMuc">
                                    <option value="0" 
                                        @if($reservation->status == 0)
                                            {{"checked"}}
                                        @endif>Đang chờ xử lý</option>
                                    <option value="1"
                                        @if($reservation->status == 1)
                                            {{"checked"}}
                                        @endif>Đã xác nhận</option>
                                </select>
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
