<!DOCTYPE html>
<html lang="az">
<head>
@include('frontend.body.header')
    <!-- HOSTARING SEO -->
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="preconnect" href="https://www.googletagmanager.com/" crossorigin>
    <link rel="canonical" href="https://servisay.com" />
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>HVAC İsitmə və Soyutma Sistemləri | SERVİSAY</title>
    <meta name="description" content="SERVİSAY Sizlərə İsitmə və Soyutma Havalandırma İzolosiya qablama və digər HVAC Xidmətləri təklif edir."/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta property="og:locale" content="az"/>
    <meta property="og:type" content="website"/>
    <meta name="keywords" content="servisay, soyutma sistemleri, isitme sistemleri, havalandirma sistemleri, izolosiya qablama, HVAC" />
    <meta property="og:title" content="HVAC İsitmə və Soyutma Sistemləri | SERVİSAY"/>
    <meta property="og:url" content="https://servisay.com"/>
    <meta property="og:site_name" content="HVAC İsitmə və Soyutma Sistemləri | SERVİSAY"/>
    <!--
    <meta property="og:image" content=""/>
    -->
    <meta property="og:description" content="SERVİSAY Sizlərə İsitmə və Soyutma Havalandırma İzolosiya qablama və digər HVAC Xidmətləri təklif edir."/>
    <!-- HOSTARING SEO -->


    <script async src="https://s.widgetwhats.com/wwwa.js" data-wwwa="12298"></script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend_images')}}/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend_images')}}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend_images')}}/favicon-16x16.png">
    <link rel="manifest" href="{{asset('site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('frontend_images')}}/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Favicon End-->

    <script async src="https://s.widgetwhats.com/wwwa.js" data-wwwa="12214"></script>

    <!-- Bootstrap -->
    <link href="{{asset('frontend')}}/assets2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets/css/switch.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="{{asset('frontend')}}/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Flaticons -->
    <link href={{asset('frontend')}}/"assets/css/font/flaticon.css" rel="stylesheet">
    <!-- Slick Slider <link href="assets/font/flaticon.css" rel="stylesheet">-->
    <!-- Slick Slider -->
    <link href="{{asset('frontend')}}/assets/css/slick.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="{{asset('frontend')}}/assets/css/ion.rangeSlider.min.css" rel="stylesheet">
    <!-- Datepicker -->
    <link href="{{asset('frontend')}}/assets/css/datepicker.css" rel="stylesheet">
    <!-- magnific popup -->
    <link href="{{asset('frontend')}}/assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Nice Select -->
    <link href="{{asset('frontend')}}/assets/css/nice-select.css" rel="stylesheet">
    <!-- Animate -->
    <link href="{{asset('frontend')}}/assets/css/animate.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{asset('frontend')}}/assets2/css/style.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets/css/style.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets2/css/remixicon.css" rel="stylesheet">

    <!-- Custom Responsive -->
    <link href="{{asset('frontend')}}/assets/css/responsive.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700&amp;display=swap" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- place -->
</head>

{{--@include("frontend.body.header");--}}
<body class="animated-banner">
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/628b68567b967b117990c29f/1g3o8v4ot';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<!-- Start Main Body -->
<div class="main-body">
    <!-- Start Header -->

    <!-- End Header -->
    <!-- Start Slider -->
    <div  class="slider parallax overlay-bg" id="banner-animation">
        <div class="side-lines"> <span class="box"></span>
            <span class="text"><strong>SERVİSAY</strong></span>
            <span class="line"></span>
        </div>
        <div class="transform-center">
            <div class="container">
                <div class="row">
                    <div id="menu-1 overflow_text" class="col-12">
                        <div class="banner-slider">
                            @foreach($slider as $data)
                            <div class="slide-item">
                                <div class="banner-text">

                                    <h1 class="text-custom-white fw-700">{{$data->title}}</h1>
                                    <p class="text-custom-white">{{$data->sub_title}}</p> <a href="tel:+994508008131" class="btn-first btn-submit-fill">
                                    {{$data->button}}
                                    </a>
                                </div>
                            </div>

                            <div class="slide-item">
                                <div class="banner-text">
                                    <h1 class="text-custom-white fw-700">{{$data->title}}</h1>
                                    <p class="text-custom-white">{{$data->sub_title}}</p> <a href="#menu_2" class="btn-first btn-submit-fill">
                                        {{$data->button}}
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start About -->
    <!-- start aboutus-2 -->
    <section  id="menu_2" class="section-padding lw-about-section p-relative">
        <div class="side-lines right-side"> <span class="box"></span>
            <span class="text">HAQQIMIZDA</span>
            <span class="line"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ln-about-left-side p-relative full-height">
                        <div class="first-img full-height">
                            <img src="{{asset('frontend')}}/assets/images/homepage/about2.jpg" class="image-fit" alt="img">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lw-about-section-right">
                        @foreach($about as $ab)
                        <h3 class="p-relative lw-about-right-heading">{{$ab->title}}</h3>
                        <div class="lw-about-right-content">
                            <p>
									<span class="text-gold">
                   						<strong>SERVİSAY</strong>
                 					</span>
                         {{$ab->content}}
                            </p>
                            <div class="lw-about-right-list">
                                <ul>
                                    <li> <i class="fas fa-check"></i>
                                        {{$ab->option_1}}</li>
                                    <li> <i class="fas fa-check"></i>
                                        {{$ab->option_2}} </li>
                                    <li> <i class="fas fa-check"></i>
                                        {{$ab->option_3}} </li>
                                    <li> <i class="fas fa-check"></i>
                                        {{$ab->option_4}}</li>
                                </ul>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</section>
<!-- End aboutus-2 -->

<!-- Start Main Services -->
<section  id="menu_3" class="main-services section-padding p-relative">
    <div class="side-lines"> <span class="box"></span>
        <span class="text">XİDMƏTLƏR</span>
        <span class="line"></span>
    </div>
    <div class="container">
        @foreach( $service as $sv)
        <div class="section-header">
            <div class="section-heading">
                <h3 class="text-custom-black fw-700">{{$sv->title}}</h3>
                <div class="section-description">
                    <p class="text-light-white">{{$sv->sub_title}}</p>
                </div>
            </div>
            <div class="section-btn"> <a href="tel:+994508008131" class="btn-first btn-submit text-light-blue">{{$sv->button}}</a>
            </div>
        </div>
        <div class="row">
            <div id="menu-3"  class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-xl-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <img src="{{asset('uploads/front_images')}}/boiler.png" alt="Qazanxana  sistemləri">
                        </div>
                        <h5 class="fw-700"><a href="#" class="text-custom-black">{{$sv->kazan_sistemleri_1}}</a></h5>
                        <p class="text-light-white no-margin">{{$sv->kazan_sistemleri_2}} <a href="{{ route('kazan-sistemleri') }}" class="#2e90ca"><strong>Ətraflı oxu</strong></a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-xl-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <img src="{{asset('uploads/front_images')}}/heater.png" alt="Kombi sistemləri">
                        </div>
                        <h5 class="fw-700"><a href="#" class="text-custom-black">{{$sv->kombi_sistemleri_1}}</a></h5>
                        <p class="text-light-white no-margin">{{$sv->kombi_sistemleri_2}} <a href="{{ route('kombi-sistemleri') }}" class="#2e90ca"><strong>Ətraflı oxu</strong></a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-xl-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <img src="{{asset('uploads/front_images')}}/conditioner.png" alt="Kondisioner sistemləri">
                        </div>
                        <h5 class="fw-700"><a href="#" class="text-custom-black">{{$sv->klima_sistemleri_1}}</a></h5>
                        <p class="text-light-white no-margin">{{$sv->klima_sistemleri_2}} <a href="{{ route('klima-sistemleri') }}" class="#2e90ca"><strong>Ətraflı oxu</strong></a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-xl-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <img src="{{asset('uploads/front_images')}}/fan.png" alt="Havalandırma sistemləri">
                        </div>
                        <h5 class="fw-700"><a href="#" class="text-custom-black">{{$sv->havalandırma_sistemleri_1}}</a></h5>
                        <p class="text-light-white no-margin">{{$sv->havalandırma_sistemleri_2}} <a href="{{ route('havalandirma-sistemleri') }}" class="#2e90ca"><strong>Ətraflı oxu</strong></a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-md-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <img src="{{asset('uploads/front_images')}}/engineering.png" alt="Avtomatika sistemləri">
                        </div>
                        <h5 class="fw-700"><a href="#" class="text-custom-black">{{$sv->otomasyon_sistemleri_1}}</a></h5>
                        <p class="text-light-white no-margin">{{$sv->otomasyon_sistemleri_2}} </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-md-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <img src="{{asset('uploads/front_images')}}/sprinklers.png" alt="Yanğından mühafizə">
                        </div>
                        <h5 class="fw-700"><a href="#" class="text-custom-black">{{$sv->yangin_korumasi_1}}</a></h5>
                        <p class="text-light-white no-margin">{{$sv->yangin_korumasi_2}} </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-xs-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <img src="{{asset('uploads/front_images')}}/membrane.png" alt="İzolosiya və qablama">
                        </div>
                        <h5 class="fw-700"><a href="#" class="text-custom-black">{{$sv->yalitim_1}}</a></h5>
                        <p class="text-light-white no-margin">{{$sv->yalitim_2}} </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <img src="{{asset('uploads/front_images')}}/ozone.png" alt="Ozon sistemləri">
                        </div>
                        <h5 class="fw-700"><a href="#" class="text-custom-black">{{$sv->ozon_sistemleri_1}}</a></h5>
                        <p class="text-light-white no-margin">{{$sv->ozon_sistemleri_2}} </p>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- End Main Services -->


<!-- Start section process-->
<section id="menu_4" class="section-padding exp-cal parallax ln-process">
    <div class="overlay overlay-bg-black"></div>
    <div class="container">
        @foreach($neden as $nd)
        <div class="section-header">
            <div class="section-heading">
                <h3 class="text-custom-white fw-700">{{$nd->title}}</h3>
                <div class="section-description">
                    <p class="text-custom-white">{{$nd->description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="exp-cal-img mb-xs-30">
                    <img src="{{asset('uploads/front_images')}}/check-mark.png" class="mb-xl-20" alt="whyexp">
                    <h4 class="text-custom-white fw-600"><strong>12</strong> {{$nd->name_1}}</h4>
                    <p class="text-custom-white">{{$nd->name_desc_1}}</p>
                    <a href="#" class="text-custom-white fw-500 fs-14">Ətraflı</a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="exp-cal-img mb-md-30">
                    <img src="{{asset('uploads/front_images')}}/best-price.png" class="mb-xl-20" alt="whyexp">
                    <h4 class="text-custom-white fw-600">{{$nd->name_2}} </h4>
                    <p class="text-custom-white">{{$nd->name_desc_2}}</p>
                    <a href="#" class="text-custom-white fw-500 fs-14">Ətraflı</a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="exp-cal-img">
                    <img src="{{asset('uploads/front_images')}}/clock.png" class="mb-xl-20" alt="whyexp">
                    <h4 class="text-custom-white fw-600">{{$nd->name_3}} </h4>
                    <p class="text-custom-white">{{$nd->name_desc_3}}</p>
                    <a href="#" class="text-custom-white fw-500 fs-14">Ətraflı</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="exp-cal-img mb-md-30">
                    <img src="{{asset('uploads/front_images')}}/team.png" class="mb-xl-20" alt="whyexp">
                    <h4 class="text-custom-white fw-600">{{$nd->name_4}}</h4>
                    <p class="text-custom-white">{{$nd->name_desc_4}}</p>
                    <a href="#" class="text-custom-white fw-500 fs-14">Ətraflı</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- End section process-->




<!-- Start Why choose us / testimonials-->

<div id="menu_5" class="contact-doctor-area ptb-100">
    <div class="container">
        @if ($errors->any())
                    @foreach ($errors->all() as $error)
                       <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
        @endif
        <div class="row align-items-center">
            <div class="col-lg-6">

                <div class="contact-doctor-contain aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <div class="contact-title">
                        <span>Online müraciət</span>
                        <h2>Formu doldurun biz sizə zəng edib ətraflı məlumat vərək</h2>
                        <p>İstədiyiniz SERVİSAY Xidmətləri barəsində ətraflı məlumat ala bilərsiniz bunun üçün Formu doldurub bizə göndərin. Qısa zamanda sizinlə əlaqə saxlanılacaq.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-doctor-form aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <form action="{{ route('muracaat.insert') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Ad, Soyad*">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="E-poçt*">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input name="contac" type="text" class="form-control" placeholder="Əlaqə*">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="Mövzu*">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="messages" class="form-control" rows="3" placeholder="İsmarıc*"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="default-btn active">
                                    Göndər
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="back-top" class="back-top"> <a href="#top"><i class="flaticon-up-arrow"></i></a>
</div>
</div>
<div class="modal fade video-modal" id="videobox">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent border-0">
            <!-- Modal Header -->
            <div class="modal-header border-0 no-padding bg-transparent">
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->

        </div>
    </div>
</div>
<!-- End Why choose us / testimonials -->
@include('frontend.body.footer')
<script src="{{asset('frontend')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/switch.js"></script>
<!-- Popper -->
<script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
<!-- Range Slider -->
<script src="{{asset('frontend')}}/assets/js/ion.rangeSlider.min.js"></script>
<!-- Slick Slider -->
<script src="{{asset('frontend')}}/assets/js/slick.min.js"></script>
<!-- Datepicker -->
<script src="{{asset('frontend')}}/assets/js/datepicker.js"></script>
<script src="{{asset('frontend')}}/assets/js/datepicker.en.js"></script>
<!-- Nice Select -->
<script src="{{asset('frontend')}}/assets/js/jquery.nice-select.js"></script>
<!-- Steps -->
<script src="{{asset('frontend')}}/assets/js/jquery-steps.js"></script>
<!-- Nice Select -->
<script src="{{asset('frontend')}}/assets/js/particles.js"></script>
<!-- Magnific Popup -->
<script src="{{asset('frontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
<!-- Isotope Gallery -->
<script src="{{asset('frontend')}}/assets/js/isotope.pkgd.min.js"></script>
<!-- Wow js -->
<script src="{{asset('frontend')}}/assets/js/wow.min.js"></script>
<!-- Custom Js -->
<script src="{{asset('frontend')}}/assets/js/custom.js"></script>
<!-- /Place all Scripts Here -->


</body>
</html>

