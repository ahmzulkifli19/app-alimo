@if(Auth::user()->role==1)
@else`
<script>
    alert("You can't access this page.")
    window.location.href = "{{ url('/') }}";
</script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Edit Project Assignment | PM Alimo C&T </title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="../../images/logo_alimo.png">
	<link href="../../vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="../../vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="../../vendor/nouislider/nouislider.min.css">

	<!-- Style css -->
    <link href="../../css/style.css" rel="stylesheet">

</head>

<body>
    {{-- Preloader start --}}
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    {{-- Preloader End --}}

    {{-- Main wrapper start --}}
        <div id="main-wrapper">
            @include('template.navbar')
            @include('template.sidebar')
            {{-- --- Content Body End --- --}}

            <div class="content-body">
                <div class="container-fluid">
                    <div class="row page-titles">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="../../javascript:void(0)">Project Assignment</a></li>
                            <li class="breadcrumb-item"><a href="../../javascript:void(0)">Edit</a></li>
                        </ol>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Project Assignment</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <!-- Notifikasi menggunakan flash session data -->
                                        @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                        @endif

                                        @if (session('error'))
                                            <div class="alert alert-error">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        <form action="{{ route('assignment.update', $assignment->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="project_code">Project Code <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('project_code') is-invalid @enderror" name="project_code"
                                                        value="{{ old('project_code', $assignment->project_code) }}" disabled>
                                                    <!-- error message untuk title -->
                                                    @error('project_code')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="name_project">Name Project <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('name_project') is-invalid @enderror" name="name_project"
                                                        value="{{ old('name_project', $assignment->name_project) }}" disabled>
                                                    <!-- error message untuk title -->
                                                    @error('name_project')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="col-form-group" for="project_category">Project Category <span class="text-danger">*</span></label>
                                                    <select class="select form-control @error('project_category') is-invalid @enderror"
                                                    id="d_project_category" name="project_category" value="{{ old('project_category') }}" disabled>
                                                        <option selected disabled>-- Selected --</option>
                                                        <option value="Web Development">WEB - Web Development</option>
                                                        <option value="Web Designer">WDG - Web Designer</option>
                                                        <option value="IT Helpdesk">ITH - IT Helpdesk</option>
                                                        <option value="Network Service">NSC - Network Service</option>
                                                        <option value="Manage Campaign">MGC - Manage Campaign</option>
                                                        <option value="Content Social Media">CSM - Content Social Media</option>
                                                        <option value="Graphic Designer">GDG - Graphic Designer</option>
                                                        <option value="Video Designer">VDG - Video Designer</option>
                                                        <option value="Motion Graphic">MTG - Motion Graphic</option>
                                                        <option value="Bussiness Analythic">BSA- Bussiness Analythic</option>
                                                    </select>
                                                    <!-- error message untuk title -->
                                                    @error('project_category')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="col-form-group" for="year">Year <span class="text-danger">*</span></label>
                                                    <select class="select form-control @error('year') is-invalid @enderror"
                                                    id="d_year" name="year" value="{{ old('year', $assignment->year) }}" disabled>
                                                        <option>--- Selected ---</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                    </select>
                                                    <!-- error message untuk title -->
                                                    @error('year')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="col-form-group" for="priority">Priority <span class="text-danger">*</span></label>
                                                    <select class="select form-control @error('priority') is-invalid @enderror"
                                                    id="d_priority" name="priority" value="{{ old('priority', $assignment->priority) }}" disabled>
                                                        <option>--- Selected ---</option>
                                                        <option value="High">High</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="Low">Low</option>
                                                    </select>
                                                    <!-- error message untuk title -->
                                                    @error('priority')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="col-form-group" for="status">Status <span class="text-danger"> Edit here! *</span></label>
                                                    <select class="select form-control @error('status') is-invalid @enderror"
                                                    id="d_status" name="status" value="{{ old('status') }}" required>
                                                        <option selected disabled>-- Selected --</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="On Progress">On Progress</option>
                                                        <option value="Successful">Successful</option>
                                                        <option value="Canceled">Canceled</option>
                                                    </select>
                                                    <!-- error message untuk title -->
                                                    @error('status')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="client">Client <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('client') is-invalid @enderror"
                                                        name="client" value="{{ old('client', $assignment->client) }}" disabled>
                                                    <!-- error message untuk title -->
                                                    @error('client')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="email">Email <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email', $assignment->email) }}" disabled>
                                                    <!-- error message untuk title -->
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="description">Description <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('description') is-invalid @enderror"
                                                        name="description" value="{{ old('description', $assignment->description) }}" disabled>
                                                    <!-- error message untuk title -->
                                                    @error('description')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="col-form-group" for="assignment">Assignment <span class="text-danger"> Edit here! *</span></label>
                                                    <select class="select form-control @error('assignment') is-invalid @enderror"
                                                    id="d_assignment" name="assignment" value="{{ old('assignment', $assignment->assignment) }}" required>
                                                        <option>--- Selected ---</option>
                                                        <option value="Accept" {{ $assignment->assignment }}>Accept</option>
                                                        <option value="Dissmiss" {{ $assignment->assignment }}>Dissmiss</option>
                                                    </select>
                                                    <!-- error message untuk title -->
                                                    @error('assignment')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <a href="{{ route('assignment.index') }}" class="btn btn-secondary">Back</a>
                                            </div>
                                            {{-- <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="{{ route('assignment.index') }}" class="btn btn-secondary">Back</a> --}}
                                            {{-- <button type="submit" class="btn btn-md btn-primary">Update</button> --}}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('template.footer')
        </div>
    {{-- Main wrapper end --}}

    {{------- Start Scripts ------}}
        <!-- FAVICONS ICON -->
        <link rel="shortcut icon" type="image/png" href="../../../images/favicon.png">
        <!-- Datatable -->
        <link href="../../vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- Custom Stylesheet -->
        <link href="../../vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
        <link href="../../css/style.css" rel="stylesheet">
        <!-- Required vendors -->
        <script src="../../vendor/global/global.min.js"></script>
        <script src="../../vendor/chart.js/Chart.bundle.min.js"></script>
        <script src="../../vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script> <!-- ??? -->
        <!-- Apex Chart -->
        <script src="../../vendor/apexchart/apexchart.js"></script>
        <script src="../../vendor/chart.js/Chart.bundle.min.js"></script> <!-- ??? -->
        <!-- Chart piety plugin files -->
        <script src="../../vendor/peity/jquery.peity.min.js"></script>
        <!-- Datatable -->
        <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../../js/plugins-init/datatables.init.js"></script>
        <script src="../../vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
        <script src="../../js/custom.min.js"></script>
        <script src="../../js/dlabnav-init.js"></script>
        <script src="../../js/demo.js"></script>
        <script src="../../js/styleSwitcher.js"></script>

        <!-- Dashboard 1 -->
        <script src="../../js/dashboard/dashboard-1.js"></script>
        <script src="../../vendor/owl-carousel/owl.carousel.js"></script>
        <script src="../../js/custom.min.js"></script>
        <script src="../../js/dlabnav-init.js"></script>
        <script src="../../js/demo.js"></script>
        <script src="../../js/styleSwitcher.js"></script>
        <script>
            function cardsCenter()
            {
                jQuery('.card-slider').owlCarousel({
                    loop:true,
                    margin:0,
                    nav:true,
                    //center:true,
                    slideSpeed: 3000,
                    paginationSpeed: 3000,
                    dots: true,
                    navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                    responsive:{
                        0:{
                            items:1
                        },
                        576:{
                            items:1
                        },
                        800:{
                            items:1
                        },
                        991:{
                            items:1
                        },
                        1200:{
                            items:1
                        },
                        1600:{
                            items:1
                        }
                    }
                })
            }

            jQuery(window).on('load',function(){
                setTimeout(function(){
                    cardsCenter();
                }, 1000);
            });
        </script>
    {{------- End Scripts ------}}

    {{-- details view --}}
    <script>
        var project_category = '{{ old('project_category', $assignment->project_category) }}';
        var _option = '<option selected value="' +project_category+ '">' + project_category + '</option>'
        $( _option).appendTo("#d_project_category");

        var year = '{{ old('year', $assignment->year) }}';
        var _option = '<option selected value="' +year+ '">' + year + '</option>'
        $( _option).appendTo("#d_year");

        var priority = '{{ old('priority', $assignment->priority) }}';
        var _option = '<option selected value="' +priority+ '">' + priority + '</option>'
        $( _option).appendTo("#d_priority");

        var status = '{{ old('status', $assignment->status) }}';
        var _option = '<option selected value="' +status+ '">' + status + '</option>'
        $( _option).appendTo("#d_status");

        var assignment = '{{ old('assignment', $assignment->assignment) }}';
        var _option = '<option selected value="' +assignment+ '">' + assignment + '</option>'
        $( _option).appendTo("#d_assignment");
    </script>

</body>
</html>
