


@extends('layouts.app')

@section('content')

    @include('layouts.TransportHostelLayouts.header-TA')
    @include('layouts.TransportHostelLayouts.sideBar-TA')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Staff</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Staff Report</li>
                                <li class="breadcrumb-item active" aria-current="page"></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif
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
                <div class="col-md-12">
                    <form class="form-horizontal" action="{{action('Staff_ReportController@update', $id)}}" method="post">

                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Staff Report</h5>
                            </div>
                            <div class="form-group row">
                                <label for="EID" class="col-sm-3 text-right control-label col-form-label">EID</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$staff_reports->EID}}" class="form-control" id="EID" name="EID" placeholder="EID Here" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$staff_reports->name}}" class="form-control" id="name" name="name" placeholder="Name Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$staff_reports->gender}}" class="form-control" id="gender" name="gender" placeholder=" Gender Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="section" class="col-sm-3 text-right control-label col-form-label">Section</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$staff_reports->section}}" class="form-control" id="section" name="section" placeholder=" Section Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-sm-3 text-right control-label col-form-label">Mobile</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$staff_reports->mobile}}" class="form-control" id="mobile" name="mobile" placeholder="Mobile Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vehicle_No" class="col-sm-3 text-right control-label col-form-label">Vehicle No</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$staff_reports->vehicle_No}}" class="form-control" id="vehicle_No" name="vehicle_No" placeholder="Vehicle No Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type" class="col-sm-3 text-right control-label col-form-label">type</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$staff_reports->type}}" class="form-control" id="type" name="type" placeholder="type Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="driver_name" class="col-sm-3 text-right control-label col-form-label">Driver Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$staff_reports->driver_name}}" class="form-control" id="driver_name" name="driver_name" placeholder="Driver Name Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dr_Mobile" class="col-sm-3 text-right control-label col-form-label">Dr. Mobile</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$staff_reports->dr_Mobile}}" class="form-control" id="dr_Mobile" name="dr_Mobile" placeholder="Dr. Mobile Name Here" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="route_Name" class="col-sm-3 text-right control-label col-form-label">Route Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$staff_reports->route_Name}}" class="form-control" id="route_Name" name="route_Name" placeholder="Route Name  Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="stop_Name" class="col-sm-3 text-right control-label col-form-label">Stop Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$staff_reports->stop_Name}}" class="form-control" id="stop_Name" name="stop_Name" placeholder="Stop Name Here" required>
                                </div>
                            </div>








                        </div>








                        <div class="form-group row">

                        </div>





                    </form>

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

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    </div>





    @include('layouts.AcademicLayouts.footer')

@endsection