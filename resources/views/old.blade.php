@extends('admin.admin_master')
@section('body')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Hakkımızda</h4>
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Başlık</label>
                                    <div class="col-sm-10">
                                        <input name="title" class="form-control" type="text" value="{{$service->title}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Alt-Başlık</label>
                                    <div class="col-sm-10">
                                        <input name="sub_title" class="form-control" type="text" value="{{$service->sub_title}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Buton</label>
                                    <div class="col-sm-10">
                                        <input name="button" class="form-control" type="text" value="{{$service->button}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kazan_Sistemleri_1</label>
                                    <div class="col-sm-10">
                                        <input name="kazan_sistemleri_1" class="form-control" type="text" value="{{$service->kazan_sistemleri_1}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kazan_Sistemleri_2</label>
                                    <div class="col-sm-10">
                                        <input name="kazan_sistemleri_2" class="form-control" type="text" value="{{$service->kazan_sistemleri_2}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">kombi_sistemleri_1</label>
                                    <div class="col-sm-10">
                                        <input name="kombi_sistemleri_1" class="form-control" type="text" value="{{$service->kombi_sistemleri_1}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">kombi_sistemleri_2</label>
                                    <div class="col-sm-10">
                                        <input name="kombi_sistemleri_2" class="form-control" type="text" value="{{$service->kombi_sistemleri_2}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Klima_Sistemleri_1</label>
                                    <div class="col-sm-10">
                                        <input name="klima_sistemleri_1" class="form-control" type="text" value="{{$service->klima_sistemleri_1}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Klima_Sistemleri_2</label>
                                    <div class="col-sm-10">
                                        <input name="klima_sistemleri_1" class="form-control" type="text" value="{{$service->klima_sistemleri_2}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Havalandırma_sistemleri_1</label>
                                    <div class="col-sm-10">
                                        <input name="havalandırma_sistemleri_1" class="form-control" type="text" value="{{$service->havalandırma_sistemleri_1}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Havalandırma_sistemleri_2</label>
                                    <div class="col-sm-10">
                                        <input name="havalandırma_sistemleri_2" class="form-control" type="text" value="{{$service->havalandırma_sistemleri_2}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Otomasyon_sistemleri_1</label>
                                    <div class="col-sm-10">
                                        <input name="otomasyon_sistemleri_1" class="form-control" type="text" value="{{$service->otomasyon_sistemleri_1}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Otomasyon_sistemleri_2</label>
                                    <div class="col-sm-10">
                                        <input name="otomasyon_sistemleri_2" class="form-control" type="text" value="{{$service->otomasyon_sistemleri_2}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Yangın_koruması_1</label>
                                    <div class="col-sm-10">
                                        <input name="yangin_korumasi_1" class="form-control" type="text" value="{{$service->yangin_korumasi_1}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Yangın_koruması_2</label>
                                    <div class="col-sm-10">
                                        <input name="yangin_korumasi_2" class="form-control" type="text" value="{{$service->yangin_korumasi_2}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">yalıtım_1</label>
                                    <div class="col-sm-10">
                                        <input name="yalitim_1" class="form-control" type="text" value="{{$service->yalitim_1}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">yalıtım_2</label>
                                    <div class="col-sm-10">
                                        <input name="yalitim_2" class="form-control" type="text" value="{{$service->yalitim_2}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">ozon_sistemleri_1</label>
                                    <div class="col-sm-10">
                                        <input name="ozon_sistemleri_1" class="form-control" type="text" value="{{$service->ozon_sistemleri_1}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">ozon_sistemleri_2</label>
                                    <div class="col-sm-10">
                                        <input name="ozon_sistemleri_2" class="form-control" type="text" value="{{$service->ozon_sistemleri_2}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <!-- end row -->


                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Güncelle">

                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
