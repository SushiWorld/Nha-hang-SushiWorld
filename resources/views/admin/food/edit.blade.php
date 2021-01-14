    @extends('admin.layout.index')

    @section('content')


<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thực đơn
                            <small>{{$thucdon->food_name}}</small>
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
 

                        <form action="admin/food/edit/{{$thucdon->id}}" method="POST" enctype="multipart/form-data">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            

                            <div class="form-group">
                                <label>Danh mục</label>
                                <select class="form-group" name="DanhMuc" id="DanhMuc">
                                    @foreach ($danhmuc as $dm)
                                        <option 

                                        @if($thucdon->category->id == $dm->id)

                                        {{"selected"}}

                                        @endif

                                        value="{{$dm->id}}">

                                            {{$dm->food_category}}

                                        </option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <p><img width="200px" src="upload/menu/{{$thucdon->food_img}}"></p>
                                <input type="file" class="form-control" name="food_img"/>
                            </div>
                            <div class="form-group">
                                <label>Tên món ăn</label>
                                <input class="form-control" name="food_name" placeholder="Điền tên món ăn" value="{{$thucdon->food_name}}"/>
                            </div>
                            <div class="form-group">
                                <label>Giá cả</label>
                                <input class="form-control" name="food_price" placeholder="Giá cả" value="{{$thucdon->food_price}}"/>
                            </div>
                            <div class="form-group">
                                <label>Mô tả món ăn</label>
                                <input class="form-control" name="food_description" placeholder="Điền mô tả món ăn" value="{{$thucdon->food_description}}"/>
                            </div>
                            <div class="form-group">
                                <label>Nối bật</label>
                                <label class="radio-inline">
                                    <input name="food_highlight" value="0" 
                                        @if($thucdon->food_highlight == 0)
                                            {{"checked"}}
                                        @endif

                                        type="radio">Không
                                </label>
                                <label class="radio-inline">
                                    <input name="food_highlight" value="1" 
                                        @if($thucdon->food_highlight == 1)
                                            {{"checked"}}
                                        @endif

                                    type="radio">Có
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default" >Sửa</button>
                            <button type="reset" name="cate_des" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    @endsection
