<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Businnes, Portfolio, Corporate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>FRÄSCHBIL</title>
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/elegant_font/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slider-pro.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/elegant_font/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="status"></div>
    </div>

    <header>
        <!-- Navigation Menu start-->
        <nav class="navbar main-menu">
            <div class="container">

                <!-- Navbar Toggle -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Logo -->
                    {{-- <a class="navbar-brand" href="index.html">
                        <img class="logo" id="logo" src="images/logo.png"
                            alt="logo">
                    </a> --}}
                    <a class="mt-3 navbar-brand  text-white" href="#" style ="color: white; margin-top: 24px;">FRÄSCHBIL</a>

                </div>
                <!-- Navbar Toggle End -->

                <!-- navbar-collapse start-->
                <div id="nav-menu" class="navbar-collapse collapse" role="navigation">
                    <ul class="nav navbar-nav menu-wrapper">
                        <li class="active">
                            <a href="#slider">HEM</a>
                        </li>
                        <li>
                            <a href="#about">OM OSS</a>
                        </li>
                        <li>
                            <a href="#services">TJÄNSTER</a>
                        </li>

                        <li>
                            <a href="#pricing">PRISLISTA</a>
                        </li>

                        {{-- <li>
                            <a href="#portfolio">PORTFOLIO</a>
                        </li> --}}



                        <li>
                            <a href="#team">BOKNING</a>
                        </li>
                        <li>
                            <a href="#contact">KONTAKTA OSS</a>
                        </li>
                        <li>
                            <a href="{{route('login')}}">LOGGA IN</a>
                        </li>
                    </ul>
                </div>
                <!-- navbar-collapse end-->

            </div>
        </nav>
        <!-- Navigation Menu end-->
    </header>
    <!-- Header End -->


    <section class="slider-pro slider" id="slider">
        <div class="sp-slides">

            <!-- Slides -->
            <div class="sp-slide main-slides">
                <div class="img-overlay"></div>

                <img class="sp-image" src="{{asset('frontend/images/slider/slider-img-1.jpg')}}" alt="Slider 1" />

                <h1 class="sp-layer slider-text-big" data-position="center bottom" data-show-transition="left"
                    data-hide-transition="right" data-show-delay="1500" data-hide-delay="200">
                    <span class="highlight-texts">BILTVÄTT-ABONNEMANG</span>
                </h1>

            </div>
            <!-- Slides End -->

            <!-- Slides -->
            {{--  <div class="sp-slide main-slides">
                <div class="img-overlay"></div>
                <img class="sp-image" src="{{asset('frontend/images/slider/slider-img-2.jpg')}}" alt="Slider 2" />

                <h1 class="sp-layer slider-text-big" data-position="center bottom" data-show-transition="left"
                    data-hide-transition="right" data-show-delay="1500" data-hide-delay="200">
                    <span class="highlight-texts">Best Car Service</span>
                </h1>

            </div>
            <!-- Slides End -->

            <!-- Slides -->
            <div class="sp-slide main-slides">
                <div class="img-overlay"></div>

                <img class="sp-image" src="{{asset('frontend/images/slider/slider-img-3.jpg')}}" alt="Slider 3" />

                <h1 class="sp-layer slider-text-big" data-position="center bottom" data-show-transition="left"
                    data-hide-transition="right" data-show-delay="1500" data-hide-delay="200">
                    <span class="highlight-texts">Lazer Car Paint</span>
                </h1>

            </div>  --}}
            <!-- Slides End -->

        </div>
    </section>
    <!-- Main Slider End -->


    <section id="about" class="about-sec section-wrapper description">
        <div class="container">
            <div class="row">
                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">OM OSS</span></h2>

                    <p class="col-md-12 col-sm-12 col-xs-12 col-md-12 col-sm-12">
                       <b> Välkommen till Fräsch Bil i Ulricehamn AB – Där vi sätter kund önskan på första plan. FräschBil har funnits sedan 2015! Vi är stolta över
                        vår passion för bilvård och vår strävan efter perfektion. Nu har vi äntligen tagit steget in i världen av sociala medier och vi ser fram emot
                         att dela vår expertis och erbjudanden med er, våra fantastiska kunder. Vår handtvätt och invändiga städning är kända för att ge varje bil
                          en strålande renhet. </b>
                    </p>
                </div>
                <!-- Section Header End -->

                {{--  <div class="col-md-6 col-sm-6 col-xs-12 custom-sec-img wow fadeInDown">
                    <img src="{{asset('frontend/images/features.jpg')}}" alt="Custom Image">
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 customized-text wow fadeInDown black-ed">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet voluptatibus
                        obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum. Rem ea ducimus quos quae
                        quo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing numquam amet voluptatibus obcaecati ea
                        maiores totam nostrum, ad iure rerum quas harum ipsum. Rem ea ducimus quos quae quo.</p>
                    <div class="row">
                        <div class="col-md-11">
                            <strong>Car Wash</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est
                                ducimus saepe laborum</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <strong>Car Repair</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est
                                ducimus saepe laborum Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <strong>Car Painting</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est
                                ducimus saepe laborum Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>  --}}
            </div>
        </div>
    </section>

    <section id="services" class="section-wrapper">
        <div class="container">
            <div class="row">

                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">TJÄNSTER</span></h2>

                    {{--  <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum
                        aliquam, quis deserunt eos eius quisquam odio itaque in minus distinctio dolores ipsam.</p>  --}}
                </div>
                <!-- Section Header End -->

                <div class="our-services">


                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-delay=".2s">
                            <div class="service-box">
                                <div class="icon">
                                    {{--  <i class="icon_cone"></i>  --}}
                                    <i class="fa fa-car" aria-hidden="true"></i>
                                    <h3>UT & INVÄNDIGT HANDTVÄTT</h3>
                                </div>
                                {{--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam
                                    nulla, porro nemo.</p>  --}}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-delay=".2s">
                            <div class="service-box">
                                <div class="icon">
                                    <i class="fa fa-car" aria-hidden="true"></i>
                                    <h3>SNABBVAXNING</h3>
                                </div>

                                {{--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam
                                    nulla, porro nemo.</p>  --}}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-delay=".2s">
                            <div class="service-box">
                                <div class="icon">
                                    <i class="fa fa-car" aria-hidden="true"></i>
                                    <h3>POLERING</h3>
                                </div>

                                {{--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam
                                    nulla, porro nemo.</p>  --}}
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-delay=".1s">
                            <div class="service-box">
                                <div class="icon">
                                    <i class="fa fa-car" aria-hidden="true"></i>
                                    <h3>KERAMISKT LACKBEHANDLING</h3>
                                </div>

                                {{--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam
                                    nulla, porro nemo.</p>  --}}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-delay=".1s">
                            <div class="service-box">
                                <div class="icon">
                                    <i class="fa fa-car" aria-hidden="true"></i>
                                    <h3>SOLSKYDDSFIL: Bil, Husbil...</h3>
                                </div>

                                {{--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam
                                    nulla, porro nemo.</p>  --}}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-delay=".1s">
                            <div class="service-box">
                                <div class="icon">
                                    <i class="fa fa-car" aria-hidden="true"></i>
                                    <h3>Biltvätt-Företag Abonnemang</h3>
                                </div>

                                {{--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam
                                    nulla, porro nemo.</p>  --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section id="pricing" class="pricing-section">
        <div class="container">
            <div class="row">

                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">PRISLISTA</span></h2>

                    <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">
                        <b>Med vårt nya abonnemang kan ni njuta av regelbunden och bekväm bilvård till ett förmånligt pris.</b>
                    </p>
                </div>
                <!-- Section Header End -->

                <div class="pricing-wrapper">

                    <!-- Plans -->
                    <div class="col-md-3 col-sm-3 col-xs-12 pricing-plans wow bounceInLeft hoverer">
                        <div class="pricing-titles">
                            <h2>Fräsch/Företag Stor</h2>
                            <p><span>399:- exkl.moms/mån</span></p>
                        </div>
                        <div class="pricing-service-name">
                            <ul>
                                <li>två bokningar/besök per månad</li>
                                <li>Utvändigt tvätt / Invändigt städning 2gånger per/mån</li>
                                {{--  <li>3 Years Hosting</li>
                                <li>100 GB Data</li>
                                <li>Unlimited Bandwidth</li>
                                <li>24/7 Support</li>  --}}
                            </ul>
                        </div>

                        <div class="bg-btn">
                            <a target="_blank" href="https://fraschbil.tickoff.se/app-menu/start" class="signup-btn">Företag & Bil Registrering</a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 pricing-plans wow bounceInLeft hoverer">
                        <div class="pricing-titles">
                            <h2>Fräsch Kontor/Hämta</h2>
                            <p><span>359:- exkl.moms/mån</span></p>
                        </div>
                        <div class="pricing-service-name">
                            <ul>
                                <li>1 bokning/besök per månad</li>
                                <li>Utvändigt tvätt och invändigt städning med upphämtning av bil</li>
                            </ul>
                        </div>

                        <div class="bg-btn">
                            <a target="_blank" href="https://fraschbil.tickoff.se/app-menu/start" class="signup-btn">Företag & Bil Registrering</a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 pricing-plans wow bounceInLeft hoverer">
                        <div class="pricing-titles">
                            <h2>Fräsch/Företag Liten</h2>
                            <p><span>299:- exkl.moms/mån</span></p>
                        </div>
                        <div class="pricing-service-name">
                            <ul>
                                <li>1 bokning/besök per månad</li>
                                <li>Utvändigt tvätt och invändigt städning 1gång per/mån</li>

                            </ul>
                        </div>

                        <div class="bg-btn">
                            <a target="_blank" href="https://fraschbil.tickoff.se/app-menu/start" class="signup-btn">Företag & Bil Registrering</a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 pricing-plans wow bounceInLeft hoverer">
                        <div class="pricing-titles">
                            <h2>Fräsch/utvändigt</h2>
                            <p><span>199:- exkl.moms/mån</span></p>
                        </div>
                        <div class="pricing-service-name">
                            <ul>
                                <li>två bokning/besök per månad</li>
                                <li>Erbjuder utvändigt tvätt två gång per/mån</li>
                            </ul>
                        </div>

                        <div class="bg-btn">
                            <a target="_blank" href="https://fraschbil.tickoff.se/app-menu/start" class="signup-btn">Företag & Bil Registrering</a>
                        </div>
                    </div>

                    <!-- Plans End -->

                    <!-- Plans -->
                    {{--  <div class="col-md-4 col-sm-4 col-xs-12 pricing-plans wow fadeInUp hoverer"
                        data-wow-duration="1s">
                        <div class="pricing-titles">
                            <h2>Gold</h2>
                            <p><span>$69/</span></p>
                        </div>
                        <div class="pricing-service-name">
                            <ul>
                                <li>Car Wash</li>
                                <li>Responsive</li>
                                <li>3 Years Hosting</li>
                                <li>100 GB Data</li>
                                <li>Unlimited Bandwidth</li>
                                <li>24/7 Support</li>
                            </ul>
                        </div>

                        <div class="bg-btn">
                            <a href="#" class="signup-btn">Get Now</a>
                        </div>
                    </div>  --}}
                    <!-- Plans End -->

                    <!-- Plans -->
                    {{--  <div class="col-md-4 col-sm-4 col-xs-12 pricing-plans wow bounceInRight hoverer">
                        <div class="pricing-titles">
                            <h2>Platinum</h2>
                            <p><span>$99/</span></p>
                        </div>
                        <div class="pricing-service-name">
                            <ul>
                                <li>Car Repair</li>
                                <li>Responsive</li>
                                <li>3 Years Hosting</li>
                                <li>100 GB Data</li>
                                <li>Unlimited Bandwidth</li>
                                <li>24/7 Support</li>
                            </ul>
                        </div>
                        <div class="bg-btn">
                            <a href="#" class="signup-btn">Get Now</a>
                        </div>


                    </div>  --}}
                    <!-- Plans End -->

                </div>
            </div>
        </div>
    </section>
    <!-- Pricing End -->




    <section id="team" class="bgSection teams-section">
        <div class="parallax-overlay"></div>
        <div class="teams-wrapper wow bounceIn">
            <div class="container">
                <div class="row">

                    <!-- Section Header -->
                    <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                        <h2><span class="highlight-text-inverted">BOKNING</span></h2>
                        <div class="row">
                            <div class="col-md-4 mx-auto">

                            </div>
                            <div class="text-center">
                                <div class="col-md-4 mx-auto">
                                    <input type="date" class="form-control" id="app_date" value="{{ date('Y-m-d') }}" placeholder="{{ date('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="col-md-4 mx-auto">

                            </div>
                        </div>



                    </div>


                </div>

                <div class="row" id="bookslot">

                    @include('frontend.ajax',['timeSlots' => $timeSlots,'date' =>$date,'bookSlot' => $bookSlot])

                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="section-wrapper contact-section" data-stellar-background-ratio="0.5">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown section-header-parallax">
                    <h2><span class="highlight-text">KONTAKTA OSS</span></h2>
                    {{--  <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum
                        aliquam, quis deserunt eos eius quisquam odio itaque in minus distinctio dolores ipsam.</p>  --}}
                </div>
                <!-- Section Header End -->
            </div>
    </section>

    <!-- Contact Section End -->
    <section class="footer-container">
        <div class="container">
            <div class="row footer-containertent">

                <div class="col-md-4">
                    {{--  <img src="images/logo.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et porro quos iste ratione doloribus
                        asperiores, error omnis delectus rerum sapiente. Et, aliquam modi beatae quae in perferendis ab
                        est fugiat!</p>  --}}
                </div>


                <div class="col-md-4 text-center">
                    {{--  <h3>News & Updates</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima
                        error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque in minus distinctio
                        dolores ipsam.</p>  --}}

                        {{--  <h3 >Contact Us</h3>  --}}

                    <ul>
                        <li><i class="fa fa-envelope-o"></i>fraschbil2015@hotmail.com</li>
                        <li><i class="fa fa-phone"></i>072-185 45 25</li>
                        <li><i class="fa fa-home"></i>Boråsvägen 25, Ulricehamn</li>
                    </ul>

                </div>
                <div class="col-md-4 contac-us">
                    {{--  <h3>Contact Us</h3>

                    <ul>
                        <li><i class="fa fa-home"></i>123 New Venu Street</li>
                        <li><i class="fa fa-phone"></i>001 123 12345 99</li>
                        <li><i class="fa fa-envelope-o"></i>support@website.com</li>
                    </ul>  --}}
                </div>
            </div>
        </div>
    </section>


    <footer>

        <div class="container">
            <div class="row">
                <div class="footer-containertent text-center">

                    <ul class="footer-social-info">
                        <li>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=61556118061463"><i class="fa fa-facebook"></i></a>
                        </li>
                        {{--  <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>  --}}
                    </ul>
                    <br /><br />
                    <p>
                        Copyright © {{ date('Y') }}. Develop and Support by <a href="https://workers-den.se/" target="_blank"> Worker's Den</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="{{asset('frontend/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/modernizr.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.easypiechart.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nav.js')}}"></script>
    <script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.sliderPro.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</body>

<script>
    $(document).ready(function() {
        // Attach event listener to the date input
        $('#app_date').on('change', function() {
            // Get the selected date
            var selectedDate = $(this).val();

            // Make an AJAX request to your Laravel route


            axios.get('{{ route('getSlot') }}', {
                params: { date: selectedDate }
            })
            .then(function(response) {
                // Handle the response from the server
                console.log(response.data);

                document.getElementById('bookslot').innerHTML = response.data.content;
            })
            .catch(function(error) {
                console.error('Error:', error);
            });
        });
    });
</script>


<script>
    function submitForm(fromId) {
        // Get form data
        event.preventDefault();
        let formData = new FormData(document.getElementById(fromId));

        let name = formData.get('name');
        let mobile = formData.get('mobile');

        if (!name) {
            Toastify({
                text: "Please fill  name  fields.",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "#ff6347" // You can customize the color
            }).showToast();

        }
        if (!mobile) {

            Toastify({
                text: "Please fill  mobile fields.",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "#ff6347" // You can customize the color
            }).showToast();

        }

        if (mobile && name) {

        axios.post('{{ route('bookSlot') }}', formData)
            .then(response => {

                    Toastify({
                        text: "Booking successfull",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "green" // You can customize the color
                    }).showToast();
                    document.getElementById('bookslot').innerHTML = response.data.content;


            })
            .catch(error => {
                console.error(error);
                Toastify({
                    text: error.response.data.message,
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "red" // You can customize the color
                }).showToast();
            });
        }

    }
</script>

</html>
