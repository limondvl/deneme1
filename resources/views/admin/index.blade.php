@extends('admin.admin_master')
@section('body')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Anasayfa</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Gelen Mesajlar</p>
                                <h4 class="mb-2">{{\Illuminate\Support\Facades\DB::table('muracaats')->count()}}</h4>

                            </div>
                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-shopping-cart-2-line font-size-24"></i>
                                                </span>
                            </div>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-6 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Toplam Kullanıcı</p>
                                <h4 class="mb-2">{{\Illuminate\Support\Facades\Auth::user()->count()}}</h4>

                            </div>
                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-user-3-line font-size-24"></i>
                                                </span>
                            </div>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->

        </div><!-- end row -->


        <!-- end row -->


                </div><!-- end card -->
            </div><!-- end col -->
        </div>
        <!-- end row -->
    </div>

</div>
    @endsection
