<div id="menu_6" class="footer-area">
    <div class="container">
        <div class="footer pt-100 pb-70">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="logo-area">
                        <a href="index.php"><img src="{{asset('frontend')}}/assets/images/logo.png" alt="Image"></a>
                        @foreach($footer as $data)<p>{{$data->description}}</p>@endforeach
                        <form class="newsletter-form" data-toggle="validator" novalidate="true">
                            <input type="email" class="form-control" placeholder="E-Poçt" name="EMAIL" required="" autocomplete="off">
                            <button class="default-btn active disabled" type="submit" style="pointer-events: all; cursor: pointer;">
                                Bizi izlə
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="quick-link">
                        @foreach($footer as $data)<h3>{{$data->title}}</h3>@endforeach
                        <ul>
                            <li>
                                <a href="#menu_1">
                                    <i class="ri-add-fill"></i>
                                    @foreach($footer as $data) <p>{{$data->menu_1}}</p>@endforeach
                                </a>
                            </li>
                            <li>
                                <a href="#menu_2">
                                    <i class="ri-add-fill"></i>
                                    @foreach($footer as $data) <p>{{$data->menu_2}}</p>@endforeach
                                </a>
                            </li>
                            <li>
                                <a href="#menu_3">
                                    <i class="ri-add-fill"></i>
                                    @foreach($footer as $data) <p>{{$data->menu_3}}</p>@endforeach
                                </a>
                            </li>
                            <li>
                                <a href="#menu_4">
                                    <i class="ri-add-fill"></i>
                                    @foreach($footer as $data) <p>{{$data->menu_4}}</p>@endforeach
                                </a>
                            </li>
                            <li>
                                <a href="#menu_5">
                                    <i class="ri-add-fill"></i>
                                    @foreach($footer as $data) <p>{{$data->menu_5}}</p>@endforeach
                                </a>
                            </li>
                            <li>
                                <a href="#menu_6">
                                    <i class="ri-add-fill"></i>
                                    @foreach($footer as $data) <p>{{$data->menu_6}}</p>@endforeach
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="helpful-link">
                        @foreach($footer as $data)<h3>{{$data->helpful_link}}</h3>@endforeach
                        <ul>
                            <li>
                                <span>Ünvan: </span>@foreach($footer as $data){{$data->name}}@endforeach
                            </li>
                            <li>
                                <span>Tel: </span>@foreach($footer as $data)<a href="tel:+994508008131">{{$data->tel}}</a>@endforeach
                            </li>
                            <li>
                                <span>E-Poçt: </span>@foreach($footer as $data)<a href="mailto:info@servisay.com">{{$data->email}}</a>@endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="instragram">
                        @foreach($footer as $data)<h3>{{$data->link_title}}</h3>@endforeach
                        <div class="row">
                            <div class="col-4">
                                <div class="instragram-img">
                                    @foreach($footer as $data)<a href="{{$data->link}}" target="_blank">@endforeach
                                        <img src="{{asset('frontend')}}/assets/images/footer/ins-1.jpg" alt="Image">
                                        <div class="icon">
                                            <i class="ri-instagram-line"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="instragram-img">
                                    @foreach($footer as $data)<a href="{{$data->link}}" target="_blank">@endforeach
                                        <img src="{{asset('frontend')}}/assets/images/footer/ins-2.jpg" alt="Image">
                                        <div class="icon">
                                            <i class="ri-instagram-line"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="instragram-img">
                                    @foreach($footer as $data)<a href="{{$data->link}}" target="_blank">@endforeach
                                        <img src="{{asset('frontend')}}/assets/images/footer/ins-3.jpg" alt="Image">
                                        <div class="icon">
                                            <i class="ri-instagram-line"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="instragram-img">
                                    @foreach($footer as $data)<a href="{{$data->link}}" target="_blank">@endforeach
                                        <img src="{{asset('frontend')}}/assets/images/footer/ins-4.jpg" alt="Image">
                                        <div class="icon">
                                            <i class="ri-instagram-line"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="instragram-img">
                                    @foreach($footer as $data)<a href="{{$data->link}}" target="_blank">@endforeach
                                        <img src="{{asset('frontend')}}/assets/images/footer/ins-5.jpg" alt="Image">
                                        <div class="icon">
                                            <i class="ri-instagram-line"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="instragram-img">
                                    @foreach($footer as $data)<a href="{{$data->link}}" target="_blank">@endforeach
                                        <img src="{{asset('frontend')}}/assets/images/footer/ins-6.jpg" alt="Image">
                                        <div class="icon">
                                            <i class="ri-instagram-line"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copy">
                        <p>© <strong>SERVISAY</strong> is Proudly Owned by <a href="https://hostaring.com/" target="_blank"><strong>HOSTARING</strong></a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="social-content">
                        <ul>
                            <li><span>Sosial şəbəkələrdə</span></li>
                            <li>
                               @foreach($footer as $data) <a href="{{$data->facebook}}" target="_blank"><i class="ri-facebook-fill"></i></a>@endforeach
                            </li>
                            <li>
                                @foreach($footer as $data) <a href="{{$data->twitter}}" target="_blank"><i class="ri-twitter-fill"></i></a>@endforeach
                            </li>
                            <li>
                                @foreach($footer as $data) <a href="{{$data->instagram}}" target="_blank"><i class="ri-instagram-fill"></i></a>@endforeach
                            </li>
                            <li>
                                @foreach($footer as $data) <a href="{{$data->linkledin}}" target="_blank"><i class="ri-linkedin-fill"></i></a>@endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Main Body -->
<!-- Place all Scripts Here -->
<!-- jQuery -->
