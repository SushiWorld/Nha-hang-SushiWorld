    @extends('admin.layout.index')

    @section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thực đơn
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

                        <form action="admin/food/add" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select class="form-control" name="DanhMuc">
                                    @foreach ($danhmuc as $dm)
                                        <option value="{{$dm->id}}">{{$dm->food_category}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name="food_img"/>
                            </div>
                            <div class="form-group">
                                <label>Tên món ăn</label>
                                <input class="form-control" name="food_name" placeholder="Tên món ăn..." />
                            </div>
                            <div class="form-group">
                                <label>Giá cả</label>
                                <input class="form-control" name="food_price" placeholder="Giá cả..." />
                            </div>
                            <div class="form-group">
                                <label>Mô tả món ăn</label>
                                <input class="form-control" name="food_description" placeholder="Mô tả..." />
                            </div>
                            <div class="form-group">
                                <label>Nổi bật</label>
                                <label class="radio-inline">
                                    <input name="food_highlight" value="0" checked="" type="radio">Không
                                </label>
                                <label class="radio-inline">
                                    <input name="food_highlight" value="1" type="radio">Có
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<!-- end -->


    @endsection
