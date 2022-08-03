{{-- <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" wire:click="gotopage('landing')">
       <x-project-title class="leftbar-title font-weight-bold text-white"/>
       </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ Str::contains(Request::path(), 'overview')? 'active bg-gradient-primary':'' }}
" href="#" wire:click="gotopage('dashboard')">
<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
    <i class="material-icons opacity-10">dashboard</i>
</div>
<span class="nav-link-text ms-1">ড্যাশবোর্ড</span>
</a>
</li>
<li class="nav-item">
    <a class="nav-link text-white {{ Str::contains(Request::path(), 'case-management')? 'active bg-gradient-primary':'' }} "
        href="#" wire:click="gotopage('casemgt')">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
        </div>
        <span class="nav-link-text ms-1">
            মামলা</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-white " href="#">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
        </div>
        <span class="nav-link-text ms-1">
            ডেমো মেনু আইটেম</span>
    </a>
</li>



<li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
</li>
<li class="nav-item">
    <a class="nav-link text-white " href="#">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
        </div>
        <span class="nav-link-text ms-1">পাসওয়ার্ড বদল</span>
    </a>
</li>


</ul>
<x-credit-leftbar />
</div>

</aside> --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="{{ asset('images/land-logo.png') }}" alt="Miscase Logo"
            class="img-fluid" style="opacity: .8">

    </a>
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> --}}

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                {{-- <li class="nav-item menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link {{ Str::contains(Request::path(), 'overview')? 'active':'' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            ড্যাশবোর্ড
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Str::contains(Request::path(), 'case-management')? 'menu-open':'' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            মামলা
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('caselist')}}" class="nav-link {{ Str::contains(Request::path(), 'case-management/list')? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>মামলা তালিকা</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('casecreate')}}" class="nav-link  {{ Str::contains(Request::path(), 'case-management/create')? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>নতুন মামলা</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            এসিলিয়েন্ট
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Str::contains(Request::path(), 'case-management/list')? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>এসিলিয়েন্ট তালিকা</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>নতুন এসিলিয়েন্ট</p>
                            </a>
                        </li>

                    </ul>
                </li>









            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>
