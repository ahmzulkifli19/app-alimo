<!--**********************************
    VIEW CREATE PROJECT INITIATIVES
***********************************-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Input Project Initiatives</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">

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

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="form-header text-center">
                            <h4>INPUT PROJECT INITIATIVES</h4>
                        </div>

                        <form action="{{ route('initiatives.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="project_code">Project Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('project_code') is-invalid @enderror"
                                    name="project_code" value="{{ old('project_code') }}" placeholder="ACT.(Singkatan Kategori Project).(Nomor urut Project)"required>
                                <!-- error message untuk title -->
                                @error('project_code')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

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

                            <div class="form-group">
                                <label class="col-form-group" for="project_category">Project Category <span class="text-danger">*</span></label>
                                <select class="select form-control @error('project_category') is-invalid @enderror"
                                name="project_category" value="{{ old('project_category') }}" required>
                                    <option>--- Selected ---</option>
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

                            <div class="form-group">
                                <label class="col-form-group" for="year">Year <span class="text-danger">*</span></label>
                                <select class="select form-control @error('year') is-invalid @enderror"
                                name="year" value="{{ old('year') }}" required>
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

                            <div class="form-group">
                                <label class="col-form-group" for="priority">Priority <span class="text-danger">*</span></label>
                                <select class="select form-control @error('priority') is-invalid @enderror"
                                name="priority" value="{{ old('priority') }}" required>
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

                            <div class="form-group">
                                <label class="col-form-group" for="status">Status <span class="text-danger">*</span></label>
                                <select class="select form-control @error('status') is-invalid @enderror"
                                name="status" value="{{ old('status') }}" required>
                                    <option>--- Selected ---</option>
                                    <option value="Pending">Pending</option>
                                    <option value="On Progress">On Progress</option>
                                    <option value="Done">Done</option>
                                </select>
                                <!-- error message untuk title -->
                                @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

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

                            <div hidden class="form-group">
                                <label class="col-form-group" for="assignment">Assignment <span class="text-danger">*</span></label>
                                <select class="select form-control @error('assignment') is-invalid @enderror"
                                name="assignment" value="{{ old('assignment') }}" required>
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

                            <div class="float-right">
                                <button type="submit" class="btn btn-md btn-success">Save</button>
                                <a href="{{ route('initiatives.index') }}" class="btn btn-md btn-secondary">Back</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- include summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 250, //set editable area's height
            });
        })
    </script>
</body>

</html>
