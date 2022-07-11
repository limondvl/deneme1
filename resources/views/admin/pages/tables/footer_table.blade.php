@extends('admin.admin_master')
@section('body')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Footer</h4>

                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>

                                    <tr>
                                        <th>Açıklama</th>
                                        <th>Başlık</th>
                                        <th>Menü-1</th>
                                        <th>Menü-2</th>
                                        <th>Menü-3</th>
                                        <th>Menü-4</th>
                                        <th>Menü-5</th>
                                        <th>Menü-6</th>
                                        <th>Helpful_link</th>
                                        <th>Ünvan</th>
                                        <th>Tel</th>
                                        <th>E-mail</th>
                                        <th>Link-Başlık</th>
                                        <th>İnstagram-Link</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>İnstagram</th>
                                        <th>Linkledin</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($footer as $data)
                                        <tr>
                                            <td>{{$data->description}}</td>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->menu_1}}</td>
                                            <td>{{$data->menu_2}}</td>
                                            <td>{{$data->menu_3}}</td>
                                            <td>{{$data->menu_4}}</td>
                                            <td>{{$data->menu_5}}</td>
                                            <td>{{$data->menu_6}}</td>
                                            <td>{{$data->helpful_link}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->tel}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->link_title}}</td>
                                            <td>{{$data->link}}</td>
                                            <td>{{$data->facebook}}</td>
                                            <td>{{$data->twitter}}</td>
                                            <td>{{$data->instagram}}</td>
                                            <td>{{$data->linkledin}}</td>
                                            <td>
                                                <a href="{{url('admin/footer/edit/'.$data->id)}}" class="btn btn-primary btn-md" title="Sil"><i class="ri-pencil-fill"></i></a>
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
