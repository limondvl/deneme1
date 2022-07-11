@extends('admin.admin_master')
@section('body')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Hizmetlerimiz</h4>
                            <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav">
                                    <li class="nav-item">
                                        <a href="#baslik" class="nav-link" data-toggle="tab">
                                            <span class="step-number">01</span>
                                            <span class="step-title">Başlık</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#kazan-sistemleri" class="nav-link" data-toggle="tab">
                                            <span class="step-number">02</span>
                                            <span class="step-title">Kazan_Sistemleri</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#kombi-sistemleri" class="nav-link" data-toggle="tab">
                                            <span class="step-number">03</span>
                                            <span class="step-title">Kombi_Sistemleri</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#havalandirma-sistemleri" class="nav-link" data-toggle="tab">
                                            <span class="step-number">04</span>
                                            <span class="step-title">Havalandırma_Sistemleri</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#otomasyon-sistemleri" class="nav-link" data-toggle="tab">
                                            <span class="step-number">05</span>
                                            <span class="step-title">Otomasyon_Sistemleri</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#yangin-korumasi" class="nav-link" data-toggle="tab">
                                            <span class="step-number">06</span>
                                            <span class="step-title">Yangın_Koruması</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#yalitim" class="nav-link" data-toggle="tab">
                                            <span class="step-number">07</span>
                                            <span class="step-title">Yalıtım</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#ozon-sistemleri" class="nav-link" data-toggle="tab">
                                            <span class="step-number">08</span>
                                            <span class="step-title">Ozon_Sistemleri</span>
                                        </a>
                                    </li>
                                </ul>
                                <form id="service_form" action="{{ route('service.update.post-id',['id'=>$service->id]) }}"  method="POST">
                                    @csrf
                                <div class="tab-content twitter-bs-wizard-tab-content">
                                    <div class="tab-pane" id="baslik">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-firstname-input">Başlık</label>
                                                        <input type="text" class="form-control" id="basicpill-firstname-input" name="title" value="{{$service->title}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-lastname-input">Buton</label>
                                                        <input type="text" class="form-control" id="basicpill-lastname-input" name="button" value="{{$service->button}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-address-input">Açıklama</label>
                                                        <textarea name="sub_title" id="basicpill-address-input" class="form-control" rows="4">{{$service->sub_title}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="tab-pane" id="kazan-sistemleri">
                                        <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-pancard-input">Başlık</label>
                                                            <input type="text" class="form-control" id="basicpill-pancard-input" name="kazan_sistemleri_1" value="{{$service->kazan_sistemleri_1}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-vatno-input">Açıklama</label>
                                                            <input type="text" class="form-control" id="basicpill-vatno-input" name="kazan_sistemleri_2" value="{{$service->kazan_sistemleri_2}}">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="kombi-sistemleri">
                                        <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-cardno-input">Başlık</label>
                                                            <input type="text" class="form-control" id="basicpill-cardno-input" name="kombi_sistemleri_1" value="{{$service->kombi_sistemleri_1}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-card-verification-input">Açıklama</label>
                                                            <input type="text" class="form-control" id="basicpill-card-verification-input" name="kombi_sistemleri_2" value="{{$service->kombi_sistemleri_2}}">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="havalandirma-sistemleri">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="basicpill-cardno-input">Başlık</label>
                                                    <input type="text" class="form-control" id="basicpill-cardno-input" name="havalandırma_sistemleri_1" value="{{$service->havalandırma_sistemleri_1}}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="basicpill-card-verification-input">Açıklama</label>
                                                    <input type="text" class="form-control" id="basicpill-card-verification-input" name="havalandırma_sistemleri_2" value="{{$service->havalandırma_sistemleri_2}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="otomasyon-sistemleri">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-cardno-input">Başlık</label>
                                                        <input type="text" class="form-control" id="basicpill-cardno-input" name="otomasyon_sistemleri_1" value="{{$service->otomasyon_sistemleri_1}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-card-verification-input">Açıklama</label>
                                                        <input type="text" class="form-control" id="basicpill-card-verification-input" name="otomasyon_sistemleri_2" value="{{$service->otomasyon_sistemleri_2}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="yangin-korumasi">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-cardno-input">Başlık</label>
                                                        <input type="text" class="form-control" id="basicpill-cardno-input" name="yangin_korumasi_1" value="{{$service->yangin_korumasi_1}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-card-verification-input">Açıklama</label>
                                                        <input type="text" class="form-control" id="basicpill-card-verification-input" name="yangin_korumasi_2" value="{{$service->yangin_korumasi_2}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="yalitim">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-cardno-input">Başlık</label>
                                                        <input type="text" class="form-control" id="basicpill-cardno-input" name="yalitim_1" value="{{$service->yalitim_1}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-card-verification-input">Açıklama</label>
                                                        <input type="text" class="form-control" id="basicpill-card-verification-input" name="yalitim_2" value="{{$service->yalitim_2}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="ozon-sistemleri">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-cardno-input">Başlık</label>
                                                        <input type="text" class="form-control" id="basicpill-cardno-input" name="ozon_sistemleri_1" value="{{$service->ozon_sistemleri_1}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-card-verification-input">Açıklama</label>
                                                        <input type="text" class="form-control" id="basicpill-card-verification-input" name="ozon_sistemleri_2" value="{{$service->ozon_sistemleri_2}}">
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
