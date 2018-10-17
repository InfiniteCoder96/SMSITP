


@extends('layouts.app')

@section('content')

    @include('layouts.TransportHostelLayouts.header-TA')
    @include('layouts.TransportHostelLayouts.sideBar-TA')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Student</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Student Report</li>
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
                    <form class="form-horizontal" action="{{url('student_reports')}}" method="post">

                        {{csrf_field()}}

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Student Report</h5>
                            </div>
                            <div class="form-group row">
                                <label for="SID" class="col-sm-3 text-right control-label col-form-label">SID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="SID" name="SID" placeholder="SID Here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="student_name" class="col-sm-3 text-right control-label col-form-label">Student Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="student_name" name="student_name" placeholder="Student Name Here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="gender" name="gender" placeholder=" Gender Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="grade" class="col-sm-3 text-right control-label col-form-label">Grade</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="grade" name="grade" placeholder=" Grade Here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mobile" class="col-sm-3 text-right control-label col-form-label">Mobile</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="vehicleNo" class="col-sm-3 text-right control-label col-form-label">Vehicle No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="vehicleNo" name="vehicleNo" placeholder="Vehicle No Here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="type" class="col-sm-3 text-right control-label col-form-label">type</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="type" name="type" placeholder="type Here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="driver_name" class="col-sm-3 text-right control-label col-form-label">Driver Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="Driver Name Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dr_mobile" class="col-sm-3 text-right control-label col-form-label">Dr. Mobile</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="dr_mobile" name="dr_mobile" placeholder="Dr. Mobile Name Here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="route_name" class="col-sm-3 text-right control-label col-form-label">Route Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="route_name" name="route_name" placeholder="Route Name  Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="stop_name" class="col-sm-3 text-right control-label col-form-label">Stop Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="stop_name" name="stop_name" placeholder="Stop Name Here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-outline-success">Submit</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                    <button type="reset" class="btn btn-outline-warning">Update</button>

                                </div>
                            </div>
                        </div>
                    </form>

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
                            <th scope="col" style="font-size: 12px">SID</th>
                            <th scope="col" style="font-size: 12px">student_name</th>
                            <th scope="col" style="font-size: 12px">gender</th>
                            <th scope="col" style="font-size: 12px">grade</th>
                            <th scope="col" style="font-size: 12px">mobile</th>
                            <th scope="col" style="font-size: 12px">vehicleNo</th>
                            <th scope="col" style="font-size: 12px">type</th>
                            <th scope="col" style="font-size: 12px">driver_name</th>
                            <th scope="col" style="font-size: 12px">dr_mobile</th>
                            <th scope="col" style="font-size: 12px">route_name</th>
                            <th scope="col" style="font-size: 12px">stop_name</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">
                    @foreach($student_reports as $student_report)
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox">
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td style="font-size: 12px">{{$student_report['SID']}}</td>
                            <td style="font-size: 12px">{{$student_report['student_name']}}</td>
                            <td style="font-size: 12px">{{$student_report['gender']}}</td>
                            <td style="font-size: 12px">{{$student_report['grade']}}</td>
                            <td style="font-size: 12px">{{$student_report['mobile']}}</td>
                            <td style="font-size: 12px">{{$student_report['vehicleNo']}}</td>
                            <td style="font-size: 12px">{{$student_report['type']}}</td>
                            <td style="font-size: 12px">{{$student_report['driver_name']}}</td>
                            <td style="font-size: 12px">{{$student_report['dr_mobile']}}</td>
                            <td style="font-size: 12px">{{$student_report['route_name']}}</td>
                            <td style="font-size: 12px">{{$student_report['stop_name']}}</td>
                            <td><a href="{{action('Student_ReportController@edit', $student_report['id'])}}" class="btn btn-warning">Edit</a>
                                <form action="{{action('Student_ReportController@destroy', $student_report['id'])}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Delete</button>
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
    </div>
    </div>

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    </div>





    @include('layouts.AcademicLayouts.footer')

@endsection