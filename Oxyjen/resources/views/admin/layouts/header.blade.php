<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/../admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/../admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/../admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/../admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/../admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="/../admin/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/../admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/../admin/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <a href="">
                            <img src="/admin/logo1.png" alt="logo" width="130px" height="130px">
                        </a>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">






                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Components</span>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Slider</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/slider" class="menu-link">
                                    <div data-i18n="Without menu">Show Slider</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/slider-create" class="menu-link">
                                    <div data-i18n="Without navbar">Create Slider</div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!-- About us -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="Layouts">About US</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/about" class="menu-link">
                                    <div data-i18n="Without menu">Show About us </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/about-create" class="menu-link">
                                    <div data-i18n="Without navbar">Create About us</div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    {{-- Startups --}}
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Layouts">Startup Companies</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/startup" class="menu-link">
                                    <div data-i18n="Without menu">Show Startups </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="startup-create" class="menu-link">
                                    <div data-i18n="Without navbar">Create Startup</div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    {{-- Programs --}}
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="Layouts">Program</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/program" class="menu-link">
                                    <div data-i18n="Without menu">Show programs </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/program-create" class="menu-link">
                                    <div data-i18n="Without navbar">Create programs</div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Team Members</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/team" class="menu-link">
                                    <div data-i18n="Without menu">Show Members</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/team-create" class="menu-link">
                                    <div data-i18n="Without navbar">Create Members</div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Applications</span></li>
                    <!-- Cards -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Applications</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/StartupApply" class="menu-link">
                                    <div data-i18n="Without menu">Startups applications</div>
                                </a>
                            </li>

                        </ul>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/booking" class="menu-link">
                                    <div data-i18n="Without menu">Booking applications</div>
                                </a>
                            </li>

                        </ul>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/partener" class="menu-link">
                                    <div data-i18n="Without menu">Parteners applications</div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!-- User interface -->

                   <!-- Home -->
                   {{-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Home</span></li>
                   <!-- Cards -->
                   <li class="menu-item">
                       <a href="javascript:void(0);" class="menu-link menu-toggle">
                           <i class="menu-icon tf-icons bx bx-layout"></i>
                           <div data-i18n="Layouts">Home</div>
                       </a>

                       <ul class="menu-sub">
                           <li class="menu-item">
                               <a href="" class="menu-link">
                                   <div data-i18n="Without menu">Show Home</div>
                               </a>
                           </li>
                           <li class="menu-item">
                            <a href="" class="menu-link">
                                <div data-i18n="Without menu">Edit Home</div>
                            </a>
                        </li>

                       </ul>
                   </li> --}}
                   <!-- User interface -->

                    <!-- Extended components -->



                    <!-- Forms & Tables -->



                    <!-- Tables -->

                    <!-- Misc -->


                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->


                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="auth-login-basic.html">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
