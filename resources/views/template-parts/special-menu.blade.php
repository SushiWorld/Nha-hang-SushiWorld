    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Menu Ưu Thích </h2>
                        <h5 class="title-caption text-center"> Chúng tôi xin được giới thiệu các món ăn đặc biệt được ưu chuộng tại Sushi World.<br> Chúc quý khách có một ngày tốt lành !</h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            
                            @foreach($slide as $sd)
                            <div class="item item-type-zoom">
                                <a class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            {{$sd->title}}
                                            <div class="line"></div>
                                            <div class="dit-line">{{$sd->slide_content}}</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/{{$sd->slide_img}}" alt="sp-menu">
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->