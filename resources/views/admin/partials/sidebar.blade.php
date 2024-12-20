    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="../dashboard/index.html" class="b-brand text-primary">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="{{ asset('admin-assets') }}/images/logo-dark.svg" alt="logo image" class="logo-lg" />
                    {{-- <span class="badge bg-brand-color-2 rounded-pill ms-2 theme-version">v1.0</span> --}}
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>Navigation</label>
                    </li>
                    <!--********************************DASHBOARD********************************-->
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-house"></i>
                                {{-- <i class="fas fa-home"></i> --}}
                            </span>
                            <span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>
                    <!--**************************************************************************-->


                    <!--*********************************NETWORK*********************************-->
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-share-network"></i>
                            </span>
                            <span class="pc-mtext">Network</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="#">User</a></li>
                            <li class="pc-item"><a class="pc-link" href="#">NetWork</a></li>
                            <li class="pc-item"><a class="pc-link" href="#">NetWork Shift</a></li>
                        </ul>
                    </li>
                    <!--**************************************************************************-->

                    <!--*********************************RANKS*********************************-->
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-medal"></i>
                            </span>
                            <span class="pc-mtext">Ranks</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="#">Rank</a></li>
                            <li class="pc-item"><a class="pc-link" href="#">Target</a></li>
                        </ul>
                    </li>
                    <!--***********************************************************************-->

                    <!--********************************WALLET********************************-->
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-wallet"></i>
                            </span>
                            <span class="pc-mtext">Wallet</span>
                        </a>
                    </li>
                    <!--**********************************************************************-->

                    <!--*********************************CATALOG*******************************-->
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-books"></i>
                            </span>
                            <span class="pc-mtext">Catalog</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="#">Packages</a></li>
                        </ul>
                    </li>
                    <!--***********************************************************************-->

                    <!--*********************************COURSE*******************************-->
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-play-circle"></i>
                            </span>
                            <span class="pc-mtext">Course</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="#">Category</a></li>
                            <li class="pc-item"><a class="pc-link" href="#">Course</a></li>
                        </ul>
                    </li>
                    <!--***********************************************************************-->

                    <!--*********************************SUPPORT*******************************-->
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-headset"></i>
                            </span>
                            <span class="pc-mtext">Support</span>
                        </a>
                    </li>
                    <!--***********************************************************************-->

                </ul>

            </div>
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('admin-assets') }}/images/user/avatar-1.jpg" alt="user-image"
                                class="user-avtar wid-45 rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="dropdown">
                                <a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-offset="0,20">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 me-2">
                                            <h6 class="mb-0">Jonh Smith</h6>
                                            <small>Administrator</small>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="btn btn-icon btn-link-secondary avtar">
                                                <i class="ph-duotone ph-windows-logo"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->
