@extends('admin.admin_master')
@section('body')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Üst Header</h4>

                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>

                                    <tr>
                                        <th>Adres</th>
                                        <th>Tel-1</th>
                                        <th>Tel-2</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Linkledin</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($header as $data)
                                    <tr>
                                        <td>{{$data->adres}}</td>
                                        <td>{{$data->tel_1}}</td>
                                        <td>{{$data->tel_2}}</td>
                                        <td>{{$data->facebook}}</td>
                                        <td>{{$data->twitter}}</td>
                                        <td>{{$data->linkledin}}</td>
                                        <td>
                                            <a href="{{url('admin/edit/top_header/'.$data->id)}}" class="btn btn-primary btn-sm" title="Düzenle"><i class="ri-pencil-fill"></i></a>

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
