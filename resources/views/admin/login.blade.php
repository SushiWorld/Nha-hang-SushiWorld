<!DOCTYPE html>
<html lang="utf-8">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>SushiWorld - Đăng nhập Admin</title>
    <base href="{{asset('')}}">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="icon" href="upload/main/icon_site.png" type="imgages/icon">

    <!-- Bootstrap CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Site CSS -->
    <link rel="stylesheet" href="admin_asset/dist/css/style.css">
    <link rel="stylesheet" href="admin_asset/dist/css/style-login.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="admin_asset/dist/css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="admin_asset/dist/css/colors/red.css" />

    <!-- Modernizer -->
    <script src="admin_asset/dist/js/modernizer.js"></script>
    <!-- From -->
    <script src="admin_asset/dist/js/from.js"></script>

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Modernizer -->
    <script src="admin_asset/dist/js/modernizer.js"></script>
    <!-- From -->
    <script src="admin_asset/dist/js/from.js"></script>

</head>

<body style="background: black">
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top"  style="background-color: #202020;">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="index.php">
                                        <img src="upload/main/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="home">TRANG CHỦ</a></li>
                                    <li class="active"><a href="login">ĐĂNG NHẬP</a></li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
    <!-- end site-header -->

    <!-- Login -->
    <div class="bg-login">
        <div class="formlogin">
            <div class="wrapper fadeInDown zero-radius">
                <div id="formContent">
                    <!-- Icon -->
                    <div class="fadeIn first">
                        <h2 class="my-5">Đăng Nhập</h2>
                    </div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    {{$err}}; <br>
                                @endforeach
                            </div>
                        @endif
 
                        @if (session('thongbao'))
                            {{session('thongbao')}}
                        @endif

                    <!-- Login Form -->
                    <form role="form" action="admin/login" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="text" id="email" class="fadeIn second zero-raduis" name="email" value="" placeholder="Tài khoản Admin">
                        <input type="password" id="password" class="fadeIn third zero-raduis" name="password" value="" placeholder="Mật khẩu">
                        <input type="submit" name="btnlogin" class="fadeIn fourth zero-raduis" value="ĐĂNG NHẬP">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="footer" class="copyright-main">
        <h6 class="copy-title"> Bản quyền &copy; thuộc về nhóm Đức - Đạt - Thiên.</h6>
    </div>

    <!-- ALL JS FILES -->
    <script src="admin_asset/dist/js/all.js"></script>
    <script src="admin_asset/dist/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="admin_asset/dist/js/custom.js"></script>

</body>
</html> 
