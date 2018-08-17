@extends('layouts.app')

@section('content')

    @include('layouts.HRLayouts.header')
    @include('layouts.HRLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card card bg-secondary text-white">
                <div class="card-body card text-white bg-danger mb-3">
                    <h5 class="card-title m-b-0">Non Academic Staff Details</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>
                                <label class="customcheckbox m-b-20">
                                    <input type="checkbox" id="mainCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <th scope="col" style="font-size: 12px">User ID</th>
                            <th scope="col" style="font-size: 12px">User Name</th>
                            <th scope="col" style="font-size: 12px">User Role</th>
                            <th scope="col" style="font-size: 12px">Contct No</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">

                        {{--code for view data from databse--}}

                        {{--@foreach($students as $student)--}}

                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>


                            <td style="font-size: 12px">S123</td>
                            <td style="font-size: 12px">Fernando</td>
                            <td style="font-size: 12px">Non Academic Manager</td>
                            <td style="font-size: 12px">0716767875</td>
                            <td style="font-size: 12px">
                                <a class="waves-effect waves-dark" href="" data-toggle="modal" data-target="#updateNonAcademicStaffDetailsModal"><i class="mdi mdi-pencil font-20" ></i></a>
                                <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>


                            <td style="font-size: 12px">S123</td>
                            <td style="font-size: 12px">Fernando</td>
                            <td style="font-size: 12px">Non Academic Manager</td>
                            <td style="font-size: 12px">0716767875</td>
                            <td style="font-size: 12px">
                                <a class="waves-effect waves-dark" href="" data-toggle="modal" data-target="#updateNonAcademicStaffDetailsModal"><i class="mdi mdi-pencil font-20" ></i></a>
                                <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i></a>
                            </td>
                        </tr>
                        {{--@endforeach--}}

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <form class="form-horizontal" action="#" method="get">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card card bg-secondary text-white">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Recruit New User</h5>
                            </div>
                            <div class="card-body text-white bg-success mb-3">
                                <h4 class="card-title">Personal Info</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">User ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="User ID Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">User Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="User Name Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">User Role</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                            <option>Select</option>
                                            <optgroup label="Non Academic">
                                                <option value="WA">Administrator</option>
                                                <option value="NV">Coach</option>
                                                <option value="CA">Finance Manager</option>
                                                <option value="WA">Non Academic Manager</option>
                                                <option value="WA">Transport Manager</option>
                                                <option value="OR">Warden</option>
                                            </optgroup>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono1" placeholder="Contact No Here" required>
                                    </div>
                                </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-outline-success">Submit</button>
                                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>



    @include('layouts.adminLayouts.footer')

@endsection