
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{url('/')}}" class="brand-link" style="text-align:center;">
        <img src="{{ asset('images/land-logo.png') }}" alt="Miscase Logo"
            class="img-fluid" style="opacity: .8; height: 8rem;">

    </a>
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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

                <li class="nav-item {{ Str::contains(Request::path(), 'staff')? 'menu-open':'' }}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            স্টাফ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('stafflist')}}" class="nav-link {{ Str::contains(Request::path(), 'staff/list')? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>স্টাফ তালিকা</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('staffcreate')}}" class="nav-link {{ Str::contains(Request::path(), 'staff/create')? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>নতুন স্টাফ</p>
                            </a>
                        </li>

                    </ul>
                </li>









            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>
