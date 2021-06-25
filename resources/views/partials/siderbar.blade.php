<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/LogoDaiHocDaLat.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->FullName}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @can('user-list')
                <li class="nav-item" id="test">
                    <a href="{{route('users.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Người dùng
                        </p>
                    </a>
                </li>
                @endcan
                @can('reportfile-list')
                <li class="nav-item">
                    <a href="{{route('reportfile.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            File nộp
                        </p>
                    </a>
                </li>
                @endcan
                @can('setting-list')
                <li class="nav-item">
                    <a href="{{route('settings.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>
                @endcan
                @can('callforpaper-list')
                <li class="nav-item">
                    <a href="{{route('callforpaper.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                            Thông báo
                        </p>
                    </a>
                </li>
                @endcan
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Tính năng bổ sung
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('regents-list')
                            <li class="nav-item">
                                <a href="{{route('regents.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Hội đồng
                                    </p>
                                </a>
                            </li>
                        @endcan
                        @can('certificate-list')
                            <li class="nav-item">
                                <a href="{{route('certificates.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Học vị
                                    </p>
                                </a>
                            </li>
                        @endcan
                        @can('level-list')
                            <li class="nav-item">
                                <a href="{{route('levels.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Họ̣c hàm
                                    </p>
                                </a>
                            </li>
                        @endcan
                        @can('partner-list')
                            <li class="nav-item">
                                <a href="{{route('partner.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Đối tác
                                    </p>
                                </a>
                            </li>
                        @endcan
                        @can('report-list')
                            <li class="nav-item">
                                <a href="{{route('report.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Bài nộp
                                    </p>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
                @can('time-list')
                <li class="nav-item">
                    <a href="{{route('time.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Thời gian
                        </p>
                    </a>
                </li>
                @endcan
                @can('role-list')
                <li class="nav-item">
                    <a href="{{route('roles.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-trophy"></i>
                        <p>
                            Danh sách vai trò (Role)
                        </p>
                    </a>
                </li>
                @endcan
                <li class="nav-item">
                    <a href="{{route('permissions.create')}}" class="nav-link">
                        <p>
                            Tạo Dữ liệu bảng Permissions
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
