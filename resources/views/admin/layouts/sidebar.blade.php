<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ URL('/admin/post/list') }}" class="brand-link">
        <img src="{{ asset('public/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('public/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin Panel</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link active" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            English Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="{{ URL('/admin/post/list') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL('/admin/post/about/aboutlist') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>About Us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL('/admin/post/whyhaffez/whyhaffezlist') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Why Haffez</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL('/admin/oursheikh/oursheikhlist') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Our Sheikhs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL('admin/contact/list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contact us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL('admin/footer/list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Footer</p>
                    </a>
                </li>

                </li>

            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Arabic Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="{{ URL('/admin/arabicadmin/post/list') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Arabic - Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL('/admin/arabicadmin/post/about/aboutlist') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Arabic - About Us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL('/admin/arabicadmin/post/whyhaffez/whyhaffezlist') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Arabic - Why Haffez</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL('/admin/arabicadmin/oursheikh/oursheikhlist') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Arabic - Our Sheikhs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL('admin/arabicadmin/contact/list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Arabic - Contact us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL('admin/arabicadmin/footer/list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Arabic - Footer</p>
                    </a>
                </li>

                </li>

            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Handle User-Details
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="{{ route('user-booking') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Bookings</p>
                    </a>
                </li>
                </li>
            </ul>


            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Handle Teachers
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="{{ route('All-Teachers') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Teachers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('All-Appoints') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Set Appointments</p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
