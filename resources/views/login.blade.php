<!DOCTYPE html>
<html lang="utf-8">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Nhà Hàng Sushi World</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="icon" href="images/icon_site.png" type="imgages/icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-login.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/red.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>
    <!-- From -->
    <script src="js/from.js"></script>

</head>

<body>
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
                                        <img src="images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.php">TRANG CHỦ</a></li>
                                    <li class="active"><a href="login.php">ĐĂNG NHẬP</a></li>
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
                        <a href="login.php" class="fa fa-user-o" style="font-size: 22px; color: #ff0000;"></a>
                    </div>

                    <!-- Login Form -->
                    <form action="#" name="myformlogin" onsubmit="login()">
                        <input type="text" id="username" class="fadeIn second zero-raduis" name="txtusername" value="" placeholder="Tài khoản Admin">
                        <input type="password" id="password" class="fadeIn third zero-raduis" name="txtpassword" value="" placeholder="Mật khẩu">
                        <div id="formFooter">
                            <a href="#">Quên mật khẩu?</a>
                        </div>
                        <input type="submit" name="btnlogin" class="fadeIn fourth zero-raduis" value="ĐĂNG NHẬP">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="footer" class="footer-main">
        <div class="footer-box pad-top-70">
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Bản quyền &copy; thuộc về nhóm Đức - Đạt - Thiên.<a href="#" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>