@extends('admin.admin_master')
@section('body')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Hakkımızda</h4>
                            <form action="{{ route('about.update.post-id',['id'=>$about->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Başlık</label>
                                    <div class="col-sm-10">
                                        <input name="title" class="form-control" type="text" value="{{$about->title}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">İçerik</label>
                                    <div class="col-sm-10">
                                        <input name="content" class="form-control" type="text" value="{{$about->content}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Seçenek-1</label>
                                    <div class="col-sm-10">
                                        <input name="option_1" class="form-control" type="text" value="{{$about->option_1}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Seçenek-2</label>
                                    <div class="col-sm-10">
                                        <input name="option_2" class="form-control" type="text" value="{{$about->option_2}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Seçenek-3</label>
                                    <div class="col-sm-10">
                                        <input name="option_3" class="form-control" type="text" value="{{$about->option_3}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Seçenek-4</label>
                                    <div class="col-sm-10">
                                        <input name="option_4" class="form-control" type="text" value="{{$about->option_4}}" id="example-text-input">
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
