<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark Admin - Premium Bootstrap 5 Admin Dashboard Template</title>

    <!-- SEO Optimization -->
    <meta name="description" content="Spark Admin - Premium Bootstrap 5 Admin Dashboard Template">
    <meta name="author" content="Spark Admin Team">

    <!-- Favicon -->
    {{--  <link rel="icon" type="image/png" href="{{asset('assets/images/sakola.png')}}">  --}}

    <!-- Local Third-Party Libraries (100% Offline Compatible) -->
    <link rel="stylesheet" href="{{asset('assets/libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/apexcharts/apexcharts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}">

    <!-- Main Design System & Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

    <!-- ==========================================
         START: Sidebar Component
         Highly polished, dark-green sticky navigation
         ========================================== -->
    <div class="sidebar-wrapper" id="sidebar">
      <a href="{{ route('admin.profile') }}" class="sidebar-brand" style="display: flex; align-items: center; gap: 10px; text-decoration: none;">
        <img src="{{ asset('assets/images/sakola.png') }}" alt="Logo" style="width: 40px; height: 40px; object-fit: contain;">
        <span>SMA CINTAWANA</span>
    </a>

        <!-- Navigation Menu -->
        <div class="flex-grow-1 overflow-y-auto">
            <!-- Group: Menu -->
            <div class="sidebar-menu-section">
                <div class="sidebar-menu-title">Menu</div>
                <ul class="sidebar-menu-list">
                    <li class="sidebar-menu-item">
                        <a href="{{ route('admin.dashboard') }}" class="sidebar-menu-link">
                            <i class="bi bi-houses-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="{{ route('admin.profile') }}" class="sidebar-menu-link">
                            <i class="bi bi-person-workspace"></i>
                            <span>Profil Sekolah</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                         <a href="{{ route('admin.guru') }}" class="sidebar-menu-link">
                            <i class="bi bi-person-workspace"></i>
                            <span>Kelola Guru</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                         <a href="{{ route('admin.siswa') }}" class="sidebar-menu-link">
                            <i class="bi bi-people-fill"></i>
                            <span>Kelola Siswa</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="{{ route('admin.berita') }}" class="sidebar-menu-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Kelola Berita</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                         <a href="{{ route('admin.ekstrakulikuler') }}" class="sidebar-menu-link">
                            <i class="bi bi-collection-fill"></i>
                            <span>Kelola Ekstrakulikuler</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                         <a href="{{ route('admin.galeri') }}" class="sidebar-menu-link">
                            <i class="bi bi-image"></i>
                            <span>Kelola Galeri</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-wrapper">

        <!-- START: Top Navbar Component -->
        <header class="navbar-custom">
            <div class="navbar-left">
                <!-- Desktop sidebar toggle (visible on large screens only) -->
                <button class="btn-desktop-toggle d-none d-xl-flex align-items-center justify-content-center me-3"
                    id="desktop-sidebar-toggle" aria-label="Minimize Sidebar">
                    <i class="bi bi-chevron-bar-left"></i>
                </button>
                <!-- Mobile sidebar toggle -->
                <button class="sidebar-toggle-btn me-2" id="sidebar-toggle" aria-label="Toggle Navigation">
                    <i class="bi bi-list"></i>
                </button>
            </div>
            <div class="navbar-search-wrapper">
                     <input type="text" class="navbar-search-input" placeholder="Search anything in Spark..."
                     id="main-search">
                     <button class="navbar-search-btn" aria-label="Search">
                     <i class="bi bi-search"></i>
                </button>
            </div>

            <!-- Right actions -->
            <div class="navbar-actions">
                <!-- Fullscreen Toggle -->
                <button class="navbar-action-btn me-1" aria-label="Toggle Fullscreen" id="btn-fullscreen">
                    <i class="bi bi-arrows-fullscreen"></i>
                </button>
                <div class="dropdown">
                    <button class="navbar-action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" id="btn-notifications" data-bs-auto-close="outside">
                        <i class="bi bi-bell"></i>
                        <span class="navbar-action-badge"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-notification p-0"
                        aria-labelledby="btn-notifications">
                        <div class="notification-header">
                            <h6 class="notification-title">Notifications</h6>
                            <button class="btn-clear-all" type="button">Mark all read</button>
                        </div>
                        <div class="notification-list">
                            <!-- Sale Notification -->
                            <a href="#" class="notification-item">
                                <div class="notification-icon bg-success text-white">
                                    <i class="bi bi-wallet2"></i>
                                </div>

                                <span class="notification-unread-dot"></span>
                            </a>
                            <!-- User Registration Notification -->
                            <a href="#" class="notification-item">
                                <div class="notification-icon bg-primary text-white">
                                    <i class="bi bi-person-plus-fill"></i>
                                </div>
                                <div class="notification-content">
                                    <p class="notification-text">New user registered: <strong>John Doe</strong></p>
                                    <span class="notification-time">1 hour ago</span>
                                </div>
                                <span class="notification-unread-dot"></span>
                            </a>
                            <!-- Low Stock Notification -->
                            <a href="#" class="notification-item">
                                <div class="notification-icon bg-warning text-dark">
                                    <i class="bi bi-box-seam-fill"></i>
                                </div>
                                <div class="notification-content">
                                    <p class="notification-text">Stock running low: <strong>Hoodie</strong></p>
                                    <span class="notification-time">3 hours ago</span>
                                </div>
                            </a>
                        </div>
                        <a href="#" class="notification-footer">View All Notifications</a>
                    </div>
                </div>


                <div class="dropdown ms-2">
                    <button class="navbar-profile-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" id="profile-dropdown">
                             <img src="{{ asset('assets/images/sakola.png') }}"
                             style="width: 50px; height: 50px; object-fit: contain; margin-bottom: 5px;">
                        <span class="navbar-profile-name d-none d-md-inline">Administrator</span>
                        <i class="bi bi-chevron-down navbar-profile-caret"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-profile"
                        aria-labelledby="profile-dropdown">

                        <li><a class="dropdown-item text-danger" href="page-login.html"><i
                                    class="bi bi-box-arrow-right"></i>
                                Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>


        <div class="row g-4">
          @yield('content')
        </div>

    </div>
    <!-- END: Main Layout Grid -->
        </div>

    <!-- ==========================================
         END: Main Content Area
         ========================================== -->

    <!-- Local Third-Party Libraries Script dependencies -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>

    <!-- Local dashboard interactions controller -->
    <script src="{{ asset('assets/css/dashboard.js') }}"></script>
</body>

</html>
