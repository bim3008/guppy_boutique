@php
     $item = json_decode($itemsSetting['value']);
@endphp
<footer class="footer">
    {{-- <div class="footer-top info-boxes-container">
        <div class="container">
            <div class="info-box">
                <i class="icon-shipping"></i>

                <div class="info-box-content">
                    <h4>FREE SHIPPING & RETURN</h4>
                    <p>Free shipping on all orders over $99.</p>
                </div><!-- End .info-box-content -->
            </div><!-- End .info-box -->

            <div class="info-box">
                <i class="icon-us-dollar"></i>

                <div class="info-box-content">
                    <h4>MONEY BACK GUARANTEE</h4>
                    <p>100% money back guarantee</p>
                </div><!-- End .info-box-content -->
            </div><!-- End .info-box -->

            <div class="info-box">
                <i class="icon-support"></i>

                <div class="info-box-content">
                    <h4>ONLINE SUPPORT 24/7</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div><!-- End .info-box-content -->
            </div><!-- End .info-box -->
        </div><!-- End .container -->
    </div><!-- End .footer-top --> --}}

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="widget">
                                <h4 class="widget-title">Giới thiệu</h4>
                                <ul class="links">
                                    {!! $item->introduce !!}
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-3 -->

                        <div class="col-md-4">
                            <div class="widget">
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Địa chỉ:</span>{{ $item->address}}
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Liên hệ:</span>SĐT: <a href="tel:">{{ $item->hotline }}</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">bimmm3008@gmail.com</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Thời gian làm việc</span>
                                        {{ $item->time_work}}
                                    </li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-5 -->

                        {{-- <div class="col-md-5">
                            <div class="widget">
                                <h4 class="widget-title">Main Features</h4>
                                
                                <ul class="links">
                                    <li><a href="#">Super Fast Magento Theme</a></li>
                                    <li><a href="#">1st Fully working Ajax Theme</a></li>
                                    <li><a href="#">20 Unique Homepage Layouts</a></li>
                                    <li><a href="#">Powerful Admin Panel</a></li>
                                    <li><a href="#">Mobile & Retina Optimized</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-5 --> --}}
                    </div><!-- End .row -->
                </div><!-- End .col-lg-8 -->

                <div class="col-lg-4">
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">Đăng ký</h4>
                        <p>Đăng ký để nhận những thông tin, sự kiện , ưu đãi sớm nhất.Đăng ký thông tin ngay hôm nay</p>
                        <form action="#">
                            <input type="email" class="form-control" placeholder="Email" required>

                            <input type="submit" class="btn" value="Gửi">
                        </form>
                    </div><!-- End .widget -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div>

    <div class="container">
        <div class="footer-bottom">
            <p class="footer-copyright">{{  $item->copyright  }}</p>
            <img src=" {{ asset('guppy/assets/images/payments.png') }}" alt="payment methods" class="footer-payments">

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .footer-bottom -->
    </div><!-- End .containr -->
</footer>
