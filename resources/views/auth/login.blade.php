<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Upcube - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend')}}/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('backend')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('backend')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <link href="{{asset('backend')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
<div class="bg-overlay"></div>
<div class="wrapper-page">
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <div class="text-center mt-4">
                    <div class="mb-3">
                        <a href="index.html" class="auth-logo">
                            <img src="{{asset('logo/logo.jpg')}}" height="80" class="logo-dark mx-auto" alt="">

                        </a>
                    </div>
                </div>

                <h5 class="text-muted text-center font-size-18"><b>Giriş Yap</b></h5>

                <div class="p-3">
                    <form class="form-horizontal mt-3" action="{{route('login')}}" method="POST">
                        @csrf
                    {{--Username--}}
                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control" id="username"  name="username" type="text" required="" placeholder="Kullanıcı Adı" autofocus>
                            </div>
                        </div>
                    {{--Password--}}
                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control" id="password" name="password" type="password" required="" placeholder="Şifre" autofocus>
                            </div>
                        </div>
                    {{--Remember me--}}
                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember_me" name="remember_me" autofocus>
                                    <label class="form-label ms-1" for="customCheck1">Beni Hatırla</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3 text-center row mt-3 pt-1">
                            <div class="col-12">
                                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Giriş Yap</button>
                            </div>
                        </div>

                        <div class="form-group mb-0 row mt-2">
                            <div class="col-sm-7 mt-3">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Şifreni'mi Unuttun?</a>
                                @endif

                            </div>
                            <div class="col-sm-5 mt-3">
                                <a href="auth-register.html" class="text-muted"><i class="mdi mdi-account-circle"></i> Hesap Oluştur</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end -->
            </div>
            <!-- end cardbody -->
        </div>
        <!-- end card -->
    </div>
    <!-- end container -->
</div>
<!-- end -->

<!-- JAVASCRIPT -->
<script src="{{asset('backend')}}/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/node-waves/waves.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('backend')}}/assets/js/app.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>

</body>
</html>