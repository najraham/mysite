<!--::footer_part start::-->
<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="single-footer-widget footer_icon">
                    <h4>Contact Info</h4>
                    <ul>
                        {{-- Address --}}
                        <li><a><i class="ti-location-pin"></i>{{$footer->address}}</a></li>
                        {{-- phone number --}}
                        <li><a><i class="ti-mobile"></i>{{$footer->phone}}</a></li>
                        {{-- email --}}
                        <li><a><i class="ti-email"></i>{{$footer->email}}</a></li>
                        {{-- wwebsite --}}
                        <li><a><i class="ti-world"></i>{{$footer->website}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
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