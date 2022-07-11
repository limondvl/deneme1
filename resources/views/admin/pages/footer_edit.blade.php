@extends('admin.admin_master')
@section('body')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Footer Yapılandır</h4>
                            <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav">
                                    <li class="nav-item">
                                        <a href="#descrip" class="nav-link" data-toggle="tab">
                                            <span class="step-number">01</span>
                                            <span class="step-title">Açıklama</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#menubs" class="nav-link" data-toggle="tab">
                                            <span class="step-number">02</span>
                                            <span class="step-title">Başlık-Menü</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#helpful" class="nav-link" data-toggle="tab">
                                            <span class="step-number">03</span>
                                            <span class="step-title">Helpful</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#image-title" class="nav-link" data-toggle="tab">
                                            <span class="step-number">04</span>
                                            <span class="step-title">Link ve Başlık</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#link" class="nav-link" data-toggle="tab">
                                            <span class="step-number">05</span>
                                            <span class="step-title">Sosyal-Lİnk</span>
                                        </a>
                                    </li>
                                </ul>
                                <form id="service_form" action="{{ route('footer.update.post-id',['id'=>$footer->id]) }}"  method="POST">
                                    @csrf
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="descrip">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-address-input">Açıklama</label>
                                                        <textarea name="description" id="basicpill-address-input" class="form-control" rows="4">{{$footer->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="menubs">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-pancard-input">Başlık</label>
                                                            <input type="text" class="form-control" id="basicpill-pancard-input" name="title" value="{{$footer->title}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-pancard-input">Menü-1</label>
                                                            <input type="text" class="form-control" id="basicpill-pancard-input" name="menu_1" value="{{$footer->menu_1}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-pancard-input">Menü-2</label>
                                                            <input type="text" class="form-control" id="basicpill-pancard-input" name="menu_2" value="{{$footer->menu_2}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-pancard-input">Menü-3</label>
                                                            <input type="text" class="form-control" id="basicpill-pancard-input" name="menu_3" value="{{$footer->menu_3}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-pancard-input">Menü-4</label>
                                                            <input type="text" class="form-control" id="basicpill-pancard-input" name="menu_4" value="{{$footer->menu_4}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-pancard-input">Menü-5</label>
                                                            <input type="text" class="form-control" id="basicpill-pancard-input" name="menu_5" value="{{$footer->menu_5}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-pancard-input">Menü-6</label>
                                                            <input type="text" class="form-control" id="basicpill-pancard-input" name="menu_6" value="{{$footer->menu_6}}">
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="helpful">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-cardno-input">Link-Başlık</label>
                                                            <input type="text" class="form-control" id="basicpill-cardno-input" name="helpful_link" value="{{$footer->helpful_link}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-card-verification-input">Ünvan</label>
                                                            <input type="text" class="form-control" id="basicpill-card-verification-input" name="name" value="{{$footer->name}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-card-verification-input">Telefon</label>
                                                            <input type="text" class="form-control" id="basicpill-card-verification-input" name="tel" value="{{$footer->tel}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-card-verification-input">E-mail</label>
                                                            <input type="text" class="form-control" id="basicpill-card-verification-input" name="email" value="{{$footer->email}}">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="image-title">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-cardno-input">Link Başlık</label>
                                                        <input type="text" class="form-control" id="basicpill-cardno-input" name="link_title" value="{{$footer->link_title}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-card-verification-input">Link</label>
                                                        <input type="url" class="form-control" id="basicpill-card-verification-input" name="link" value="{{$footer->link}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="link">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-cardno-input">Facebook</label>
                                                            <input type="text" class="form-control" id="basicpill-cardno-input" name="facebook" value="{{$footer->facebook}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-card-verification-input">Twitter</label>
                                                            <input type="text" class="form-control" id="basicpill-card-verification-input" name="twitter" value="{{$footer->twitter}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-card-verification-input">Instagram</label>
                                                            <input type="text" class="form-control" id="basicpill-card-verification-input" name="instagram" value="{{$footer->instagram}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-card-verification-input">Linkledin</label>
                                                            <input type="text" class="form-control" id="basicpill-card-verification-input" name="linkledin" value="{{$footer->linkledin}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                    <li class="previous"><a href="javascript: void(0);">Geri</a></li>
                                    <input onclick="myFunciton()" class="btn btn-success waves-effect waves-light" value="Güncelle" >
                                    <li class="next"><a href="javascript: void(0);">İleri</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
            @section('js')
                <script>
                    function myFunciton() {
                        document.getElementById('service_form').submit();
                    }
                </script>
                <script src="{{asset('backend')}}/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

                <script src="{{asset('backend')}}/assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

                <!-- form wizard init -->
                <script src="{{asset('backend')}}/assets/js/pages/form-wizard.init.js"></script>

                <script src="{{asset('backend')}}/assets/js/app.js"></script>
@endsection
