@extends('admin.admin_master')
@section('body')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Gelen Mesajlar</h4>

                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>

                                    <tr>
                                        <th>Ad-Soyad</th>
                                        <th>E-Posta</th>
                                        <th>İletişim</th>
                                        <th>Konu</th>
                                        <th>Mesaj</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($muracaat as $data)
                                        <tr>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->contac}}</td>
                                            <td>{{$data->subject}}</td>
                                            <td>{{$data->messages}}</td>
                                            <td>
                                                <a href="{{url('admin/muracaat/delete/'.$data->id)}}" class="btn btn-danger btn-md" title="Sil"><i class="ri-delete-bin-2-line"></i></a>
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
