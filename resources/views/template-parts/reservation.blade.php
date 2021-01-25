    <div id="reservation" class="reservations-main pad-top-70 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">Đặt Bàn</h2>
                        </div>
                        <h4 class="form-title">Quý khách có thể đặt bàn trước tại đây.<br>Vui lòng điển đầy đủ các thông tin ở ô bên dưới !</h4>
                        <p>TRONG GIÂY LÁT CHÚNG TÔI SẼ TỰ ĐỘNG LIÊN LẠC VỚI QUÝ KHÁCH ĐỂ XÁC NHẬN !</p>
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
                        <form action="order" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="name" id="name" placeholder="HỌ VÀ TÊN" required="required" data-error="Vui lòng điền vào ô này.">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="email" id="email" placeholder="EMAIL">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="tel" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="SỐ ĐIỆN THOẠI" required="required" data-error="Vui lòng điền vào ô này.">
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="number" name="persons" id="persons" placeholder="SỐ NGƯỜI" min="1" required="required" data-error="Vui lòng điền vào ô này.">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="date" id="date-picker" placeholder="NGÀY/THÁNG/NĂM" required="required" data-error="Vui lòng điền vào ô này." />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="time" id="time-picker" placeholder="THỜI GIAN" required="required" data-error="Vui lòng điền vào ô này." />
                                </div>
                            </div>
 
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="occasion" id="occasion" placeholder="DỊP" value="">
                                </div>
                            </div>
        

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="kinds" id="kinds" class="selectpicker">
                                        <option selected disabled>LOẠI BÀN</option>
                                        <?php $a = 1; ?>
                                        @foreach($loaiban as $lb)
                                        @php
                                        $i = 0
                                            <option> <?php echo $a ?> - {{$lb->kind_item}}</option>
                                        <?php $a++; ?>         
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="formnote" id="form_note" placeholder="GHI CHÚ (Nếu không có ghi chú, vui lòng điền không)" value="">
                                </div>
                        </div>

                        <input type="text" hidden="hidden"  name="status" id="form_note"  value="0">
                    
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" >ĐẶT BÀN NGAY</button>
                                </div>
                            </div>
                        </form>

                        <!-- <form id="contact-form" action="submit" method="POST">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="form_note" id="form_note" placeholder="GHI CHÚ" value="">
                                </div>
                        </div>
                    
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" >ĐẶT BÀN NGAY</button>
                                </div>
                            </div>

                        </form> -->
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->
