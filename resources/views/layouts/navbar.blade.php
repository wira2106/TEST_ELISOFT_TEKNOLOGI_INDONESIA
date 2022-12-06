<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark2">
    <div class="container-fluid">
        <!-- <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-search pr-1">
                            <i class="fa fa-search search-icon"></i>
                        </button>
                    </div>
                    <input type="text" placeholder="Search ..." class="form-control">
                </div>
            </form>
        </div> -->
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
                <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                    <i class="fa fa-search"></i>
                </a>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="{{ url('/image/'.Auth::user()->foto)}}" alt="..." class="avatar-img rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg">
                                    <img src="{{ url('/image/'.Auth::user()->foto)}}" alt="image profile" class="avatar-img rounded">
                                </div>
                                <div class="u-text">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p class=" text-muted">{{ Auth::user()->NIM }}</p>
                                </div>
                            </div>
                        </li>
                        <li class="text-center">
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="post" style="display:inline-block;">
                                @csrf
                                <button class="btn btn-sm btn-danger" id="logout"><i class="fa fa-sign-out"></i> Logout</button>
                            </form>
                            <!-- <a href="{{url('/user/'.Auth::user()->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>Edit Profile</a> -->
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>