<header class="header-style-1">
    <!-- Start Topbar -->
    <div class="topbar-style-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="left-side">
                        <div class="language-box">
                            <div class="language p-relative">
                                <img src="{{asset('frontend')}}/assets/images/az.png" alt="flag">
                                <select>
                                    <option>Azərbaycan</option>
                                    <option>Türkiyə</option>
                                    <option>Russia</option>
                                </select>
                            </div>
                        </div>
                        @foreach($header as $data)
                        <p class="text-custom-white no-margin">{{$data->adres}}<br>Tel:{{$data->tel_1}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->tel_2}}</p>
                        @endforeach
                    </div>
                </div>
                <div id="menu_1" class="col-lg-6 col-md-6 col-12">
                    <div class="right-side">
                        <ul class="custom">
                            @foreach($header as $data)
                            <li><a href="{{$data->facebook}}" target="_blank" class="text-custom-white fs-14"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="{{$data->twitter}}" target="_blank" class="text-custom-white fs-14"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="{{$data->linkledin}}" target="_blank" class="text-custom-white fs-14"><i class="fab fa-linkedin"></i></a>
                            </li>
                            @endforeach
                            <li><a href="#" class="text-custom-white fs-14"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li class="search"><a href="javascript:void(0)" class="text-custom-white fs-14"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="topbar-search">
                                <form method="get">
                                    <input type="search" class="form-control form-control-custom" name="search" placeholder="Axtar..." value="">
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Start Navigation -->
    <div class="main-navigation-style-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="navigation">
                        <div class="logo">
                            <a href="https://servisay.com">
                                <img src="{{asset('frontend')}}/assets/images/logo.png" class="img-fluid image-fit" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu">
                            <div class="mobile-logo">
                                <a href="https://servisay.com">
                                    <img src="{{asset('frontend')}}/assets/images/logo.png" class="img-fluid image-fit" alt="Logo">
                                </a>
                            </div>
                            <nav>
                                <ul class="custom">
                                    <li class="menu-item"> <a href="#menu_1" class="text-custom-white">ANA SƏHİFƏ</a>

                                    </li>
                                    <li class="menu-item"> <a href="#menu_2" class="text-custom-white">HAQQIMIZDA</a>
                                    </li>

                                    <li class="menu-item"> <a href="#menu_3" class="text-custom-white">XİDMƏTLƏR</a>

                                    <li class="menu-item"> <a href="#menu_4" class="text-custom-white">NİYƏ BİZ?</a>


                                    </li>
                                    <li class="menu-item"> <a href="#menu_5" class="text-custom-white">ONLİNE MÜRACİƏT</a>

                                    </li>
                                    <li class="menu-item"> <a href="#menu_6" class="text-custom-white">ƏLAQƏ</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="right-side">
                                <div class="cta-btn"> <a href="#" class="btn-first btn-submit">
                                        Müraciət edin
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="hamburger-menu">
                            <div class="menu-btn"> <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navigation -->
</header>

