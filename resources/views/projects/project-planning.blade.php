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
	<title>Project Planning | PM Alimo C&T </title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/logo_alimo.png">
    <!-- Daterange picker -->
    <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">

    <!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
	<link href="../icon.css?family=Material+Icons" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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

            {{-- --- Content Body Start --- --}}
            <div class="content-body">
                <div class="container-fluid">

                    <div class="row page-titles">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Projects</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Project Planning</a></li>
                        </ol>
                    </div>
                    <!-- row -->
                    <div class="col-xl-3">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pick-Date picker</h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-1">Default picker</p>
                                <input name="datepicker" class="datepicker-default form-control" id="datepicker">
                            </div>
                        </div>
                        <!-- Card -->
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List Project Assignment</h4>
                            </div>

                            {{-- Table Project Initiatives --}}
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 10px;;"></th>
                                                <th style="width: 100px;">Project Code</th>
                                                <th style="min-width: 200px;">Name Project</th>
                                                <th style="min-width: 150px;">Project Category</th>
                                                <th style="min-width: 80px;">Status</th>
                                                <th style="min-width: 70px;">Priority</th>
                                                <th style="min-width: 70px;">Assignment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($initiatives as $key=>$i )
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td class="project_code">{{ $i->project_code }}</td>
                                                    <td class="name_project">{{ $i->name_project }}</td>
                                                    <td class="project_category">{{ $i->project_category }}</td>
                                                    <td>
                                                        @if ($i->status == 'Pending')
                                                            <span>
                                                                <i class="fa fa-circle text-warning me-1"></i>
                                                                {{ $i->status }}
                                                            </span>
                                                        @elseif ($i->status == 'On Progress')
                                                            <span>
                                                                <i class="fa fa-circle text-primary me-1"></i>
                                                                {{ $i->status }}
                                                            </span>
                                                        @elseif ($i->status == 'Successfull')
                                                            <span>
                                                                <i class="fa fa-circle text-success me-1"></i>
                                                                {{ $i->status }}
                                                            </span>
                                                        @elseif ($i->status == 'Canceled')
                                                            <span>
                                                                <i class="fa fa-circle text-danger me-1"></i>
                                                                {{ $i->status }}
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td class="priority">{{ $i->priority }}</td>
                                                    <td>
                                                        @if ($i->assignment == 'Accept')
                                                            <span class="badge badge-pill badge-success">
                                                                <i class="fa fa-check me-1"></i>
                                                                {{ $i->assignment }}
                                                            </span>
                                                        @elseif ($i->assignment == 'Dissmiss')
                                                            <span class="badge badge-pill badge-danger">
                                                                <i class="fa fa-ban me-1"></i>
                                                                {{ $i->assignment }}
                                                            </span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Datatable Project Planning</h4>
                                    {{-- <a href="{{ route('initiatives.create') }}" class="btn btn-md btn-primary float-right">+ Add Project Initiatives</a> --}}
                                    <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#tambah-planning">
                                        + Add Project Planning
                                    </button>
                                </div>

                                {{-- Table Project Initiatives --}}
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example4" class="display">
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 10px;;">#</th>
                                                    <th style="min-width: 85px">Project Code</th>
                                                    <th style="min-width: 150px;">Name Project</th>
                                                    {{-- <th style="min-width: 150px;">Project Category</th> --}}
                                                    {{-- <th style="min-width: 50px;">Year</th> --}}
                                                    {{-- <th style="min-width: 200px;">Client</th> --}}
                                                    {{-- <th style="min-width: 150px;">Division</th> --}}
                                                    <th style="min-width: 100px;">PIC</th>
                                                    <th style="min-width: 70px;">Status</th>
                                                    {{-- <th style="min-width: 80px;">Progress</th> --}}
                                                    <th style="min-width: 85px;">Start Date</th>
                                                    <th style="min-width: 85px;">Due Date</th>
                                                    {{-- <th style="width: 500px;">Assignment</th> --}}
                                                    <th style="min-width: 70px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($planning as $key=>$plan )
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td class="initiatives_id">{{ $plan->initiatives->project_code }}</td>
                                                        <td class="initiatives_id">{{ $plan->initiatives->name_project }}</td>
                                                        {{-- <td class="initiatives_id">{{ $plan->initiatives->project_category }}</td> --}}
                                                        {{-- <td class="initiatives_id">{{ $plan->initiatives->year }}</td> --}}
                                                        {{-- <td class="initiatives_id">{{ $plan->initiatives->client }}</td> --}}
                                                        {{-- <td class="division">{{ $plan->division }}</td> --}}
                                                        <td class="pic">{{ $plan->pic }}</td>
                                                        <td>
                                                            @if ($plan->initiatives->status == 'Pending')
                                                                <span class="badge badge-pill badge-warning">
                                                                    <i class="fa fa-stream me-1"></i>
                                                                    {{ $plan->initiatives->status }}
                                                                </span>
                                                            @elseif ($plan->initiatives->status == 'On Progress')
                                                                <span class="badge badge-pill badge-primary">
                                                                    <i class="fa fa-redo me-1"></i>
                                                                    {{ $plan->initiatives->status }}
                                                                </span>
                                                            @elseif ($plan->initiatives->status == 'Successfull')
                                                                <span class="badge badge-pill badge-success">
                                                                    <i class="fa fa-check me-1"></i>
                                                                    {{ $plan->initiatives->status }}
                                                                </span>
                                                            @elseif ($plan->initiatives->status == 'Cancel')
                                                                <span class="badge badge-pill badge-danger">
                                                                    <i class="fa fa-ban me-1"></i>
                                                                    {{ $plan->initiatives->status }}
                                                                </span>
                                                            @endif
                                                        </td>
                                                        {{-- <td>
                                                            <h6>
                                                                <span class="pull-end">{{ $plan->progress }}%</span>
                                                            </h6>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-info progress-animated" style="width: {{ $plan->progress }}%;" role="progressbar">
                                                                    <span class="sr-only">{{ $plan->progress }}% Complete</span>
                                                                </div>
                                                            </div>
                                                        </td> --}}
                                                        <td class="star_date">{{ $plan->start_date }}</td>
                                                        <td class="due_date">{{ $plan->due_date }}</td>
                                                        {{-- <td class="progress">{{ $plan->progress }}</td> --}}
                                                        <td>
                                                            <form onsubmit="return confirm('Are you sure ?');"
                                                                action="#" method="POST">
                                                                <a href="#"
                                                                    class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                                <button type="button" class="btn btn-warning shadow btn-xs sharp me-1 details-planning" data-bs-toggle="modal" data-bs-target="#details-initiatives">
                                                                    <i class="fas fa-eye"></i>
                                                                </button>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Tambah data --}}
                        <div id="tambah-planning" class="modal custonm-modal fade" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">ADD PROJECT PLANNING</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- FORM --}}
                                        <form action="{{ route('planning.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="initiatives_id">Initiatives ID <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('initiatives_id') is-invalid @enderror"
                                                    name="initiatives_id" value="{{ old('initiatives_id') }}" placeholder="Initiatives ID"required>
                                                <!-- error message untuk title -->
                                                @error('initiatives_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-3">
                                                <label class="col-form-group" for="division">Division <span class="text-danger">*</span></label>
                                                <select class="select form-control @error('division') is-invalid @enderror"
                                                name="division" value="{{ old('division') }}" required>
                                                    <option selected disabled>-- Selected --</option>
                                                    <option value="Web Developer">Web Developer</option>
                                                    <option value="UI/UX Developer">UI/UX Developer</option>
                                                    <option value="IT Support">IT Support</option>
                                                    <option value="Project Manager Officer">Project Manager Officer</option>
                                                    <option value="Branding and Communication">Branding and Communication</option>
                                                    <option value="Graphic Designer">Graphic Designer</option>
                                                    <option value="Video Designer">Video Designer</option>
                                                    <option value="Bussiness Analythic">Bussiness Analythic</option>
                                                </select>
                                                <!-- error message untuk title -->
                                                @error('division')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-3">
                                                <label for="pic">PIC <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('pic') is-invalid @enderror"
                                                    name="pic" value="{{ old('pic') }}" placeholder="PIC Project"required>
                                                <!-- error message untuk title -->
                                                @error('pic')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-3">
                                                <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                                <input type="text" class="datepicker-default form-control @error('start_date') is-invalid @enderror"
                                                    name="start_date" value="{{ old('start_date') }}" placeholder="Start Date Project"required>
                                                <!-- error message untuk title -->
                                                @error('start_date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-3">
                                                <label for="due_date">Due Date <span class="text-danger">*</span></label>
                                                <input type="text" class="datepicker-default form-control @error('due_date') is-invalid @enderror"
                                                    name="due_date" value="{{ old('due_date') }}" placeholder="Due Date Project"required>
                                                <!-- error message untuk title -->
                                                @error('due_date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div hidden class="form-group mt-3">
                                                <label for="progress">Progress <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control @error('progress') is-invalid @enderror"
                                                    name="progress" value="{{ old('progress') }}" placeholder="Progress Project"readonly>
                                                <!-- error message untuk title -->
                                                @error('progress')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="modal-footer">
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-md btn-success">Submit</button>
                                                    {{-- <a href="{{ route('initiatives.index') }}" class="btn btn-md btn-secondary">Back</a> --}}
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            {{-- --- Content Body End --- --}}

            @include('template.footer')
        </div>
    {{-- Main wrapper end --}}

    {{------- Start Scripts ------}}
        <!-- FAVICONS ICON -->
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">
        <!-- Datatable -->
        <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- Custom Stylesheet -->
        <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- Required vendors -->
        <script src="vendor/global/global.min.js"></script>
        <script src="vendor/chart.js/Chart.bundle.min.js"></script>
        <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script> <!-- ??? -->
        <!-- Apex Chart -->
        <script src="vendor/apexchart/apexchart.js"></script>
        <script src="vendor/chart.js/Chart.bundle.min.js"></script> <!-- ??? -->
        <!-- Chart piety plugin files -->
        <script src="vendor/peity/jquery.peity.min.js"></script>
        <!-- Datatable -->
        <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="js/plugins-init/datatables.init.js"></script>
        <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/dlabnav-init.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/styleSwitcher.js"></script>
        <!-- pickdate -->
        <script src="vendor/pickadate/picker.js"></script>
        <script src="vendor/pickadate/picker.time.js"></script>
        <script src="vendor/pickadate/picker.date.js"></script>
        <!-- Pickdate -->
        <script src="js/plugins-init/pickadate-init.js"></script>

        <!-- Dashboard 1 -->
        <script src="js/dashboard/dashboard-1.js"></script>
        <script src="vendor/owl-carousel/owl.carousel.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/dlabnav-init.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/styleSwitcher.js"></script>
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

</body>
</html>
