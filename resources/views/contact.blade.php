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
                                    <li class="active"><a href="contact.php">PHẢN HỒI</a></li>
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
	
    <!-- contact form -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>LIÊN HỆ VỚI CHÚNG TÔI</h3>
                    <form action="#" name="myform" onsubmit="contact()">
                        <div class="input-list">
                            <input type="text" name="hoten" value="" placeholder="Họ & tên">
                            <input type="text" name="sdt" value="" placeholder="Số điện thoại">
                            <input type="text" name="email" value="" placeholder="Email">
                        </div>
                        <textarea name="textarea" value="" placeholder="Viết gì đó cho chúng tôi..."></textarea>
                        <input type="submit" name="submit" value="GỬI" class="site-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

    <!-- contact info -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__text">
                        <h3>THÔNG TIN LIÊN HỆ</h3>
                        <p>Nhà hàng Sushi World luôn lắng nghe vì bạn. Mọi ý kiến đóng góp & phản hồi của quý khách là điều quý giá đối với chúng tôi.
                        </p>
                        <ul>
                            <li>
                                <span class="fa fa-map-marker"></span>
                                <h5>Địa chỉ</h5>
                                <p>101 Mai Xuân Thưởng - Vĩnh Hòa - Nha Trang - Khánh Hòa</p>
                            </li>
                            <li>
                                <span class="fa fa-mobile"></span>
                                <h5>Số điện thoại</h5>
                                <p>+84 393 572 241</p>
                            </li>
                            <li>
                                <span class="fa fa-envelope"></span>
                                <h5>Email</h5>
                                <p>trananhducdhcn4a@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.4782732618687!2d109.1971873147634!3d12.283544991309931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067fb4e284bd7%3A0x66bee30fdf4d2331!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUaMO0bmcgdGluIExpw6puIGzhuqFj!5e0!3m2!1svi!2s!4v1592730121745!5m2!1svi!2s"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact info -->



    <?php include "footer.php"; ?>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>