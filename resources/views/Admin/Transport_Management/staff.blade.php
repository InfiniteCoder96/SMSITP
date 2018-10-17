


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
                    <form class="form-horizontal" action="{{url('staff_reports')}}" method="post">

                        {{csrf_field()}}

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Staff Report</h5>
                            </div>
                            <div class="form-group row">
                                <label for="EID" class="col-sm-3 text-right control-label col-form-label">EID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="EID" name="EID" placeholder="EID Here" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="gender" name="gender" placeholder=" Gender Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="section" class="col-sm-3 text-right control-label col-form-label">Section</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="section" name="section" placeholder=" Section Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-sm-3 text-right control-label col-form-label">Mobile</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vehicle_No" class="col-sm-3 text-right control-label col-form-label">Vehicle No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="vehicle_No" name="vehicle_No" placeholder="Vehicle No Here" required>
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
                                <label for="dr_Mobile" class="col-sm-3 text-right control-label col-form-label">Dr. Mobile</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="dr_Mobile" name="dr_Mobile" placeholder="Dr. Mobile Name Here" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="route_Name" class="col-sm-3 text-right control-label col-form-label">Route Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="route_Name" name="route_Name" placeholder="Route Name  Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="stop_Name" class="col-sm-3 text-right control-label col-form-label">Stop Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="stop_Name" name="stop_Name" placeholder="Stop Name Here" required>
                                </div>
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
                            <th scope="col" style="font-size: 12px">EID</th>
                            <th scope="col" style="font-size: 12px">Name</th>
                            <th scope="col" style="font-size: 12px">Gender</th>
                            <th scope="col" style="font-size: 12px">Section</th>
                            <th scope="col" style="font-size: 12px">Mobile</th>
                            <th scope="col" style="font-size: 12px">Vehicle No</th>
                            <th scope="col" style="font-size: 12px">type</th>
                            <th scope="col" style="font-size: 12px">Driver Name</th>
                            <th scope="col" style="font-size: 12px">Dr. Mobile</th>
                            <th scope="col" style="font-size: 12px">Route Name</th>
                            <th scope="col" style="font-size: 12px">Stop Name</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">

                        @foreach($staff_reports as $staff_report)
                            <tr>
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </th>


                                <td style="font-size: 12px">{{$staff_report['EID']}}</td>
                                <td style="font-size: 12px">{{$staff_report['name']}}</td>
                                <td style="font-size: 12px">{{$staff_report['gender']}}</td>
                                <td style="font-size: 12px">{{$staff_report['section']}}</td>
                                <td style="font-size: 12px">{{$staff_report['mobile']}}</td>
                                <td style="font-size: 12px">{{$staff_report['vehicle_No']}}</td>
                                <td style="font-size: 12px">{{$staff_report['type']}}</td>
                                <td style="font-size: 12px">{{$staff_report['driver_name']}}</td>
                                <td style="font-size: 12px">{{$staff_report['dr_Mobile']}}</td>
                                <td style="font-size: 12px">{{$staff_report['route_Name']}}</td>
                                <td style="font-size: 12px">{{$staff_report['stop_Name']}}</td>




                                <td><a href="{{action('Staff_ReportController@edit', $staff_report['id'])}}" class="btn btn-warning">Edit</a>

                                    <form action="{{action('Staff_ReportController@destroy', $staff_report['id'])}}" method="post">
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




                </tbody>

                </table>
            </div>

            </div>



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