@extends('layouts.app')

@section('content')

    @include('layouts.TransportHostelLayouts.header')
    @include('layouts.TransportHostelLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Manage Classes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">


                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-info text-white">
                            <div class="row">
                                <div class="col-sm-2">
                                    <h5 class="card-title m-b-0">Vehicle Details</h5>
                                </div>
                                <a class="waves-effect waves-dark" href="" data-toggle="modal" data-target="#vehicleRegistrationModal"><button class="btn btn-danger btn-xm">Add New Route</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-danger btn-xm">Deactivate</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="fname" placeholder="Search">

                                </div>
                                <button class="btn btn-danger btn-xm">Search</button>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="fname" value="10">
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
                                    <th scope="col" style="font-size: 12px">Route Name</th>
                                    <th scope="col" style="font-size: 12px">Type</th>
                                    <th scope="col" style="font-size: 12px">Vehicle No.</th>
                                    <th scope="col" style="font-size: 12px">Driver Name</th>
                                    <th scope="col" style="font-size: 12px">Mobile</th>
                                    <th scope="col" style="font-size: 12px">Stop Names</th>
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


                                    <td style="font-size: 12px">FA-3214</td>
                                    <td style="font-size: 12px">Bus</td>
                                    <td style="font-size: 12px">Karunadasa D.A.</td>
                                    <td style="font-size: 12px">Hino School Tag</td>
                                    <td style="font-size: 12px">35</td>
                                    <td style="font-size: 12px">Asok Leyland</td>
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


                                    <td style="font-size: 12px">FA-3214</td>
                                    <td style="font-size: 12px">Bus</td>
                                    <td style="font-size: 12px">Karunadasa D.A.</td>
                                    <td style="font-size: 12px">Hino School Tag</td>
                                    <td style="font-size: 12px">35</td>
                                    <td style="font-size: 12px">Asok Leyland</td>
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
                                <button class="btn btn-warning btn-md">First</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-warning btn-md">Prev</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-warning btn-md">Next</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-warning btn-md">Last</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>


                        </div>
                    </div>

                </div>

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

            </div>

        </div>


    </div>
    @include('layouts.AcademicLayouts.footer')

@endsection