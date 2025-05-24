<nav class="navbar navbar-header navbar-expand-lg" data-background-color="purple2">

    <div class="container-fluid">
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
                <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                    <i class="fa fa-search"></i>
                </a>
            </li>
            <div style="color:white;">
                <h5 style ="padding-bottom:0px;margin-bottom:0px">
                    User
                </h5>
                <small style="font-size:9pt">Pegawai</small>
            </div>
            &emsp;
            <a href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                <i style="color:white;font-size:18pt" class="icon-login"></i>
            </a>
            <form action="{{ URL::to('logout') }}" method="post" id="logoutForm" style="display:none">
                {{ csrf_field() }}
            </form>
        </ul>
    </div>
</nav>
