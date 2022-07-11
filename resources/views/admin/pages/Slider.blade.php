@extends('admin.admin_master')
@section('body')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Slider</h4>

                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>

                                    <tr>
                                        <th>Başlık</th>
                                        <th>Alt-Başlık</th>
                                        <th>Buton</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sliders as $data)
                                        <tr>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->sub_title}}</td>
                                            <td>{{$data->button}}</td>
                                            <td>
                                                <a href="{{url('admin/sliders/edit/'.$data->id)}}" class="btn btn-primary btn-sm" title="Düzenle"><i class="ri-pencil-fill"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
@endsection
