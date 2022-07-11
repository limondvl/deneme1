@extends('admin.admin_master')
@section('body')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Neden Biz ?</h4>

                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>

                                    <tr>
                                        <th>Başlık</th>
                                        <th>Açıklama</th>
                                        <th>Seçenek_1</th>
                                        <th>Seçenek_1_Açıklama</th>
                                        <th>Seçenek_2</th>
                                        <th>Seçenek_2_Açıklama</th>
                                        <th>Seçenek_3</th>
                                        <th>Seçenek_3_Açıklama</th>
                                        <th>Seçenek_4</th>
                                        <th>Seçenek_4_Açıklama</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($neden as $data)
                                        <tr>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->description}}</td>
                                            <td>{{$data->name_1}}</td>
                                            <td>{{$data->name_desc_1}}</td>
                                            <td>{{$data->name_2}}</td>
                                            <td>{{$data->name_desc_2}}</td>
                                            <td>{{$data->name_3}}</td>
                                            <td>{{$data->name_desc_3}}</td>
                                            <td>{{$data->name_4}}</td>
                                            <td>{{$data->name_desc_4}}</td>

                                            <td>
                                                <a href="{{url('admin/neden-biz/edit/'.$data->id)}}" class="btn btn-primary btn-sm" title="Düzenle"><i class="ri-pencil-fill"></i></a>
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
