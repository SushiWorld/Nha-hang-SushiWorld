
    @extends('admin.layout.index')

    @section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại bàn
                            <small>Thêm</small>
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
 

                        <form action="admin/category/add" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Tên loại bàn</label>
                                <input class="form-control" name="kind_item" placeholder="Nhập tên danh mục" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input class="form-control" name="kind_des" placeholder="Nhập mô tả" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<!-- end -->


    @endsection
