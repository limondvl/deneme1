@extends('admin.admin_master')
@section('body')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Neden Biz ?</h4>
                            <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav">
                                    <li class="nav-item">
                                        <a href="#baslik" class="nav-link" data-toggle="tab">
                                            <span class="step-number">01</span>
                                            <span class="step-title">Başlık</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#name_1" class="nav-link" data-toggle="tab">
                                            <span class="step-number">02</span>
                                            <span class="step-title">Seçenek_1</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#name_2" class="nav-link" data-toggle="tab">
                                            <span class="step-number">03</span>
                                            <span class="step-title">Seçenek_2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#name_3" class="nav-link" data-toggle="tab">
                                            <span class="step-number">04</span>
                                            <span class="step-title">Seçenek_3</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#name_4" class="nav-link" data-toggle="tab">
                                            <span class="step-number">05</span>
                                            <span class="step-title">Seçenek_4</span>
                                        </a>
                                    </li>

                                </ul>
                                <form id="service_form" action="{{route('neden-biz.update.post-id',['id'=>$neden->id])}}"  method="POST">
                                    @csrf
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="baslik">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-firstname-input">Başlık</label>
                                                        <input type="text" class="form-control" id="basicpill-firstname-input" name="title" value="{{$neden->title}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-lastname-input">Açıklama</label>
                                                        <input type="text" class="form-control" id="basicpill-lastname-input" name="description" value="{{$neden->description}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="name_1">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-pancard-input">Başlık</label>
                                                            <input type="text" class="form-control" id="basicpill-pancard-input" name="name_1" value="{{$neden->name_1}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-vatno-input">Açıklama</label>
                                                            <input type="text" class="form-control" id="basicpill-vatno-input" name="name_desc_1" value="{{$neden->name_desc_1}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="name_2">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-cardno-input">Başlık</label>
                                                            <input type="text" class="form-control" id="basicpill-cardno-input" name="name_2" value="{{$neden->name_2}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-card-verification-input">Açıklama</label>
                                                            <input type="text" class="form-control" id="basicpill-card-verification-input" name="name_desc_2" value="{{$neden->name_desc_2}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="name_3">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-cardno-input">Başlık</label>
                                                        <input type="text" class="form-control" id="basicpill-cardno-input" name="name_3" value="{{$neden->name_3}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-card-verification-input">Açıklama</label>
                                                        <input type="text" class="form-control" id="basicpill-card-verification-input" name="name_desc_3" value="{{$neden->name_desc_3}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="name_4">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-cardno-input">Başlık</label>
                                                            <input type="text" class="form-control" id="basicpill-cardno-input" name="name_4" value="{{$neden->name_4}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicpill-card-verification-input">Açıklama</label>
                                                            <input type="text" class="form-control" id="basicpill-card-verification-input" name="name_desc_4" value="{{$neden->name_desc_4}}">
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
