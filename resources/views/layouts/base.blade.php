<!doctype html>
<html class="no-js" lang="de">

<head>
    

<script src="https://5f3c395.ccm19.de/app/public/ccm19.js?apiKey=91525309d9fd80db08819d6af16f6ebf9e33200dfff52272&amp;domain=d29a02b&amp;lang=de_DE" referrerpolicy="origin"></script>


<script src="https://5f3c395.ccm19.de/app/public/ccm19.js?apiKey=91525309d9fd80db08819d6af16f6ebf9e33200dfff52272&amp;domain=d29a02b&amp;lang=zh_ZH" referrerpolicy="origin"></script>



    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    @yield('seo')
    

    <!-- Favicon  -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <script src="https://kit.fontawesome.com/23647ffdd9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/qkd4xnz.css">
    <link rel="stylesheet" href="/dist/css/litetooltip.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V22FK0D6TN"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-V22FK0D6TN');
</script>

</head>

<body>
    <script src="https://storage.googleapis.com/niro-eu-static/widget/v1-2-3/index.min.js"></script><niroflow-modal niroflow-id="pfandnetzwerk" width="800px" pass-parameters="true" dynamic-height="true"></niroflow-modal>
    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main">
        @include('partials.nav')

       @yield('hero')


        
        @include('partials.numbers')

       @yield('content')
       
       

        

       

        

        

        {{-- <!-- ***** Price Plan Area Start ***** -->
        <section id="pricing" class="section price-plan-area bg-gray overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>Unlock Full Power Of sApp</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-lg-8">
                        <div class="row price-plan-wrapper">
                            <div class="col-12 col-md-6">
                                <!-- Single Price Plan -->
                                <div class="single-price-plan text-center p-5 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.4s">
                                    <!-- Plan Thumb -->
                                    <div class="plan-thumb">
                                        <img class="avatar-lg" src="assets/img/pricing/basic.png" alt="">
                                    </div>
                                    <!-- Plan Title -->
                                    <div class="plan-title my-2 my-sm-3">
                                        <h4 class="text-uppercase">Basic</h4>
                                    </div>
                                    <!-- Plan Price -->
                                    <div class="plan-price pb-2 pb-sm-3">
                                        <h2 class="fw-7"><small class="fw-6">$</small>49</h2>
                                    </div>
                                    <!-- Plan Description -->
                                    <div class="plan-description">
                                        <ul class="plan-features">
                                            <li class="border-top py-3">5GB Linux Web Space</li>
                                            <li class="border-top py-3">5 MySQL Databases</li>
                                            <li class="border-top py-3">24/7 Tech Support</li>
                                            <li class="border-top border-bottom py-3">Daily Backups</li>
                                        </ul>
                                    </div>
                                    <!-- Plan Button -->
                                    <div class="plan-button">
                                        <a href="#" class="btn mt-4">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-4 mt-md-0">
                                <!-- Single Price Plan -->
                                <div class="single-price-plan text-center p-5 wow fadeInRight" data-aos-duration="2s" data-wow-delay="0.4s">
                                    <!-- Plan Thumb -->
                                    <div class="plan-thumb">
                                        <img class="avatar-lg" src="assets/img/pricing/premium.png" alt="">
                                    </div>
                                    <!-- Plan Title -->
                                    <div class="plan-title my-2 my-sm-3">
                                        <h4 class="text-uppercase">Pro</h4>
                                    </div>
                                    <!-- Plan Price -->
                                    <div class="plan-price pb-2 pb-sm-3">
                                        <h2 class="fw-7"><small class="fw-6">$</small>129</h2>
                                    </div>
                                    <!-- Plan Description -->
                                    <div class="plan-description">
                                        <ul class="plan-features">
                                            <li class="border-top py-3">10GB Linux Web Space</li>
                                            <li class="border-top py-3">50 MySQL Databases</li>
                                            <li class="border-top py-3">Unlimited Email</li>
                                            <li class="border-top border-bottom py-3">Daily Backups</li>
                                        </ul>
                                    </div>
                                    <!-- Plan Button -->
                                    <div class="plan-button">
                                        <a href="#" class="btn mt-4">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-5">
                    <p class="text-body pt-4 fw-5">Not sure what to choose? <a href="#">Contact Us</a></p>
                </div>
            </div>
        </section>
        <!-- ***** Price Plan Area End ***** --> --}}

        <!-- ***** FAQ Area Start ***** -->
        
        <!-- ***** FAQ Area End ***** -->

        {{-- <!-- ***** Team Area Start ***** -->
        <section class="section team-area team-style-two overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Our Team Experts</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/avatar-1.png" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Junaid Hasan</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Founder &amp; CEO</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/avatar-2.png" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Jassica William</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Co-Founder</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/avatar-3.png" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Md. Arham</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Web Developer</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/avatar-4.png" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Yasmin Akter</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Graphic Designer</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Team Area End ***** -->

        <!-- ***** Download Area Start ***** -->
        <section class="section download-area overlay-dark ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <!-- Download Text -->
                        <div class="download-text text-center">
                            <h2 class="text-white">sApp is available for all devices</h2>
                            <p class="text-white my-3 d-none d-sm-block">sApp is available for all devices, consectetur adipisicing elit. Itaque at harum quam explicabo. Aliquam optio, delectus, dolorem quod neque eos totam. Delectus quae animi tenetur voluptates doloribus commodi dicta modi aliquid deserunt, quis maiores nesciunt autem, aperiam natus.</p>
                            <p class="text-white my-3 d-block d-sm-none">sApp is available for all devices, consectetur adipisicing elit. Vel neque, cumque. Temporibus eligendi veniam, necessitatibus aut id labore nisi quisquam.</p>
                            <!-- Store Buttons -->
                            <div class="button-group store-buttons d-flex justify-content-center">
                                <a href="#">
                                    <img src="assets/img/icon/google-play.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="assets/img/icon/app-store.png" alt="">
                                </a>
                            </div>
                            <span class="d-inline-block text-white fw-3 font-italic mt-3">* Available on iPhone, iPad and all Android devices</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Download Area End ***** -->

        <!-- ***** Subscribe Area Start ***** -->
        <section class="section subscribe-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="subscribe-content text-center">
                            <h2>Subscribe to get updates</h2>
                            <p class="my-4">By subscribing you will get newsleter, promotions adipisicing elit. Architecto beatae, asperiores tempore repudiandae saepe aspernatur unde voluptate sapiente quia ex.</p>
                            <!-- Subscribe Form -->
                            <form class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                                </div>
                                <button type="submit" class="btn btn-lg btn-block">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Subscribe Area End ***** -->

        <!--====== Contact Area Start ======-->
        <section id="contact" class="contact-area bg-gray ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Stay Tuned</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-md-5">
                        <!-- Contact Us -->
                        <div class="contact-us">
                            <p class="mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <ul>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <span class="media-body align-self-center">Vestibulum nulla libero, convallis, tincidunt suscipit diam, DC 2002</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <span class="media-body align-self-center">+1 230 456 789-012 345 6789</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <span class="media-body align-self-center">exampledomain@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-4 pt-md-0">
                        <!-- Contact Box -->
                        <div class="contact-box text-center">
                            <!-- Contact Form -->
                            <form id="contact-form" method="POST" action="assets/php/mail.php">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-lg btn-block mt-3"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======--> --}}

        <!--====== Height Emulator Area Start ======-->
        <div class="height-emulator d-none d-lg-block"></div>
        <!--====== Height Emulator Area End ======-->

        @include('partials.footer')
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
    <script src="dist/js/litetooltip.js"></script>
    <script>
        $('.litetooltip-hotspot-wrapper .hotspot').each(function () { 
    $(this).LiteTooltip({ title: $(this).find('.data-container').html() });
 });

    </script>

 {{--    <script>

	let i=2;

	
$(document).ready(function(){
    var radius = 200;
    var fields = $('.itemDot');
    var container = $('.dotCircle');
    var width = container.width();
radius = width/2.5;

     var height = container.height();
    var angle = 0, step = (2*Math.PI) / fields.length;
    fields.each(function() {
        var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
        var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
        if(window.console) {
            console.log($(this).text(), x, y);
        }
        
        $(this).css({
            left: x + 'px',
            top: y + 'px'
        });
        angle += step;
    });
    
    
    $('.itemDot').click(function(){
        
        var dataTab= $(this).data("tab");
        $('.itemDot').removeClass('active');
        $(this).addClass('active');
        $('.CirItem').removeClass('active');
        $( '.CirItem'+ dataTab).addClass('active');
        i=dataTab;
        
        $('.dotCircle').css({
            "transform":"rotate("+(360-(i-1)*36)+"deg)",
            "transition":"2s"
        });
        $('.itemDot').css({
            "transform":"rotate("+((i-1)*36)+"deg)",
            "transition":"1s"
        });
        
        
    });
    
    setInterval(function(){
        var dataTab= $('.itemDot.active').data("tab");
        if(dataTab>4||i>4){
        dataTab=1;
        i=1;
        }
        $('.itemDot').removeClass('active');
        $('[data-tab="'+i+'"]').addClass('active');
        $('.CirItem').removeClass('active');
        $( '.CirItem'+i).addClass('active');
        i++;
        
        
        $('.dotCircle').css({
            "transform":"rotate("+(360-(i-2)*36)+"deg)",
            "transition":"2s"
        });
        $('.itemDot').css({
            "transform":"rotate("+((i-2)*36)+"deg)",
            "transition":"1s"
        });
        
        }, 5000);
    
});



    </script> --}}
    <script>
        $('.dot-switch').click(function(){
            $('.dot-switch').removeClass('active');
            $(this).addClass('active');
            var target = $(this).attr('data-target');
            $('.hotspot').fadeOut();
            if(target == 'all'){
                $('.hotspot').fadeIn();
            }
            else{
                $('.hotspot'+target).fadeIn();
            }
        })
    </script>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiY29kZXJzZ2FyZGVuIiwiYSI6ImNrazU3aHZrNzFzNXEybnBjYmNkaXl6YXMifQ.LRhR9SsLSMABZf278z6DRQ';
   
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/codersgarden/ckmvnedjq0p3x17mk8k9hvfvo',
    center: [11.081885, 49.446171],
    zoom: 11
    });

    var layerList = document.getElementById('map-menu');
    var inputs = layerList.getElementsByTagName('input');
    
    function switchLayer(layer) {
    var layerId = layer.target.id;
    map.setStyle('mapbox://styles/codersgarden/' + layerId);
    }
    
    for (var i = 0; i < inputs.length; i++) {
    inputs[i].onclick = switchLayer;
    }
   
    var geojson = {
    'type': 'FeatureCollection',
    'features': [
    {
    'type': 'Feature',
    'properties': {
    'message': 'Foo',
    'title': 'Nürnberg Hauptbahnhof',
    'description': 'Bahnhofsplatz 9, 90482 Nürnberg',
    'image': 'https://pfandnetzwerk.de/assets/img/screenshots/1.jpg',
    'iconSize': [80, 80]
    },
    'geometry': {
    'type': 'Point',
    'coordinates': [11.082824, 49.446300]
    }
    },
    {
    'type': 'Feature',
    'properties': {
    'message': 'Bar',
    'title': 'Franken-Center Nürnberg',
    'description': 'Glogauer Str. 30-38, 90473 Nürnberg',
    'image': 'https://pfandnetzwerk.de/assets/img/screenshots/2.jpg',
    'iconSize': [80, 80]
    },
    'geometry': {
    'type': 'Point',
    'coordinates': [11.135675, 49.402726]
    }
    },
    {
    'type': 'Feature',
    'properties': {
    'message': 'Bar',
    'title': 'TH Nürnberg',
    'description': 'Wollentorstr. 4, 90489 Nürnberg',
    'image': 'https://pfandnetzwerk.de/assets/img/screenshots/5.jpg',
    'iconSize': [80, 80]
    },
    'geometry': {
    'type': 'Point',
    'coordinates': [11.094506, 49.452428]
    }
    },
    {
    'type': 'Feature',
    'properties': {
    'message': 'Bar',
    'title': 'Berufsschule B6',
    'description': 'Äußere Bayreuther Str. 8, 90491 Nürnberg',
    'image': 'https://pfandnetzwerk.de/assets/img/screenshots/6.jpg',
    'iconSize': [80, 80]
    },
    'geometry': {
    'type': 'Point',
    'coordinates': [11.0953101, 49.4649482]
    }
    }
    ]
    };
     
    
    
    map.scrollZoom.disable();
    map.addControl(new mapboxgl.FullscreenControl());
    map.addControl(new mapboxgl.NavigationControl());
    // add markers to map
    geojson.features.forEach(function (marker) {
    // create a DOM element for the marker
    var el = document.createElement('div');
    el.className = 'marker';
    el.style.backgroundImage = 'url(https://pfandnetzwerk.de/assets/img/icon/tonne.png)';
    el.style.width = marker.properties.iconSize[0] + 'px';
    el.style.height = marker.properties.iconSize[1] + 'px';
    el.style.backgroundSize = '100%';
     
    
     
    // add marker to map
    new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
        .setHTML('<p><img src="'+ marker.properties.image + '" style="width:100%"><p><strong>' + marker.properties.title + '</strong></p><p>' + marker.properties.description + '</p>'))
    .addTo(map);
    });
    </script>

<script>
    $('#collapseExample').on('hidden.bs.collapse', function () {
    $('#expander').html('+ Erweiterte Infos');
    })

    $('#collapseExample').on('shown.bs.collapse', function () {
    $('#expander').html('- Weniger Infos');
    })
</script>
<script>
    $(function() {
        $("#aniTonne").hover(
            
            function() {
                $(this).attr("src", "/assets/img/welcome/PN_Gif_Tonne_oeffnen.gif");
            },
            function() {
                $(this).attr("src", "/assets/img/welcome/PN_Gif_Tonne_schliessen.gif");
            }                         
        );                  
    });
</script>
<script>
    $('.article-switch').click(function(){
        $('.article-switch').removeClass('active');
        $(this).addClass('active');
        var target = $(this).attr('data-target');
        $('.articleSelect').fadeOut();
        if(target == 'all'){
            $('.articleSelect').fadeIn();
        }
        else{
            $('.articleSelect'+target).fadeIn();
        }
    })
</script>

</body>

</html>