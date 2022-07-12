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
	<title>Project Initiatives | PM Alimo C&T </title>

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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Project Initiatives</a></li>
                        </ol>
                    </div>

                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Datatable Project Initiatives</h4>
                                    <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target=".tambah-initiatives">
                                        + Add Project Initiatives
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
                                                    <th style="min-width: 70px;">Priority</th>
                                                    <th hidden style="min-width: 250px;">Client</th>
                                                    <th hidden style="min-width: 150px;">Email</th>
                                                    <th hidden style="min-width: 250px;">Description</th>
                                                    <th style="min-width: 100px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($initiatives as $key=>$i )
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td hidden class="e_id">{{ $i->id }}</td>
                                                        <td hidden class="id">{{ $i->id }}</td>
                                                        <td class="project_code">{{ $i->project_code }}</td>
                                                        <td class="name_project">{{ $i->name_project }}</td>
                                                        <td class="project_category">{{ $i->project_category }}</td>
                                                        <td class="year">{{ $i->year }}</td>
                                                        <td class="priority">{{ $i->priority }}</td>
                                                        <td hidden class="client">{{ $i->client }}</td>
                                                        <td hidden class="email">{{ $i->email }}</td>
                                                        <td hidden class="description">{{ $i->description }}</td>
                                                        <td>
                                                            <form onsubmit="return confirm('Are you sure ?');"
                                                                action="{{ route('initiatives.destroy', $i->id) }}" method="POST">
                                                                <a href="{{ route('initiatives.edit', $i->id) }}"
                                                                    class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                                <button type="button" class="btn btn-warning shadow btn-xs sharp me-1 view-initiatives" data-bs-toggle="modal" data-bs-target=".view-initiatives">
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

                        <!-- tambah initiatives -->
                        <div class="modal fade tambah-initiatives" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">ADD PROJECT INITIATIVES</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    {{-- FORM --}}
                                                    <form action="{{ route('initiatives.store') }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="project_code">Project Code <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control @error('project_code') is-invalid @enderror"
                                                                        name="project_code" value="{{ old('project_code') }}" placeholder="ACT.(Project Category).(Number Project)"required>
                                                                    <!-- error message untuk title -->
                                                                    @error('project_code')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="name_project">Name Project <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control @error('name_project') is-invalid @enderror"
                                                                        name="name_project" value="{{ old('name_project') }}" placeholder="Nama Project" required>
                                                                    <!-- error message untuk title -->
                                                                    @error('name_project')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-6 col-md-6 mt-3">
                                                                <div class="form-group">
                                                                    <label class="col-form-group" for="project_category">Project Category <span class="text-danger">*</span></label>
                                                                    <select class="select form-control @error('project_category') is-invalid @enderror"
                                                                    name="project_category" value="{{ old('project_category') }}" required>
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
                                                            </div>

                                                            <div class="col-6 col-md-6 mt-3">
                                                                <div class="form-group">
                                                                    <label class="col-form-group" for="year">Year <span class="text-danger">*</span></label>
                                                                    <select class="select form-control @error('year') is-invalid @enderror"
                                                                    name="year" value="{{ old('year') }}" required>
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
                                                            </div>

                                                            <div class="col-6 col-md-6 mt-3">
                                                                <div class="form-group">
                                                                    <label class="col-form-group" for="priority">Priority <span class="text-danger">*</span></label>
                                                                    <select class="select form-control @error('priority') is-invalid @enderror"
                                                                    name="priority" value="{{ old('priority') }}" required>
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
                                                            </div>

                                                            <div class="col-6 col-md-6 mt-3">
                                                                <div class="form-group">
                                                                    <label for="client">Client <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control @error('client') is-invalid @enderror"
                                                                        name="client" value="{{ old('client') }}" placeholder="Nama Client" required>
                                                                    <!-- error message untuk title -->
                                                                    @error('client')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-6 col-md-6 mt-3">
                                                                <div class="form-group">
                                                                    <label for="email">Email <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                                        name="email" value="{{ old('email') }}" placeholder="Email Client" required>
                                                                    <!-- error message untuk title -->
                                                                    @error('email')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-6 col-md-6 mt-3 mb-5">
                                                                <div class="form-group">
                                                                    <label for="description">Description <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control @error('description') is-invalid @enderror"
                                                                        name="description" value="{{ old('description') }}" placeholder="Keterangan Project" required>
                                                                    <!-- error message untuk title -->
                                                                    @error('description')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="float-right">
                                                                    <button type="submit" class="btn btn-md btn-success">Save</button>
                                                                    {{-- <a href="{{ route('initiatives.index') }}" class="btn btn-md btn-secondary">Back</a> --}}
                                                                </div>
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

                        <!-- details initiatives -->
                        <div class="modal fade view-initiatives" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">DETAILS PROJECT INITIATIVES</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-6 col-md-6">
                                                            <label for="">Project Code <span class="text-danger"> *</span></label>
                                                            <input type="text" class="form-control @error('project_code') is-invalid @enderror"
                                                            id="d_project_code" name="project_code" value="{{ old('project_code') }}" disabled>
                                                        </div>
                                                        <div class="col-6 col-md-6">
                                                            <label for="">Name Project <span class="text-danger"> *</span></label>
                                                            <input type="text" class="form-control @error('name_project') is-invalid @enderror"
                                                            id="d_name_project" name="name_project" value="{{ old('name_project') }}" disabled>
                                                        </div>
                                                        <div class="col-6 col-md-6 mt-3">
                                                            <label for="">Project Category <span class="text-danger"> *</span></label>
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
                                                        </div>
                                                        <div class="col-6 col-md-6 mt-3">
                                                            <label for="">Year <span class="text-danger"> *</span></label>
                                                            <select class="select form-control @error('year') is-invalid @enderror"
                                                            id="d_year" name="year" value="{{ old('year') }}" disabled>
                                                                <option selected disabled>-- Selected --</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                                <option value="2026">2026</option>
                                                                <option value="2027">2027</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6 col-md-6 mt-3">
                                                            <label for="">Priority <span class="text-danger"> *</span></label>
                                                            <select class="select form-control @error('priority') is-invalid @enderror"
                                                            id="d_priority" name="priority" value="{{ old('priority') }}" disabled>
                                                                <option selected disabled>-- Selected --</option>
                                                                <option value="High">High</option>
                                                                <option value="Medium">Medium</option>
                                                                <option value="Low">Low</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6 col-md-6 mt-3">
                                                            <label for="">Client <span class="text-danger"> *</span></label>
                                                            <input type="text" class="form-control @error('client') is-invalid @enderror"
                                                            id="d_client" name="client" value="{{ old('client') }}" disabled>
                                                        </div>
                                                        <div class="col-6 col-md-6 mt-3">
                                                            <label for="">Email <span class="text-danger"> *</span></label>
                                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                            id="d_email" name="email" value="{{ old('email') }}" disabled>
                                                        </div>
                                                        <div class="col-6 col-md-6 mt-3 mb-5">
                                                            <label for="">Description <span class="text-danger"> *</span></label>
                                                            <input type="text" class="form-control @error('description') is-invalid @enderror"
                                                            id="d_description" name="description" value="{{ old('description') }}" placeholder="Keterangan Project" disabled>
                                                            {{-- <textarea class="form-control" id="validationCustom04" rows="5" placeholder="Description Project" @error('description') is-invalid @enderror"
                                                            id="d_description" name="description" disabled>{{ old('description') }}</textarea> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
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

        <script src="vendor/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="js/plugins-init/sweetalert.init.js"></script>

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

        {{-- update js 
        <script>
            $(document).on('click','.edit-initiatives',function()
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

            });
        </script>
        --}}
        {{-- details view --}}
        <script>
            $(document).on('click','.details-initiatives',function()
            {
                var _this = $(this).parents('tr');
                $('#d_id').val(_this.find('.d_id').text());
                var d_form = (_this.find(".d_id").text());
                $('#d_form').attr('action', 'initiative/'+d_form);
                $('#d_project_code').val(_this.find('.project_code').text());
                $('#d_name_project').val(_this.find('.name_project').text());
                $('#d_client').val(_this.find('.client').text());
                $('#d_email').val(_this.find('.email').text());
                $('#d_description').val(_this.find('.description').text());

                var project_category = (_this.find(".project_category").text());
                var _option = '<option selected value="' +project_category+ '">' + _this.find('.project_category').text() + '</option>'
                $( _option).appendTo("#d_project_category");

                var year = (_this.find(".year").text());
                var _option = '<option selected value="' +year+ '">' + _this.find('.year').text() + '</option>'
                $( _option).appendTo("#d_year");

                var priority = (_this.find(".priority").text());
                var _option = '<option selected value="' +priority+ '">' + _this.find('.priority').text() + '</option>'
                $( _option).appendTo("#d_priority");

            });
        </script>
</body>
</html>
