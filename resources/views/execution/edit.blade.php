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
	<title>Edit Project Execution | PM Alimo C&T </title>

    <!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="../../images/logo_alimo.png">
    <!-- Daterange picker -->
    <link href="../../vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="../../vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="../../vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="../../vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">

    <!-- Pick date -->
    <link rel="stylesheet" href="../../vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="../../vendor/pickadate/themes/default.date.css">
	<link href="../../icon.css?family=Material+Icons" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="../../vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
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
                            <li class="breadcrumb-item active"><a href="../../javascript:void(0)">Project Execution</a></li>
                            <li class="breadcrumb-item"><a href="../../javascript:void(0)">Edit</a></li>
                        </ol>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Project Execution</h4>
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
                                        <form action="{{ route('execution.update', $execution->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="initiatives_id">Project Code <span class="text-danger">*</span></label>
                                                    <select class="select form-control @error('initiatives_id') is-invalid @enderror"
                                                    id="d_initiatives_id" name="initiatives_id" value="{{ old('initiatives_id') }}" disabled>
                                                        <option selected disabled>-- Selected --</option>
                                                        @foreach ($initiatives as $i)
                                                            <option value="{{ $i->project_code }}">{{ $i->project_code }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('initiatives_id')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="planning_id">PIC <span class="text-danger">*</span></label>
                                                    <select class="select form-control @error('planning_id') is-invalid @enderror"
                                                    id="d_planning_id" name="planning_id" value="{{ old('planning_id') }}" disabled>
                                                        <option selected disabled>-- Selected --</option>
                                                        @foreach ($planning as $plan)
                                                            <option value="{{ $plan->pic }}">{{ $plan->pic }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('planning_id')
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
                                                        <option value="Successfull">Successfull</option>
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
                                                    <label for="progress">Progress <span class="text-danger">Edit here! *</span></label>
                                                    <input type="number" class="form-control @error('progress') is-invalid @enderror"
                                                        name="progress" value="{{ old('progress', $execution->progress) }}" placeholder="Progress Project" required>
                                                    <!-- error message untuk title -->
                                                    @error('progress')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <a href="{{ route('execution.index') }}" class="btn btn-secondary">Back</a>
                                            </div>
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
        <link rel="shortcut icon" type="image/png" href="../../images/favicon.png">
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
        <!-- pickdate -->
        <script src="../../vendor/pickadate/picker.js"></script>
        <script src="../../vendor/pickadate/picker.time.js"></script>
        <script src="../../vendor/pickadate/picker.date.js"></script>
        <!-- Pickdate -->
        <script src="../../js/plugins-init/pickadate-init.js"></script>

        <!-- Dashboard 1 -->
        <script src="../../js/dashboard/dashboard-1.js"></script>
        <script src="../../vendor/owl-carousel/owl.carousel.js"></script>
        <script src="../../js/custom.min.js"></script>
        <script src="../../js/dlabnav-init.js"></script>
        <script src="../../js/demo.js"></script>
        <script src="../../js/styleSwitcher.js"></script>../../
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
        var initiatives_id = '{{ old('initiatives_id', $execution->initiatives->project_code) }}';
        var _option = '<option selected value="' +initiatives_id+ '">' + initiatives_id + '</option>'
        $( _option).appendTo("#d_initiatives_id");

        var planning_id = '{{ old('planning_id', $execution->planning->pic) }}';
        var _option = '<option selected value="' +planning_id+ '">' + planning_id + '</option>'
        $( _option).appendTo("#d_planning_id");

        var status = '{{ old('status', $execution->status) }}';
        var _option = '<option selected value="' +status+ '">' + status + '</option>'
        $( _option).appendTo("#d_status");
    </script>

</body>
</html>
