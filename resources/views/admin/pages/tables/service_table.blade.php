@extends('admin.admin_master')
@section('body')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Hizmetlerimiz</h4>

                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>

                                    <tr>
                                        <th>Başlık</th>
                                        <th>Alt-Başlık</th>
                                        <th>Buton</th>
                                        <th>Kazan_sistemleri_1</th>
                                        <th>Kazan_sistemleri_2</th>
                                        <th>Kombi_sistemleri_1</th>
                                        <th>Kombi_sistemleri_2</th>
                                        <th>Klima_sistemleri_1</th>
                                        <th>Klima_sistemleri_2</th>
                                        <th>Havalandırma_sistemleri_1</th>
                                        <th>Havalandırma_sistemleri_2</th>
                                        <th>Otomasyon_sistemleri_1</th>
                                        <th>Otomasyon_sistemleri_2</th>
                                        <th>Yangin_koruması_1</th>
                                        <th>Yangin_koruması_2</th>
                                        <th>Yalıtım_1</th>
                                        <th>Yalıtım_2</th>
                                        <th>Ozon_sistemleri_1</th>
                                        <th>Ozon_sistemleri_2</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($service as $data)
                                        <tr>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->sub_title}}</td>
                                            <td>{{$data->button}}</td>
                                            <td>{{$data->kazan_sistemleri_1}}</td>
                                            <td>{{$data->kazan_sistemleri_2}}</td>
                                            <td>{{$data->kombi_sistemleri_1}}</td>
                                            <td>{{$data->kombi_sistemleri_2}}</td>
                                            <td>{{$data->klima_sistemleri_1}}</td>
                                            <td>{{$data->klima_sistemleri_2}}</td>
                                            <td>{{$data->havalandırma_sistemleri_1}}</td>
                                            <td>{{$data->havalandırma_sistemleri_2}}</td>
                                            <td>{{$data->otomasyon_sistemleri_1}}</td>
                                            <td>{{$data->otomasyon_sistemleri_2}}</td>
                                            <td>{{$data->yangin_korumasi_1}}</td>
                                            <td>{{$data->yangin_korumasi_2}}</td>
                                            <td>{{$data->yalitim_1}}</td>
                                            <td>{{$data->yalitim_2}}</td>
                                            <td>{{$data->ozon_sistemleri_1}}</td>
                                            <td>{{$data->ozon_sistemleri_2}}</td>
                                            <td>
                                                <a href="{{url('admin/service/edit/'.$data->id)}}" class="btn btn-primary btn-sm" title="Düzenle"><i class="ri-pencil-fill"></i></a>
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
