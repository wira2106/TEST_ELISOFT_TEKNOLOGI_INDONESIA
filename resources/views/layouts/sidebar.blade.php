<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ url('/image/'.Auth::user()->foto)}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span class="ellipsis">

                            {{ Auth::user()->name }}
                            <span class="user-level">{{ Auth::user()->role_status ?? 'User' }}</span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ (request()->is('*dashboard*')) ? 'active' : '' }}">
                    <a href="{{url('/dashboard')}}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('*user*')) || (request()->is('*registrasi*')) || (request()->is('*detail/company/*')) || (request()->is('*detail/penilaian*')) ? 'active submenu' : '' }}">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fa fa-desktop"></i>
                        <p>Kelola Data Master</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ (request()->is('*user*')) || (request()->is('*registrasi*')) || (request()->is('*detail/company/*')) || (request()->is('*detail/penilaian*')) ? 'show' : '' }}" id="dashboard" style="">
                        <ul class="nav nav-collapse">
                            <li class="{{ (request()->is('*user*')) ? 'active' : '' }}">
                                <a href="{{url('/user')}}">
                                    <i class="fas fa-users"></i>
                                    <p>User</p>
                                </a>
                            </li>
                            <li class="{{ (request()->is('*registrasi*')) || (request()->is('*detail/company/*')) || (request()->is('*detail/penilaian*')) ? 'active' : '' }}">
                                <a href="{{url('/registrasi')}}">
                                    <i class="fa fa-address-book"></i>
                                    <p>Registrasi</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ (request()->is('*koreksiFiskal*')) ? 'active' : '' }}">
                    <a href="{{url('/koreksiFiskal')}}" class="collapsed" aria-expanded="false">
                        <i class="fa fa-calculator"></i>
                        <p>Koreksi Fiskal</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('*neraca*')) ? 'active' : '' }}">
                    <a href="{{url('/neraca')}}" class="collapsed" aria-expanded="false">
                        <i class="fa fa-balance-scale"></i>
                        <p>Neraca</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('*laporan*'))  ? 'active submenu' : '' }}">
                    <a data-toggle="collapse" href="#laporan" class="collapsed" aria-expanded="false">
                        <i class="fa fa-file-text-o"></i>
                        <p>Kelola Laporan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ (request()->is('*laporan*'))  ? 'show' : '' }}" id="laporan" style="">
                        <ul class="nav nav-collapse">
                            <li class="{{ (request()->is('*laporan/koreksi_fiskal*')) ? 'active' : '' }}">
                                <a href="{{url('/laporan/koreksi_fiskal')}}">
                                    <i class="fa fa-file-text-o"></i>
                                    <p>Laporan Koreksi Fiskal</p>
                                </a>
                            </li>
                            <li class="{{ (request()->is('*laporan/nrc*')) ? 'active' : '' }}">
                                <a href="{{url('/laporan/nrc')}}">
                                    <i class="fa fa-file-text-o"></i>
                                    <p>Laporan Neraca</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>


        </div>
    </div>
</div>