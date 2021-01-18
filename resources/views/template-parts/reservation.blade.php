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

                        <form id="contact-form" method="post" class="reservations-box" name="contactform" action="mail.php" onsubmit="success()">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="name" id="name" placeholder="HỌ VÀ TÊN" required="required" data-error="Vui lòng điền vào ô này.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="email" id="email" placeholder="EMAIL">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="phone" id="phone" placeholder="SỐ ĐIỆN THOẠI" required="required" data-error="Vui lòng điền vào ô này.">
                                </div>
                            </div>
                            <!-- end col -->
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="number" name="persons" id="persons" placeholder="SỐ NGƯỜI" min="1" required="required" data-error="Vui lòng điền vào ô này.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="date-picker" id="date-picker" placeholder="NGÀY/THÁNG/NĂM" required="required" data-error="Vui lòng điền vào ô này." />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="time-picker" id="time-picker" placeholder="THỜI GIAN" required="required" data-error="Vui lòng điền vào ô này." />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="form_note" id="form_note" placeholder="DỊP" value="">
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="kinds" id="kinds" class="selectpicker">
                                        <option selected disabled>LOẠI BÀN</option>
                                        @foreach($loaiban as $lb)
                                            <option>{{$lb->kind_item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="form_note" id="form_note" placeholder="GHI CHÚ" value="">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">ĐẶT BÀN NGAY</button>
                                </div>
                            </div>
                            <!-- end col -->
                        </form>
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