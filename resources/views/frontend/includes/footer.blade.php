<!--::footer_part start::-->
<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="single-footer-widget">
                    <h4>Our Service</h4>
                    <ul>
                        {{-- <li><a href="#">Car accident</a></li>
                        <li><a href="#">Personal injury</a></li>
                        <li><a href="#">Family law</a></li>
                        <li><a href="#">Bank and financial</a></li>
                        <li><a href="#">Capital market</a></li>
                        <li><a href="#">Employment Law</a></li> --}}
                    </ul>

                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="single-footer-widget footer_icon">
                    <h4>Contact Info</h4>
                    {{-- Address --}}
                    <p>{{$footer->address}}</p>
                    <ul>
                        {{-- phone number --}}
                        <li><a href="#"><i class="ti-mobile"></i>{{$footer->phone}}</a></li>
                        {{-- email --}}
                        <li><a href="#"><i class="ti-email"></i>{{$footer->email}}</a></li>
                        {{-- wwebsite --}}
                        <li><a href="#"><i class="ti-world"></i>{{$footer->website}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="single-footer-widget footer_3">
                    <h4>Social Media</h4>
                    <div class="social_icon">
                        {{-- facebook --}}
                        <a href="{{$footer->facebook}}"> <i class="ti-facebook"></i> </a>
                        {{-- git --}}
                        <a href="{{$footer->github}}"> <i class="ti-github"></i> </a>
                        {{-- instagram --}}
                        <a href="{{$footer->instagram}}"> <i class="ti-instagram"></i> </a>
                        {{-- linked in --}}
                        <a href="{{$footer->linkedin}}"> <i class="ti-linkedin"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="single-footer-widget footer_2">
                    <h4>Newsletter</h4>
                    <p>Stay updated with our latest trends see heaven so said place fruit.
                    </p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="btn btn-default text-uppercase"><i class="ti-angle-right"></i></button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                    type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="ti-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Anisha</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--::footer_part end::-->