
    @extends('admin.layout.index')

    @section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
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
                                <th>Hình ảnh</th>
                                <th>Tên món ăn</th>
                                <th>Id danh mục</th>
                                <th>Giá cả</th>
                                <th>Mô tả</th>
                                <th>Nối bật</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($thucdon as $td)
                            <tr class="odd gradeX" align="center">
                                <td>{{$td->id}}</td>
                                <td><img width="80px" src="upload/menu/{{$td->food_img}}"/></td>
                                <td>{{$td->food_name}}</td>
                                <td>{{$td->cate_id}}</td>
                                <td>{{$td->food_price}}</td>
                                <td>{{$td->food_description}}</td>
                                <td>
                                    @if($td->food_highlight == 0)
                                    {{'Không'}}
                                    @else
                                    {{'Có'}}
                                    @endif
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/food/delete/{{$td->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/food/edit/{{$td->id}}">Sửa</a></td>
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