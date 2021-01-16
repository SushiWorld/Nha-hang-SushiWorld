    @extends('admin.layout.index')

    @section('content')


<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>{{$slide->title}}</small>
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
 

                        <form action="admin/slide/edit/{{$slide->id}}" method="POST" enctype="multipart/form-data">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            
                            <div class="form-group">
                                <label>Hình</label>
                                <p><img width="200px" src="upload/slide/{{$slide->slide_img}}"></p>
                                <input type="file" class="form-control" name="slide_img"/>
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="title" placeholder="Tên slide..." value="{{$slide->title}}"/>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <input class="form-control" name="slide_content" placeholder="Nội dung..." value="{{$slide->slide_content}}"/>
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" name="link" placeholder="Link..." value="{{$slide->link}}"/>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
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
