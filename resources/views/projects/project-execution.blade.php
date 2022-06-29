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
	<title>Project Execution | PM Alimo C&T </title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/logo_alimo.png">
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

	<!-- Style css -->
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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Project Execution</a></li>
                        </ol>
                    </div>
                    <!-- row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Datatable Project Execution</h4>
                                </div>

                                {{-- Table Project Execution --}}
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
                                                    {{-- <th style="min-width: 70px;">Status</th> --}}
                                                    <th style="min-width: 80px;">Progress</th>
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
                                                        {{-- <td>
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
                                                        </td> --}}
                                                        <td>
                                                            {{-- <span>
                                                                <progress id="progress" value="{{ $plan->progress }}" max="100">{{ $plan->progress }}</progress>
                                                            </span> --}}
                                                            <h6>
                                                                <span class="pull-end">{{ $plan->progress }}%</span>
                                                            </h6>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-info progress-animated" style="width: {{ $plan->progress }}%;" role="progressbar">
                                                                    <span class="sr-only">{{ $plan->progress }}% Complete</span>
                                                                </div>
                                                            </div>
                                                        </td>
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

                        {{-- Edit data --}}

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
