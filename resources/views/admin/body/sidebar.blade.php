<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">

            <img src="{{asset('uploads/admin_images/'.\Illuminate\Support\Facades\Auth::user()->profile_image)}}" alt="" class="avatar-md rounded-circle">

            </div>
            <div class="mt-3">
                @auth()
                    <h4 class="font-size-16 mb-1">{{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
                @if( \Illuminate\Support\Facades\Auth::user()->role_as == '1')
                    <span class="text-muted"><i class=" fas fa-user-cog
 align-middle font-size-14 text-primary"></i> Admin</span>
                    @else
                        <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-primary"></i>User</span>
                    @endif
                @endauth


            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <span>Anasayfa</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-window-line"></i>
                        <span>Header Yapılandırma</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
{{--                        <li><a href="{{ route('add.top-header') }}">Top Header</a></li>--}}
                        <li><a href="{{ route('tables.top-header') }}">Üst Header Alanı</a></li>
                        <li><a href="{{ route('sliders.index') }}">Slider</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Menü İçerikleri</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{--                        <li><a href="{{ route('add.top-header') }}">Top Header</a></li>--}}
                        <li><a href="{{ route('about.index') }}">Hakkımızda</a></li>
                        <li><a href="{{ route('service.index') }}">Hizmetlerimiz</a></li>
                        <li><a href="{{ route('neden-biz.index') }}">Niye Bizi Seçmelisiniz</a></li>
                    </ul>
                </li>


                <li class="menu-title">İşlemler</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ri-mail-line"></i>
                            @if(\Illuminate\Support\Facades\DB::table('muracaats')->count() == '0')
                            <span class="badge rounded-pill bg-danger float-end">{{\Illuminate\Support\Facades\DB::table('muracaats')->count()}}</span>
                        @else
                            <span class="badge rounded-pill bg-primary float-end">{{\Illuminate\Support\Facades\DB::table('muracaats')->count()}}</span>
                        @endif


                        <span>Online-Müracaat</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('muracaat.index')}}">Gelen Mesajlar</a></li>
                    </ul>
                </li>

{{--                <li class="menu-title">Sayfalar</li>--}}

{{--                <li>--}}
{{--                    <a href="javascript: void(0);" class="has-arrow waves-effect">--}}
{{--                        <i class="ri-file-text-line"></i>--}}
{{--                        <span>Sayfaları Yapılandır</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu" aria-expanded="false">--}}
{{--                        <li><a href="ui-alerts.html">Alerts</a></li>--}}
{{--                        <li><a href="ui-buttons.html">Buttons</a></li>--}}
{{--                        <li><a href="ui-cards.html">Cards</a></li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
                <li class="menu-title">Footer</li>

                <li>
                    <a href="{{route('footer.index')}}">
                        <i class="ri-pencil-ruler-2-line"></i>
                        <span>Footer Yapılandır</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
