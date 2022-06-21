@extends('template.layout')

@section('content')
    <!--**********************************
        Content body start
    ***********************************-->
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
                            <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#initiatives">
                                + Add Project Initiatives
                            </button>
                        </div>

                        {{-- Table --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px;">#</th>
                                            <th style="width: 900px;">Project Code</th>
                                            <th style="width: 1200px;">Name Project</th>
                                            <th style="width: 850px;">Project Category</th>
                                            <th style="width: 850px;">Year</th>
                                            <th style="width: 850px;">Priority</th>
                                            <th style="width: 850px;">Status</th>
                                            <th style="width: 900px;">Client</th>
                                            <th style="width: 900px;">Email</th>
                                            <th style="width: 1200px;">Description</th>
                                            <th style="width: 500px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($initiatives as $key=>$i )
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td class="project_code">{{ $i->project_code }}</td>
                                                <td class="name_project">{{ $i->name_project }}</td>
                                                <td class="project_category">{{ $i->project_category }}</td>
                                                <td class="year">{{ $i->year }}</td>
                                                <td class="priority">{{ $i->priority }}</td>
                                                <td class="status">{{ $i->status }}</td>
                                                <td class="client">{{ $i->client }}</td>
                                                <td class="email">{{ $i->email }}</td>
                                                <td class="description">{{ $i->description }}</td>
                                                <td>
													<div class="d-flex">
														{{-- <a href="{{ route('initiatives.edit') }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> --}}
														{{-- <a href="{{ route('initiatives.destroy') }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> --}}
													</div>
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
                <div id="initiatives" class="modal custonm-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT PROJECT INITIATIVES</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{-- FORM --}}
                                <form action="{{ route('initiatives.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="project_code">Project Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('project_code') is-invalid @enderror"
                                            name="project_code" value="{{ old('project_code') }}" required>
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
                                            name="name_project" value="{{ old('name_project') }}" required>
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
                                            <option value="Web Development">Web Development</option>
                                            <option value="IT Helpdesk">IT Helpdesk</option>
                                            <option value="Network Service">Network Service</option>
                                            <option value="Manage Campaign">Manage Campaign</option>
                                            <option value="Content Social Media">Content Social Media</option>
                                            <option value="Graphic Designer">Graphic Designer</option>
                                            <option value="Video Designer">Video Designer</option>
                                            <option value="Motion Graphic">Motion Graphic</option>
                                            <option value="Bussiness Analythic">Bussiness Analythic</option>
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
                                            <option value="Initiatives">Initiatives</option>
                                            <option value="Assignment">Assignment</option>
                                            <option value="Planning">Planning</option>
                                            <option value="Execution">Execution</option>
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
                                            name="client" value="{{ old('client') }}" required>
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
                                            name="email" value="{{ old('email') }}" required>
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
                                            name="description" value="{{ old('description') }}" required>
                                        <!-- error message untuk title -->
                                        @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-md btn-success">Save</button>
                                    <a href="{{ route('initiatives.index') }}" class="btn btn-md btn-secondary">Back</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Initiatives List Modal -->
                <div id="add_training" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT PROJECT INITIATIVES</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('initiatives.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="project_code">Project Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('project_code') is-invalid @enderror"
                                            name="project_code" value="{{ old('project_code') }}" required>
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
                                            name="name_project" value="{{ old('name_project') }}" required>
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
                                            <option value="Web Development">Web Development</option>
                                            <option value="IT Helpdesk">IT Helpdesk</option>
                                            <option value="Network Service">Network Service</option>
                                            <option value="Manage Campaign">Manage Campaign</option>
                                            <option value="Content Social Media">Content Social Media</option>
                                            <option value="Graphic Designer">Graphic Designer</option>
                                            <option value="Video Designer">Video Designer</option>
                                            <option value="Motion Graphic">Motion Graphic</option>
                                            <option value="Bussiness Analythic">Bussiness Analythic</option>
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
                                            <option value="Initiatives">Initiatives</option>
                                            <option value="Assignment">Assignment</option>
                                            <option value="Planning">Planning</option>
                                            <option value="Execution">Execution</option>
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
                                            name="client" value="{{ old('client') }}" required>
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
                                            name="email" value="{{ old('email') }}" required>
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
                                            name="description" value="{{ old('description') }}" required>
                                        <!-- error message untuk title -->
                                        @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-md btn-success">Save</button>
                                    <a href="{{ route('initiatives.index') }}" class="btn btn-md btn-secondary">Back</a>

                                </form>
                                {{-- <form action="{{ route('form/initiatives/save') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="project_code">Project Code</label>
                                        <input type="text" class="form-control @error('project_code') is-invalid @enderror" name="project_code"
                                            value="{{ old('project_code') }}" required>
                                        <!-- error message untuk title -->
                                        @error('project_code')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="project_name">Project Name</label>
                                        <input type="text" class="form-control @error('project_name') is-invalid @enderror"
                                            name="project_name" value="{{ old('project_name') }}" required>
                                        <!-- error message untuk title -->
                                        @error('project_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="project_category">Project Category</label>
                                        <input type="text" class="form-control @error('project_category') is-invalid @enderror"
                                            name="project_category" value="{{ old('project_category') }}" required>
                                        <!-- error message untuk title -->
                                        @error('project_category')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <input type="number" class="form-control @error('year') is-invalid @enderror"
                                            name="year" value="{{ old('year') }}" required>
                                        <!-- error message untuk title -->
                                        @error('year')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="priority">Priority</label>
                                        <input type="text" class="form-control @error('priority') is-invalid @enderror"
                                            name="priority" value="{{ old('priority') }}" required>
                                        <!-- error message untuk title -->
                                        @error('priority')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control @error('status') is-invalid @enderror"
                                            name="status" value="{{ old('status') }}" required>
                                        <!-- error message untuk title -->
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required>
                                        <!-- error message untuk title -->
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text-area" class="form-control @error('description') is-invalid @enderror"
                                            name="description" value="{{ old('description') }}" required>
                                        <!-- error message untuk title -->
                                        @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-md btn-primary">Save</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add Training List Modal -->

                {{-- Form Add Project Initiatives --}}
                <div class="modal fade" id="add_initiatives" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><strong>INPUT PROJECT INITIATIVES</strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="basic-form">
                                <form action="{{ route('form/initiatives/save') }}" method="POST">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Project Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('project_code') is-invalid @enderror" name="project_code"
                                            value="{{ old('project_code') }}" required>
                                            <!-- error message untuk title -->
                                            @error('project_code')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Name Project</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('project_name') is-invalid @enderror" name="project_name"
                                            value="{{ old('project_name') }}" required>
                                            <!-- error message untuk title -->
                                            @error('project_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Project Category</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('project_category') is-invalid @enderror" name="project_category"
                                            value="{{ old('project_category') }}" required>
                                            <!-- error message untuk title -->
                                            @error('project_category')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Year</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control @error('year') is-invalid @enderror" name="year"
                                            value="{{ old('year') }}" required>
                                            <!-- error message untuk title -->
                                            @error('year')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Priority</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('priority') is-invalid @enderror" name="priority"
                                            value="{{ old('priority') }}" required>
                                            <!-- error message untuk title -->
                                            @error('priority')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status"
                                            value="{{ old('status') }}" required>
                                            <!-- error message untuk title -->
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Client</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('client') is-invalid @enderror" name="client"
                                            value="{{ old('client') }}" required>
                                            <!-- error message untuk title -->
                                            @error('client')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Project Category</label>
                                        <div class="col-sm-9">
                                            <select class="default-select form-control wide">
                                                <option>Web Development</option>
                                                <option>IT Helpdesk</option>
                                                <option>Network Service</option>
                                                <option>Manage Campaign</option>
                                                <option>Content Social Media</option>
                                                <option>Graphic Designer</option>
                                                <option>Video Designer</option>
                                                <option>Motion Graphic</option>
                                                <option>Bussiness Analythic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Year</label>
                                        <div class="col-sm-9">
                                            <select class="default-select form-control">
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                                <option>2024</option>
                                                <option>2025</option>
                                                <option>2026</option>
                                                <option>2027</option>
                                                <option>2028</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Priority</label>
                                        <div class="col-sm-9">
                                            <select class="default-select form-control">
                                                <option>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select class="default-select form-control">
                                                <option>Initiatives</option>
                                                <option>Assignment</option>
                                                <option>Planning</option>
                                                <option>Execution</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Client</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div> --}}
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required>
                                            <!-- error message untuk title -->
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                                            value="{{ old('description') }}" required>
                                            <!-- error message untuk title -->
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="submit-section">
                                <button type="submit" class="btn btn-success submit-btn">Submit</button>
                            </div>
                            {{-- <button type="submit" class="btn btn-md btn-success">Save</button> --}}
                            {{-- <a href="{{ route('project-initiatives.index') }}" class="btn btn-md btn-secondary"></a> --}}
                        {{-- <button type="button" class="btn btn-success">Save changes</button> --}}
                        </div>
                    </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Datatable List All Project</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example4" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th width="900px">Project Code</th>
                                            <th width="1200px">Name Project</th>
                                            <th width="850px">Project Category</th>
                                            <th width="850px">Year</th>
                                            <th width="850px">Priority</th>
                                            <th width="850px">Status</th>
                                            <th width="900px">Client</th>
                                            <th width="900px">Email</th>
                                            <th width="1200px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                    {{-- <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Tiger Nixon</td>
                                            <td>#54605</td>
                                            <td>Library</td>
                                            <td>Cash</td>
                                            <td><span class="badge light badge-success">Paid</span></td>
                                            <td>2011/04/25</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Garrett Winters</td>
                                            <td>#54687</td>
                                            <td>Library</td>
                                            <td>Credit Card</td>
                                            <td><span class="badge light badge-warning">Panding</span></td>
                                            <td>2011/07/25</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Ashton Cox</td>
                                            <td>#35672</td>
                                            <td>Tuition</td>
                                            <td>Cash</td>
                                            <td><span class="badge light badge-success">Paid</span></td>
                                            <td>2009/01/12</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>Cedric Kelly</td>
                                            <td>#57984</td>
                                            <td>Annual</td>
                                            <td>Credit Card</td>
                                            <td><span class="badge light badge-warning">Panding</span></td>
                                            <td>2012/03/29</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>05</td>
                                            <td>Airi Satou</td>
                                            <td>#12453</td>
                                            <td>Library</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-warning">Panding</span></td>
                                            <td>2008/11/28</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>06</td>
                                            <td>Brielle Williamson</td>
                                            <td>#59723</td>
                                            <td>Tuition</td>
                                            <td>Cash</td>
                                            <td><span class="badge light badge-success">Paid</span></td>
                                            <td>2012/12/02</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>07</td>
                                            <td>Herrod Chandler</td>
                                            <td>#98726</td>
                                            <td>Tuition</td>
                                            <td>Credit Card</td>
                                            <td><span class="badge light badge-danger">Udpaid</span></td>
                                            <td>2012/08/06</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>08</td>
                                            <td>Rhona Davidson</td>
                                            <td>#98721</td>
                                            <td>Library</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-danger">Udpaid</span></td>
                                            <td>2010/10/14</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>09</td>
                                            <td>Colleen Hurst</td>
                                            <td>#54605</td>
                                            <td>Annual</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-success">Paid</span></td>
                                            <td>2009/09/15</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Sonya Frost</td>
                                            <td>#98734</td>
                                            <td>Tuition</td>
                                            <td>Credit Card</td>
                                            <td><span class="badge light badge-danger">Udpaid</span></td>
                                            <td>2008/12/13</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Jena Gaines</td>
                                            <td>#12457</td>
                                            <td>Tuition</td>
                                            <td>Cash</td>
                                            <td><span class="badge light badge-danger">Udpaid</span></td>
                                            <td>2008/12/19</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Quinn Flynn</td>
                                            <td>#36987</td>
                                            <td>Library</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-warning">Panding</span></td>
                                            <td>2013/03/03</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Charde Marshall</td>
                                            <td>#98756</td>
                                            <td>Tuition</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-success">Paid</span></td>
                                            <td>2008/10/16</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Haley Kennedy</td>
                                            <td>#98754</td>
                                            <td>Library</td>
                                            <td>Cash</td>
                                            <td><span class="badge light badge-danger">Udpaid</span></td>
                                            <td>2012/12/18</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>#65248</td>
                                            <td>Annual</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-danger">Udpaid</span></td>
                                            <td>2010/03/17</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>Michael Silva</td>
                                            <td>#75943</td>
                                            <td>Tuition</td>
                                            <td>Credit Card</td>
                                            <td><span class="badge light badge-success">Paid</span></td>
                                            <td>2012/11/27</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>Paul Byrd</td>
                                            <td>#87954</td>
                                            <td>Library</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-warning">Panding</span></td>
                                            <td>2010/06/09</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>Gloria Little</td>
                                            <td>#98746</td>
                                            <td>Tuition</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-success">Paid</span></td>
                                            <td>2009/04/10</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>Bradley Greer</td>
                                            <td>#98674</td>
                                            <td>Annual</td>
                                            <td>Cash</td>
                                            <td><span class="badge light badge-danger">Udpaid</span></td>
                                            <td>2012/10/13</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>Dai Rios</td>
                                            <td>#69875</td>
                                            <td>Tuition</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-warning">Panding</span></td>
                                            <td>2012/09/26</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>21</td>
                                            <td>Jenette Caldwell</td>
                                            <td>#54678</td>
                                            <td>Library</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-success">Paid</span></td>
                                            <td>2011/09/03</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>Yuri Berry</td>
                                            <td>#98756</td>
                                            <td>Tuition</td>
                                            <td>Credit Card</td>
                                            <td><span class="badge light badge-danger">Udpaid</span></td>
                                            <td>2009/06/25</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td>Caesar Vance</td>
                                            <td>#86754</td>
                                            <td>Tuition</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-success">Paid</span></td>
                                            <td>2011/12/12</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td>Doris Wilder</td>
                                            <td>#34251</td>
                                            <td>Annual</td>
                                            <td>Cash</td>
                                            <td><span class="badge light badge-warning">Panding</span></td>
                                            <td>2010/09/20</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>Angelica Ramos</td>
                                            <td>#65874</td>
                                            <td>Tuition</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-danger">Udpaid</span></td>
                                            <td>2009/10/09</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td>Gavin Joyce</td>
                                            <td>#54605</td>
                                            <td>Female</td>
                                            <td>Credit Card</td>
                                            <td><span class="badge light badge-success">Paid</span></td>
                                            <td>2010/12/22</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>Jennifer Chang</td>
                                            <td>#54605</td>
                                            <td>Tuition</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-warning">Panding</span></td>
                                            <td>2010/11/14</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>28</td>
                                            <td>Brenden Wagner</td>
                                            <td>#45687</td>
                                            <td>Library</td>
                                            <td>Cheque</td>
                                            <td><span class="badge light badge-danger">Udpaid</span></td>
                                            <td>2011/06/07</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>29</td>
                                            <td>Fiona Green</td>
                                            <td>#23456</td>
                                            <td>Tuition</td>
                                            <td>Cash</td>
                                            <td><span class="badge light badge-success">Paid</span></td>
                                            <td>2010/03/11</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                        <tr>
                                            <td>30</td>
                                            <td>Shou Itou</td>
                                            <td>#54605</td>
                                            <td>Annual</td>
                                            <td>Credit Card</td>
                                            <td><span class="badge light badge-warning">Panding</span></td>
                                            <td>2011/08/14</td>
                                            <td><strong>120$</strong></td>
                                        </tr>
                                    </tbody> --}}
                                </table>
                            </div>
                        </div>
                    </div>
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
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
@endsection
