<!--**********************************
    Nav header start
***********************************-->
    <div class="nav-header">
        <a href="{{ url('/') }}" class="brand-logo">
            <div class="logo-image-small">
                <img class="logo-abbr" src="https://i.ibb.co/tMVHQGM/logo-alimo.png" width="65" height="45" viewbox="55 55 55 55" fill="none">
            </div>
            <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                </defs>
            </svg>
            <div class="brand-title" style="margin-left: -30px;">
                <h2 class="">Alimo</h2>
                <span class="brand-sub-title">Project Management</span>
            </div>
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header border-bottom">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Project Management
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item d-flex align-items-center">
                        <div class="input-group search-area">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                        </div>
                    </li>

                    <li class="nav-item dropdown  header-profile">
                        <h4 style="margin-right: 10px; margin-top: 10px">{{ Auth::user()->name }}</h4>
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="https://i.ibb.co/6Rzjtpx/default-avatar.png" width="56" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="{{ url('/profile') }}" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ms-2">Profile </span>
                            </a>
                            <a href="{{ url('/setting') }}" class="dropdown-item ai-icon">
                                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-dark" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span class="ms-2">Settings </span>
                            </a>
                            <a href="{{ url('/login') }}" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ms-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
Header end ti-comment-alt
***********************************-->

