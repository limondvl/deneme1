<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('backend')}}/assets/images/logo-sm.png" alt="logo-sm" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{asset('backend')}}/assets/images/logo-dark.png" alt="logo-dark" height="20">
                                </span>
                </a>

                <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('backend')}}/assets/images/logo-sm.png" alt="logo-sm-light" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{asset('backend')}}/assets/images/logo-light.png" alt="logo-light" height="20">
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->

        </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('uploads/admin_images/'.\Illuminate\Support\Facades\Auth::user()->profile_image)}}"
                         alt="Header Avatar">
                    @auth()
                    <span class="d-none d-xl-inline-block ms-1">{{Illuminate\Support\Facades\Auth::user()->name}}</span>
                    @endauth
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="ri-user-line align-middle me-1"></i> Profil</a>
                    <a class="dropdown-item" href="{{route('change.password')}}"><i class="ri-wallet-2-line align-middle me-1"></i> Şifre Değiştir</a>
{{--                    <a class="dropdown-item d-block" href=""><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>--}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{route('admin.logout')}}" ><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Çıkış Yap</a>
                </div>
            </div>




        </div>
    </div>
</header>
