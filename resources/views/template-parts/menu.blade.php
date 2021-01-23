    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
                        Menu Sushi World    
                    </h2>
                        <p class="title-caption text-center">Mời thực khách hãy xem qua các món ăn và thức uống ngon ngất ngây độc quyền của Nhà hàng Sushi World.</p>
                    </div>
                    <div class="tab-menu">
                        <div class="slider slider-nav">
                            
                                    @foreach($danhmuc as $dm)
                                    <div class="tab-title-menu">
                                        <h2>{{$dm->food_category}}</h2>
                                        <p> <i class="{{$dm->icon}}"></i> </p>
                                    </div>
                                    @endforeach
                        </div>
                        <!--KHAI VỊ-->
                        <div class="slider slider-single">
                            @foreach($danhmuc as $dm)
                                <div>
                                    @foreach($dm->food as $td)
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            @if($td->food_highlight == 1)
                                            <img src="images/{{$td->food_img}}" alt="" class="img-responsive">
                                            <div>
                                                <h3>{{$td->food_name}}</h3>
                                                <p>
                                                    {{$td->food_description}}
                                                </p>
                                            </div>
                                            <span class="offer-price">{{$td->food_price}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->