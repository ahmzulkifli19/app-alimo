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
	<title>Project Assignment | PM Alimo C&T </title>

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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Project Assignment</a></li>
                        </ol>
                    </div>
                    <!-- row -->

                    <div class="row">
                        {{-- Table list project initiatives --}}
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List Project Initiatives</h4>
                                    {{-- <a href="{{ route('initiatives.create') }}" class="btn btn-md btn-primary float-right">+ Add Project Initiatives</a> --}}
                                </div>

                                {{-- Table --}}
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display">
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 10px;"></th>
                                                    <th style="min-width: 100px;">Project Code</th>
                                                    <th style="min-width: 200px;">Name Project</th>
                                                    <th style="min-width: 150px;">Project Category</th>
                                                    <th style="min-width: 110px;">Status</th>
                                                    <th style="min-width: 70px;">Assignment</th>
                                                    <th style="min-width: 100px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($assignment as $key=>$i )
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
                                                        <td>
                                                            <form onsubmit="return confirm('Are you sure ?');"
                                                                action="{{ route('assignment.destroy', $i->id) }}" method="POST">
                                                                {{-- <button type="button" class="btn btn-primary shadow btn-xs sharp me-1 edit-assignment" data-bs-toggle="modal" data-bs-target="#edit-assignment">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </button> --}}
                                                                <a href="{{ route('assignment.edit', $i->id) }}"
                                                                    class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                                <a href="{{ route('assignment.detail', $i->id) }}"
                                                                    data-bs-toggle="modal" data-bs-target="#details-initiatives" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                                                </a>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                        {{-- Edit Project Assignment --}}
                        <div id="edit-assignment" class="modal custonm-modal fade" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">EDIT PROJECT INITIATIVES</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- FORM --}}
                                        <form id="e_form" action="" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="project_code">Project Code <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('project_code') is-invalid @enderror"
                                                id="e_project_code" name="project_code" value="{{ old('project_code') }}" placeholder="ACT.(Singkatan Kategori Project).(Nomor urut Project)"required>
                                                <!-- error message untuk title -->
                                                @error('project_code')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-3">
                                                <label for="name_project">Name Project <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('name_project') is-invalid @enderror"
                                                id="e_name_project" name="name_project" value="{{ old('name_project') }}" placeholder="Nama Project" required>
                                                <!-- error message untuk title -->
                                                @error('name_project')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-3">
                                                <label class="col-form-group" for="project_category">Project Category <span class="text-danger">*</span></label>
                                                <select class="select form-control @error('project_category') is-invalid @enderror"
                                                id="e_project_category" name="project_category" value="{{ old('project_category') }}" required>
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

                                            <div class="form-group mt-3">
                                                <label class="col-form-group" for="year">Year <span class="text-danger">*</span></label>
                                                <select class="select form-control @error('year') is-invalid @enderror"
                                                id="e_year" name="year" value="{{ old('year') }}" required>
                                                    <option selected disabled>-- Selected --</option>
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

                                            <div class="form-group mt-3">
                                                <label class="col-form-group" for="priority">Priority <span class="text-danger">*</span></label>
                                                <select class="select form-control @error('priority') is-invalid @enderror"
                                                id="e_priority" name="priority" value="{{ old('priority') }}" required>
                                                    <option selected disabled>-- Selected --</option>
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

                                            <div class="form-group mt-3">
                                                <label class="col-form-group" for="status">Status <span class="text-danger">*</span></label>
                                                <select class="select form-control @error('status') is-invalid @enderror"
                                                id="e_status" name="status" value="{{ old('status') }}" required>
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

                                            <div class="form-group mt-3">
                                                <label for="client">Client <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('client') is-invalid @enderror"
                                                id="e_client" name="client" value="{{ old('client') }}" placeholder="Nama Client" required>
                                                <!-- error message untuk title -->
                                                @error('client')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-3">
                                                <label for="email">Email <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                id="e_email" name="email" value="{{ old('email') }}" placeholder="Email Client" required>
                                                <!-- error message untuk title -->
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-3">
                                                <label for="description">Description <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('description') is-invalid @enderror"
                                                    id="e_description" name="description" value="{{ old('description') }}" placeholder="Keterangan Project" required>
                                                <!-- error message untuk title -->
                                                @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div hidden class="form-group mt-3">
                                                <label class="col-form-group" for="assignment">Assignment <span class="text-danger">*</span></label>
                                                <select class="select form-control @error('assignment') is-invalid @enderror"
                                                id="e_assignment" name="assignment" value="{{ old('assignment') }}" required>
                                                    <option>--- Selected ---</option>
                                                    <option value="Accept">Accept</option>
                                                    <option value="Dismiss">Dismiss</option>
                                                </select>
                                                <!-- error message untuk title -->
                                                @error('assignment')
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

                        {{-- View Project Initiatives --}}
                        <div id="details-initiatives" class="modal custonm-modal fade" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">DETAILS PROJECT INITIATIVES</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="e_form" action="" method="POST">
                                        {{-- <form action="{{ route('assignment.detail', $i->id) }}" method="GET"> --}}
                                            @csrf
                                            {{-- DATA PROJECT INITIATIVES --}}
                                            <div class="col-12">
                                                <h5>Project Code</h5>
                                                {{-- <p id="e_project_code" name="project_code" value="{{ old('project_code') }}" required></p> --}}
                                                <p>{{ $i->project_code }}</p>
                                                <hr>
                                                <h5>Name Project</h5>
                                                <p>{{ $i->name_project }}</p>
                                                {{-- <p id="e_name_project" name="name_project" value="{{ old('name_project') }}" required></p> --}}
                                                <hr>
                                                <h5>Project Category</h5>
                                                <p>{{ $i->project_category }}</p>
                                                <hr>
                                                <h5>Year</h5>
                                                <p>{{ $i->year }}</p>
                                                <hr>
                                                <h5>Priority</h5>
                                                <p>{{ $i->priority }}</p>
                                                <hr>
                                                <h5>Status</h5>
                                                <p>{{ $i->status }}</p>
                                                <hr>
                                                <h5>Client</h5>
                                                <p>{{ $i->client }}</p>
                                                <hr>
                                                <h5>email</h5>
                                                <p>{{ $i->email }}</p>
                                                <hr>
                                                <h5>Description</h5>
                                                <p>{{ $i->description }}</p>
                                                <hr>
                                                <h5>Assignment</h5>
                                                <p>{{ $i->assignment }}</p>
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

    {{-- update js --}}
    <script>
        $(document).on('click','.details-initiatives',function()
        {
            var _this = $(this).parents('tr');
            $('#e_id').val(_this.find('.e_id').text());
            var e_form = (_this.find(".e_id").text());
            $('#e_form').attr('action', 'initiative/'+e_form);
            $('#e_project_code').val(_this.find('.project_code').text());
            $('#e_name_project').val(_this.find('.name_project').text());
            $('#e_client').val(_this.find('.client').text());
            $('#e_email').val(_this.find('.email').text());
            $('#e_description').val(_this.find('.description').text());

            var project_category = (_this.find(".project_category").text());
            var _option = '<option selected value="' +project_category+ '">' + _this.find('.project_category').text() + '</option>'
            $( _option).appendTo("#e_project_category");

            var year = (_this.find(".year").text());
            var _option = '<option selected value="' +year+ '">' + _this.find('.year').text() + '</option>'
            $( _option).appendTo("#e_year");

            var priority = (_this.find(".priority").text());
            var _option = '<option selected value="' +priority+ '">' + _this.find('.priority').text() + '</option>'
            $( _option).appendTo("#e_priority");

            var status = (_this.find(".status").text());
            var _option = '<option selected value="' +status+ '">' + _this.find('.status').text() + '</option>'
            $( _option).appendTo("#e_status");

            var assignment = (_this.find(".assignment").text());
            var _option = '<option selected value="' +assignment+ '">' + _this.find('.assignment').text() + '</option>'
            $( _option).appendTo("#e_assignment");
        });
    </script>

</body>
</html>