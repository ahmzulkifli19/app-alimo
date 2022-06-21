@extends('template.layout')

@section('content')
    {{-- <!-- CONTENT -->
    <div class="content">
        <div class="content">
            <h3 class="card-title">List Project</h3>

            <!-- Page Header -->
            <div class="row align-items-center">
                <div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">List Project</li>
                    </ul>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Search Filter -->
            <div class="card pt-4">
                <div class="content container-fluid">
                    <form action="" method="">
                        @csrf
                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Title</label>
                                    <input type="text" class="form-control floating" id="name" name="name">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Resource Name</label>
                                    <input type="text" class="form-control floating" id="resource_name"
                                        name="resource_name">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Status</label>
                                    <input type="text" class="form-control floating" id="name" name="status">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <button type="sumit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Search Filter -->

            <!-- Tabel -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-auto float-right ml-auto">
                                <a href="#" class="btn btn-success add-btn" data-toggle="modal" data-target="#add_user"><i
                                        class="fa fa-plus"></i> Add Project</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Project Code
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Resource Name
                                        </th>
                                        <th>
                                            Start Date
                                        </th>
                                        <th>
                                            Due Date
                                        </th>
                                        <th>
                                            Progress
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Role Assignment
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                2022.ACT.WNT.001
                                            </td>
                                            <td>
                                                Website Nusantara Trade
                                            </td>
                                            <td>
                                                Mohammad Rizki
                                            </td>
                                            <td>
                                                01-02-2022
                                            </td>
                                            <td>
                                                31-06-2022
                                            </td>
                                            <td>
                                                73 %
                                            </td>
                                            <td>
                                                Execution
                                            </td>
                                            <td>
                                                Development
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon fa fa-edit" data-toggle="dropdown"
                                                        aria-expanded="false"></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item userUpdate" data-toggle="modal"
                                                            data-id="'.$user->id.'" data-target="#edit_user"><i
                                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item userDelete" href="#" data-toggle="modal"
                                                            ata-id="'.$user->id.'" data-target="#delete_user"><i
                                                                class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                2022.ACT.WTM.001
                                            </td>
                                            <td>
                                                Website PT. Tri Meka
                                            </td>
                                            <td>
                                                Rudi Nugroho
                                            </td>
                                            <td>
                                                15-03-2022
                                            </td>
                                            <td>
                                                15-07-2022
                                            </td>
                                            <td>
                                                68 %
                                            </td>
                                            <td>
                                                Execution
                                            </td>
                                            <td>
                                                Development
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon fa fa-edit" data-toggle="dropdown"
                                                        aria-expanded="false"></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item userUpdate" data-toggle="modal"
                                                            data-id="'.$user->id.'" data-target="#edit_user"><i
                                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item userDelete" href="#" data-toggle="modal"
                                                            ata-id="'.$user->id.'" data-target="#delete_user"><i
                                                                class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tabel-->
        </div>

    </div>
    <!--END CONTENT--> --}}

    {{-- Start Content --}}


    {{-- End Content --}}
@endsection
