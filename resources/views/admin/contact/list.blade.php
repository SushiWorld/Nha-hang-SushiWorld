
    @extends('admin.layout.index')

    @section('content')


<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Phản hồi khách hàng
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
                                <th>Tin nhắn</th>
                                <th>Trạng thái</th>
                                <th>Xóa</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lienhe as $lh)
                            <tr class="odd gradeX" align="center">
                                <td>{{$lh->id}}</td>
                                <td>{{$lh->customer_name}}</td>
                                <td>{{$lh->email}}</td>
                                <td>{{$lh->phone}}</td>
                                <td>{{$lh->message}}</td>
                                <td>
                                    @if($lh->status == 0)
                                    {{'Không hiển thị'}}
                                    @else
                                    {{'Hiển thị'}}
                                    @endif
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/contact/delete/{{$lh->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/contact/detail/{{$lh->id}}">Chi tiết</a></td>
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