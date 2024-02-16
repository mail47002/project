<footer class="footer-area footer-fixed">
    <!-- Footer Top -->
    <div class="footer-top ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Logo -->
                        <a class="navbar-brand" href="#">
                            <img class="logo" src="assets/img/logo/logo.png" alt="" width="240">
                        </a>
                        <p class="mt-2 mb-3">Pfandnetzwerk hat das Ziel der nachhaltigen Pfandverwertung zu gemeinnützigen Zwecken. <a href="#niroflow-pfandnetzwerk">Werde jetzt ein Teil vom Pfandnetzwerk</a>.</p>
                        <!-- Social Icons -->
                        <div class="social-icons d-flex">
                            <a class="facebook" href="https://facebook.com/pfandnetzwerk" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="google-plus" href="https://instagram.com/pfandnetzwerk" target="_blank">
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="vine" href="mailto:info@pfandnetzwerk.de" target="_blank">
                                <i class="fas fa-envelope"></i>
                                <i class="fas fa-envelope"></i>
                            </a>
                            {{-- <a class="google-plus" href="#">
                                <i class="fab fa-google-plus-g"></i>
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                            <a class="vine" href="#">
                                <i class="fab fa-vine"></i>
                                <i class="fab fa-vine"></i>
                            </a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title mb-2">Links</h3>
                        <ul>
                            <li class="py-2"><a href="/impressum">Impressum</a></li>
                            <li class="py-2"><a href="/datenschutz">Datenschutz</a></li>
                            <li class="py-2"><a href="#niroflow-pfandnetzwerk">Kontakt</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title mb-2">Bekannt aus</h3>
                        <div class="row">
                            @foreach($articles as $media)
                            <div class="col-3">
                                <img src="{{$media->image}}" alt="{{$media->media}}" title="{{$media->media}}" class="img-fluid">
                            </div>
                            @endforeach
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <p><a href="/presse">Zum Pressebereich</a></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title mb-2">Product Help</h3>
                        <ul>
                            <li class="py-2"><a href="#">FAQ</a></li>
                            <li class="py-2"><a href="#">Privacy Policy</a></li>
                            <li class="py-2"><a href="#">Support</a></li>
                            <li class="py-2"><a href="#">Terms &amp; Conditions</a></li>
                            <li class="py-2"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title mb-2">Download</h3>
                        <!-- Store Buttons -->
                        <div class="button-group store-buttons store-black d-flex flex-wrap">
                            <a href="#">
                                <img src="assets/img/icon/google-play-black.png" alt="">
                            </a>
                            <a href="#">
                                <img src="assets/img/icon/app-store-black.png" alt="">
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copyright Area -->
                    <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                        <!-- Copyright Left -->
                        <div class="copyright-left">&copy; Copyright {{date('Y')}} Pfandnetzwerk.de</div>
                        <!-- Copyright Right -->
                        <div class="copyright-right">Made with <i class="fas fa-heart"></i> by <a href="https://pfandnetzwerk.de">Pfandnetzwerk</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>