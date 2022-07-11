@extends('admin.admin_master')
@section('body')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Slider</h4>
                            <form action="{{route('sliders.update.post-id',['id'=>$slider->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Başlık</label>
                                    <div class="col-sm-10">
                                        <input name="title" class="form-control" type="text" value="{{$slider->title}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Alt Başlık</label>
                                    <div class="col-sm-10">
                                        <input name="sub_title" class="form-control" type="text" value="{{$slider->sub_title}}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Buton</label>
                                    <div class="col-sm-10">
                                        <input name="button" class="form-control" type="text" value="{{$slider->button}}" id="example-text-input">
                                    </div>
                                </div>
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
