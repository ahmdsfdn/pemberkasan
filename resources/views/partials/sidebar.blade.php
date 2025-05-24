<style>
    .sidebar.sidebar-style-2 .nav .nav-item {
        padding: 0 10px;
    }
    .sidebar, .sidebar[data-background-color=white] {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        width: 270px;
        margin-top: 62px;
        display: block;
        z-index: 1000;
        color: #fff;
        font-weight: 200;
        background: #fff;
        -webkit-box-shadow: 4px 4px 10px rgb(69 65 78 / 6%);
        -moz-box-shadow: 4px 4px 10px rgba(69,65,78,.06);
        box-shadow: 4px 4px 10px rgb(69 65 78 / 6%);
        transition: all .3s;
    }
    .logo-header {
        float: left;
        width: 270px;
        height: 62px;
        line-height: 60px;
        color: #333;
        z-index: 1001;
        font-size: 17px;
        font-weight: 400;
        padding-left: 25px;
        padding-right: 25px;
        z-index: 1001;
        display: flex;
        align-items: center;
        position: relative;
        transition: all .3s;
    }
    .main-panel .page-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        margin-top: 60px;
    }
    .sidebar .nav-collapse, .sidebar[data-background-color=white] .nav-collapse {
        margin-top: 0;
        margin-bottom: 0px;
        padding-bottom: 0px;
        padding-top: 5px;
    }
</style>
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('berkas') ? 'active' : '' }}">
                    <a href="{{ route('berkas') }}">
                        <i class="fas fa-file"></i>
                        <p>Berkas</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
