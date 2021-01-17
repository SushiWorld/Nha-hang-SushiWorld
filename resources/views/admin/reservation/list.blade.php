
    @extends('admin.layout.index')

    @section('content')


<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Đơn đặt bàn
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Trạng thái</th>
                                <th>Xóa</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservation as $res)
                            <tr class="odd gradeX" align="center">
                                <td>{{$res->id}}</td>
                                <td>{{$res->name}}</td>
                                <td>{{$res->email}}</td>
                                <td>{{$res->phone}}</td>
                                <td>
                                    @if($res->status == 0)
                                    {{'Đang chờ xử lý'}}
                                    @else
                                    {{'Đã xác nhận'}}
                                    @endif
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/reservation/delete/{{$res->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/reservation/detail/{{$res->id}}">Chi tiết</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


    @endsection