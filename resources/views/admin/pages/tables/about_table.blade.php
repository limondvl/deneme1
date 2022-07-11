@extends('admin.admin_master')
@section('body')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Hakkımızda</h4>

                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>

                                    <tr>
                                        <th>Başlık</th>
                                        <th>İçerik</th>
                                        <th>Seçenek-1</th>
                                        <th>Seçenek-2</th>
                                        <th>Seçenek-3</th>
                                        <th>Seçenek-4</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($about as $data)
                                        <tr>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->content}}</td>
                                            <td>{{$data->option_1}}</td>
                                            <td>{{$data->option_2}}</td>
                                            <td>{{$data->option_3}}</td>
                                            <td>{{$data->option_4}}</td>
                                            <td>
                                                <a href="{{url('admin/about/edit/'.$data->id)}}" class="btn btn-primary btn-sm" title="Düzenle"><i class="ri-pencil-fill"></i></a>
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
