@extends('layouts.app')

@section('content')

    @include('layouts.NonAcademicLayouts.header')
    @include('layouts.NonAcademicLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Sports Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sport Management</li>
                                <li class="breadcrumb-item active" aria-current="page">Sports</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card text-white bg-success mb-3" >--}}
                        {{--<div class="card-header bg-dark">Class Teachers</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">Everything Fine</h5>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card text-white bg-danger mb-3" >--}}
                        {{--<div class="card-header bg-dark">Class Students Amount</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">Something Wrong in Class 8A</h5>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card text-white bg-warning mb-3" >--}}
                        {{--<div class="card-header bg-dark">Absent Teachers</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">5 class teachers absent</h5>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


            <div class="row">
                <div class="col-md-4">
                    <form class="form-horizontal" action="#" method="get">



                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Add New Sport</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Sport ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Sport ID Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Sport Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Sport Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Coach</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Coach Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Teacher-in-charge</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Teacher-in-charge name Here" required>
                                    </div>
                                </div>




                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-outline-success">Submit</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </div>

                        </div>









                    </form>
                </div>
                <div class="col-md-8">
                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-cyan text-white">
                            <h5 class="card-title m-b-0">Sports Details</h5>
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
                                    <th scope="col" style="font-size: 12px">Sport</th>
                                    <th scope="col" style="font-size: 12px">Sport Id</th>
                                    <th scope="col" style="font-size: 12px">Coach</th>
                                    <th scope="col" style="font-size: 12px">Teacher-in-charge</th>
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


                                    <td style="font-size: 12px">Foot Ball</td>
                                    <td style="font-size: 12px">FA</td>
                                    <td style="font-size: 12px">Karunadasa D.A.</td>
                                    <td style="font-size: 12px">Karunadasa D.A.</td>
                                    <td style="font-size: 12px">
                                        <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                            <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label class="customcheckbox">
                                            <input type="checkbox" class="listCheckbox" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>


                                    <td style="font-size: 12px">Foot Ball</td>
                                    <td style="font-size: 12px">FA</td>
                                    <td style="font-size: 12px">Karunadasa D.A.</td>
                                    <td style="font-size: 12px">Karunadasa D.A.</td>
                                    <td style="font-size: 12px">
                                        <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                            <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                                    </td>
                                </tr>
                                {{--@endforeach--}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

            </div>

        </div>



    @include('layouts.AcademicLayouts.footer')

@endsection