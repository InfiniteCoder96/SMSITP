@extends('layouts.app')

@section('content')

    @include('layouts.NonAcademicLayouts.header')
    @include('layouts.NonAcademicLayouts.sideBar')

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Sport Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sports Management</li>
                                <li class="breadcrumb-item active" aria-current="page">Student</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">



            <div class="row-md-4">
                <div class="col-md-4">


                    </form>
                </div>
                <div class="col-md-12">


                    <div class="col-md-12">


                        <div class="card bg-secondary text-white">
                            <div class="card-header bg-info text-white">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <h5 class="card-title m-b-0">Acheivements</h5>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="fname" placeholder="Search">

                                    </div>
                                    <button class="btn btn-danger btn-xm">Search</button>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="fname" value="">
                                    </div>
                                    <button class="btn btn-danger btn-xm">Go</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-danger btn-xm">Export</button>
                                </div>


                            </div>
                            <div class="table-responsive">

                                <table class="table">
                                    <thead class="thead-dark">

                                    <tr>
                                        <th>
                                            <label class="customcheckbox m-b-20">
                                                <input type="checkbox" id="mainCheckbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <th scope="col" style="font-size: 12px">Event ID</th>
                                        <th scope="col" style="font-size: 12px">Event Name</th>
                                        <th scope="col" style="font-size: 12px">Teacher-IN-Charge ID</th>
                                        <th scope="col" style="font-size: 12px">Achievments</th>
                                        <th scope="col" style="font-size: 12px">Action</th>

                                    </tr>
                                    </thead>


                                    <tbody class="customtable">


                                    <tr>
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>


                                        <td style="font-size: 12px">FA</td>
                                        <td style="font-size: 12px">Hocky</td>
                                        <td style="font-size: 12px">C</td>
                                        <td style="font-size: 12px">ALL Island 2</td>
                                        <td style="font-size: 12px">

                                            <a class="waves-effect waves-light" href=""><i class="mdi mdi-pencil font-20"></i>
                                            </a><a class="waves-effect waves-light" href=""><i class="mdi mdi-delete font-20"></i>
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>

                                        <td style="font-size: 12px">FA</td>
                                        <td style="font-size: 12px">Foot Ball</td>
                                        <td style="font-size: 12px">A</td>
                                        <td style="font-size: 12px">All Island 2</td>
                                        <td style="font-size: 12px">
                                            <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                            </a><a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>

                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px">A</td>
                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px">
                                            <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                            </a><a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                                            </a></td>
                                    </tr>

                                    <tr>
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>

                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px">A</td>
                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px">
                                            <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                            </a><a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>

                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px">A</td>
                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px">
                                            <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                            </a><a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>

                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px">A</td>
                                        <td style="font-size: 12px"></td>
                                        <td style="font-size: 12px">
                                            <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                            </a><a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                                            </a></td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <p>Page : 1 of 1</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-warning btn-md">update</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-warning btn-md"></button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-warning btn-md"></button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-warning btn-md"></button>&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>


                            </div>
                        </div>

                    </div>

                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->




                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                </div>

            </div>
