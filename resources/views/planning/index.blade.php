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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Project Planning</a></li>
                        </ol>
                    </div>
                    <!-- row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Datatable Project Planning</h4>
                                    {{-- <a href="{{ route('initiatives.create') }}" class="btn btn-md btn-primary float-right">+ Add Project Initiatives</a> --}}
                                    <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#add-planning">
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
                                                    <th style="min-width: 200px;">Name Project</th>
                                                    <th style="min-width: 150px;">Project Category</th>
                                                    <th style="min-width: 50px;">Year</th>
                                                    <th style="min-width: 70px;">Status</th>
                                                    <th style="min-width: 200px;">Client</th>
                                                    <th style="min-width: 150px;">Division</th>
                                                    <th style="min-width: 200px;">PIC</th>
                                                    <th style="min-width: 100px;">Start Date</th>
                                                    <th style="min-width: 100px;">Due Date</th>
                                                    {{-- <th style="width: 500px;">Assignment</th> --}}
                                                    <th style="min-width: 50px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($planning as $key=>$plan )
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td class="initiatives_id">{{ $plan->initiatives->project_code }}</td>
                                                        <td class="initiatives_id">{{ $plan->initiatives->name_project }}</td>
                                                        <td class="initiatives_id">{{ $plan->initiatives->project_category }}</td>
                                                        <td class="initiatives_id">{{ $plan->initiatives->year }}</td>
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
                                                            @elseif ($i->status == 'Successful')
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
                                                        <td class="initiatives_id">{{ $plan->initiatives->client }}</td>
                                                        <td class="division">{{ $plan->division }}</td>
                                                        <td class="pic">{{ $plan->pic }}</td>
                                                        <td class="star_date">{{ $plan->start_date }}</td>
                                                        <td class="due_date">{{ $plan->due_date }}</td>
                                                        <td>
                                                            <form onsubmit="return confirm('Are you sure ?');"
                                                                action="#" method="POST">
                                                                <a href="#"
                                                                    class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
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

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Hover Table</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table header-border table-hover verticle-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Popularity</th>
                                                    <th scope="col">Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Air Conditioner</td>
                                                    <td>
                                                        <div class="progress" style="background: rgba(127, 99, 244, .1)">
                                                            <div class="progress-bar" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge badge-primary light">70%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Textiles</td>
                                                    <td>
                                                        <div class="progress" style="background: rgba(76, 175, 80, .1)">
                                                            <div class="progress-bar bg-success" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge badge-success">70%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Milk Powder</td>
                                                    <td>
                                                        <div class="progress" style="background: rgba(70, 74, 83, .1)">
                                                            <div class="progress-bar bg-dark" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge badge-dark light">70%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>4</th>
                                                    <td>Vehicles</td>
                                                    <td>
                                                        <div class="progress" style="background: rgba(255, 87, 34, .1)">
                                                            <div class="progress-bar bg-danger" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge badge-danger">70%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>5</th>
                                                    <td>Boats</td>
                                                    <td>
                                                        <div class="progress" style="background: rgba(255, 193, 7, .1)">
                                                            <div class="progress-bar bg-warning" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge badge-warning">70%</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
