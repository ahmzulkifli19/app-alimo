@extends('template.layout')

@section('content')
    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Projects</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">All Projects</a></li>
                </ol>
            </div>

            <div class="project-page d-flex justify-content-between align-items-center flex-wrap">
                <div class="project mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#AllStatus" role="tab">All Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#OnProgress" role="tab">On Progress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Pending" role="tab">Pending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Closed" role="tab">Closed</a>
                        </li>
                    </ul>
                </div>
                <div class="mb-4">
                    <a href="javascript:void(0);" class="btn btn-primary btn-rounded fs-18">+ New Project</a>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="AllStatus">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3  col-lg-6 col-sm-12 align-items-center customers">
                                            <div class="media-body">
                                                <span class="text-primary d-block fs-18 font-w500 mb-1">#P-000441425</span>
                                                <h3 class="fs-18 text-black font-w600">Redesign Owlio Landing Page Web..</h3>
                                                <span class="d-block mb-lg-0 mb-0 fs-16"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-3 col-sm-4  col-6 mb-3">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/11.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Client</small>
                                                    <span class="fs-18 font-w500">James Jr.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-3 text-lg-center">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/22.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Person in charge</small>
                                                    <span class="fs-18 font-w500">Marley Dokidis</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3  col-lg-6 col-sm-6 mb-sm-4 mb-0">
                                            <div class="d-flex project-image">
                                                <svg class="me-3" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
                                                    <g clip-path="url(#clip0)">
                                                    <path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
                                                    </g>
                                                    <defs>
                                                    <clippath>
                                                    <rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
                                                    </clippath>
                                                    </defs>
                                                </svg>
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Deadline</small>
                                                    <span class="fs-18 font-w500">Tuesday,  Sep 29th 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-6 col-sm-4 mb-sm-3 mb-3 text-end">
                                            <div class="d-flex justify-content-end project-btn">
                                                <a href="javascript:void(0);" class=" btn bgl-warning text-warning fs-18 font-w600">PENDING</a>
                                                <div class="dropdown ms-4  mt-auto mb-auto">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3  col-lg-6 col-sm-12 align-items-center customers">
                                            <div class="media-body">
                                                <span class="text-primary d-block fs-18 font-w500 mb-1">#P-000441425</span>
                                                <h3 class="fs-18 text-black font-w600">Create UseCase Diagram of Fillow..</h3>
                                                <span class="d-block mb-lg-0 mb-0 fs-16"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-3 col-sm-4  col-6 mb-3">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/44.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Client</small>
                                                    <span class="fs-18 font-w500">Jakob Vetrovs</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-3 text-lg-center">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/33.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Person in charge</small>
                                                    <span class="fs-18 font-w500">Marley Dokidis</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3  col-lg-6 col-sm-6 mb-sm-4 mb-0">
                                            <div class="d-flex project-image">
                                                <svg class="me-3" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
                                                    <g clip-path="url(#clip0)">
                                                    <path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
                                                    </g>
                                                    <defs>
                                                    <clippath>
                                                    <rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
                                                    </clippath>
                                                    </defs>
                                                </svg>
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Deadline</small>
                                                    <span class="fs-18 font-w500">Tuesday,  Sep 29th 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-6 col-sm-4 mb-sm-3 mb-3 text-end">
                                            <div class="d-flex justify-content-end project-btn">
                                                <a href="javascript:void(0);" class=" btn bg-progress fs-18 font-w600 text-nowrap text-bg-progress">ON PROGRESS</a>
                                                <div class="dropdown ms-4  mt-auto mb-auto">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3  col-lg-6 col-sm-12 align-items-center customers">
                                            <div class="media-body">
                                                <span class="text-primary d-block fs-18 font-w500 mb-1">#P-000441425</span>
                                                <h3 class="fs-18 text-black font-w600">Create UseCase Diagram of Fillow..</h3>
                                                <span class="d-block mb-lg-0 mb-0 fs-16"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-3 col-sm-4  col-6 mb-3">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/44.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Client</small>
                                                    <span class="fs-18 font-w500">Jakob Vetrovs</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-3 text-lg-center">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/55.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Person in charge</small>
                                                    <span class="fs-18 font-w500">Marley Dokidis</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3  col-lg-6 col-sm-6 mb-sm-4 mb-0">
                                            <div class="d-flex project-image">
                                                <svg class="me-3" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
                                                    <g clip-path="url(#clip0)">
                                                    <path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
                                                    </g>
                                                    <defs>
                                                    <clippath>
                                                    <rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
                                                    </clippath>
                                                    </defs>
                                                </svg>
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Deadline</small>
                                                    <span class="fs-18 font-w500">Tuesday,  Sep 29th 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-6 col-sm-4 mb-sm-3 mb-3 text-end">
                                            <div class="d-flex justify-content-end project-btn">
                                                <a href="javascript:void(0);" class=" btn bgl-success fs-18 font-w600 text-nowrap text-success">CLOSED</a>
                                                <div class="dropdown ms-4  mt-auto mb-auto">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3  col-lg-6 col-sm-12 align-items-center customers">
                                            <div class="media-body">
                                                <span class="text-primary d-block fs-18 font-w500 mb-1">#P-000441425</span>
                                                <h3 class="fs-18 text-black font-w600">Create UseCase Diagram of Fillow..</h3>
                                                <span class="d-block mb-lg-0 mb-0 fs-16"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-3 col-sm-4  col-6 mb-3">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/44.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Client</small>
                                                    <span class="fs-18 font-w500">Jakob Vetrovs</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-3 text-lg-center">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/55.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Person in charge</small>
                                                    <span class="fs-18 font-w500">Marley Dokidis</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3  col-lg-6 col-sm-6 mb-sm-4 mb-0">
                                            <div class="d-flex project-image">
                                                <svg class="me-3" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
                                                    <g clip-path="url(#clip0)">
                                                    <path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
                                                    </g>
                                                    <defs>
                                                    <clippath>
                                                    <rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
                                                    </clippath>
                                                    </defs>
                                                </svg>
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Deadline</small>
                                                    <span class="fs-18 font-w500">Tuesday,  Sep 29th 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-6 col-sm-4 mb-sm-3 mb-3 text-end">
                                            <div class="d-flex justify-content-end project-btn">
                                                <a href="javascript:void(0);" class=" btn bgl-warning text-warning fs-18 font-w600">PENDING</a>
                                                <div class="dropdown ms-4  mt-auto mb-auto">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3  col-lg-6 col-sm-12 align-items-center customers">
                                            <div class="media-body">
                                                <span class="text-primary d-block fs-18 font-w500 mb-1">#P-000441425</span>
                                                <h3 class="fs-18 text-black font-w600">Create UseCase Diagram of Fillow..</h3>
                                                <span class="d-block mb-lg-0 mb-0 fs-16"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-3 col-sm-4  col-6 mb-3">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/44.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Client</small>
                                                    <span class="fs-18 font-w500">Jakob Vetrovs</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-3 text-lg-center">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/55.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Person in charge</small>
                                                    <span class="fs-18 font-w500">Marley Dokidis</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3  col-lg-6 col-sm-6 mb-sm-4 mb-0">
                                            <div class="d-flex project-image">
                                                <svg class="me-3" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
                                                    <g clip-path="url(#clip0)">
                                                    <path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
                                                    </g>
                                                    <defs>
                                                    <clippath>
                                                    <rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
                                                    </clippath>
                                                    </defs>
                                                </svg>
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Deadline</small>
                                                    <span class="fs-18 font-w500">Tuesday,  Sep 29th 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-6 col-sm-4 mb-sm-3 mb-3 text-end">
                                            <div class="d-flex justify-content-end project-btn">
                                                <a href="javascript:void(0);" class=" btn bg-progress fs-18 font-w600 text-nowrap text-bg-progress">ON PROGRESS</a>
                                                <div class="dropdown ms-4  mt-auto mb-auto">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="OnProgress">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3  col-lg-6 col-sm-12 align-items-center customers">
                                            <div class="media-body">
                                                <span class="text-primary d-block fs-18 font-w500 mb-1">#P-000441425</span>
                                                <h3 class="fs-18 text-black font-w600">Redesign Owlio Landing Page Web..</h3>
                                                <span class="d-block mb-lg-0 mb-0 fs-16"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-3 col-sm-4  col-6 mb-3">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/11.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Client</small>
                                                    <span class="fs-18 font-w500">James Jr.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-3 text-lg-center">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/22.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Person in charge</small>
                                                    <span class="fs-18 font-w500">Marley Dokidis</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3  col-lg-6 col-sm-6 mb-sm-4 mb-0">
                                            <div class="d-flex project-image">
                                                <svg class="me-3" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
                                                    <g clip-path="url(#clip0)">
                                                    <path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
                                                    </g>
                                                    <defs>
                                                    <clippath>
                                                    <rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
                                                    </clippath>
                                                    </defs>
                                                </svg>
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Deadline</small>
                                                    <span class="fs-18 font-w500">Tuesday,  Sep 29th 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-6 col-sm-4 mb-sm-3 mb-3 text-end">
                                            <div class="d-flex justify-content-end project-btn">
                                                <a href="javascript:void(0);" class=" btn bgl-warning text-warning fs-18 font-w600">PENDING</a>
                                                <div class="dropdown ms-4  mt-auto mb-auto">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Pending">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3  col-lg-6 col-sm-12 align-items-center customers">
                                            <div class="media-body">
                                                <span class="text-primary d-block fs-18 font-w500 mb-1">#P-000441425</span>
                                                <h3 class="fs-18 text-black font-w600">Redesign Owlio Landing Page Web..</h3>
                                                <span class="d-block mb-lg-0 mb-0 fs-16"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-3 col-sm-4  col-6 mb-3">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/11.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Client</small>
                                                    <span class="fs-18 font-w500">James Jr.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-3 text-lg-center">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/22.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Person in charge</small>
                                                    <span class="fs-18 font-w500">Marley Dokidis</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3  col-lg-6 col-sm-6 mb-sm-4 mb-0">
                                            <div class="d-flex project-image">
                                                <svg class="me-3" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
                                                    <g clip-path="url(#clip0)">
                                                    <path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
                                                    </g>
                                                    <defs>
                                                    <clippath>
                                                    <rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
                                                    </clippath>
                                                    </defs>
                                                </svg>
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Deadline</small>
                                                    <span class="fs-18 font-w500">Tuesday,  Sep 29th 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-6 col-sm-4 mb-sm-3 mb-3 text-end">
                                            <div class="d-flex justify-content-end project-btn">
                                                <a href="javascript:void(0);" class=" btn bgl-warning text-warning fs-18 font-w600">PENDING</a>
                                                <div class="dropdown ms-4  mt-auto mb-auto">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Closed">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3  col-lg-6 col-sm-12 align-items-center customers">
                                            <div class="media-body">
                                                <span class="text-primary d-block fs-18 font-w500 mb-1">#P-000441425</span>
                                                <h3 class="fs-18 text-black font-w600">Redesign Owlio Landing Page Web..</h3>
                                                <span class="d-block mb-lg-0 mb-0 fs-16"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-3 col-sm-4  col-6 mb-3">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/11.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Client</small>
                                                    <span class="fs-18 font-w500">James Jr.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-3 text-lg-center">
                                            <div class="d-flex project-image">
                                                <img src="images/customers/22.jpg" alt="">
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Person in charge</small>
                                                    <span class="fs-18 font-w500">Marley Dokidis</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3  col-lg-6 col-sm-6 mb-sm-4 mb-0">
                                            <div class="d-flex project-image">
                                                <svg class="me-3" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
                                                    <g clip-path="url(#clip0)">
                                                    <path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
                                                    </g>
                                                    <defs>
                                                    <clippath>
                                                    <rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
                                                    </clippath>
                                                    </defs>
                                                </svg>
                                                <div>
                                                    <small class="d-block fs-16 font-w400">Deadline</small>
                                                    <span class="fs-18 font-w500">Tuesday,  Sep 29th 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2  col-lg-6 col-sm-4 mb-sm-3 mb-3 text-end">
                                            <div class="d-flex justify-content-end project-btn">
                                                <a href="javascript:void(0);" class=" btn bgl-warning text-warning fs-18 font-w600">PENDING</a>
                                                <div class="dropdown ms-4  mt-auto mb-auto">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progect-pagination d-flex justify-content-between align-items-center flex-wrap">
                    <h4 class="mb-3">Showing 10 from 160 data</h4>
                    <ul class="pagination mb-3">
                        <li class="page-item page-indicator">
                            <a class="page-link" href="javascript:void(0)">
                                <i class="fas fa-angle-double-left me-2"></i>Previous</a>
                        </li>
                        <li class="page-item">
                            <a class=" active" href="javascript:void(0)">1</a>
                            <a class="" href="javascript:void(0)">2</a>
                            <a class="" href="javascript:void(0)">3</a>
                            <a class="" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item page-indicator">
                            <a class="page-link" href="javascript:void(0)">
                            Next<i class="fas fa-angle-double-right ms-2"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">

	<!-- Style css -->
	<link href="css/style.css" rel="stylesheet">

    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!-- Apex Chart -->
	<!-- Chart piety plugin files -->
	<!-- Dashboard 1 -->
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
@endsection
