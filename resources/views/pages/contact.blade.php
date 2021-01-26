<!DOCTYPE html>
<html lang="utf-8">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Nhà Hàng Sushi World | Contact</title>
    <base href="{{asset('')}}">
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

    @yield('css')
</head>

<body>
    @include('layouts.loader')

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
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="home">
                                        <img src="images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="home">TRANG CHỦ</a></li>
                                    <li class="active"><a href="contact">PHẢN HỒI</a></li>
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
	<!-- ======= Testimonials Section ======= -->
    

    <!-- contact form -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 30px;">-->
                        <h2><b>LIÊN HỆ VỚI CHÚNG TÔI</b></h2>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    {{$err}}; <br>
                                @endforeach
                            </div>
                        @endif
 
                        @if (session('thongbao'))
                            <div class="alert alert-success">
                                <b>{{session('thongbao')}}</b>
                            </div>
                        @endif
                        <form action="feedback" name="myform" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="input-list">
                                <input type="text" name="hoten" value="" placeholder="Họ & tên">
                                <input type="tel" name="sdt" pattern="[0-9]{10}" value="" placeholder="Số điện thoại">
                                <input type="email" name="email" value="" placeholder="Email">
                                <input type="text" hidden="hidden"  name="status" value="0">
                            </div>
                            <textarea name="message" value="" placeholder="Viết gì đó cho chúng tôi..."></textarea>
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
                        <h2><b>THÔNG TIN LIÊN HỆ</b></h2>
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

    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__text">
                        <h2><b>PHẢN HỒI TỪ KHÁCH HÀNG</b></h2>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                   
                            
                            @foreach($lienhe as $lh)
                            @if($lh->status == 1)
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <div class="testimonials-carousel testimonials">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <h3>{{$lh->customer_name}}</h3>
                                            <p><i class="bx bxs-quote-alt-left quote-icon-left">
                                                {{$lh->message}}
                                            </i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact info -->

    @include('layouts.footer')
    @yield('script')
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>