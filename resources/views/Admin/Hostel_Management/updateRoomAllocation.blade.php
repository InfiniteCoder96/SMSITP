@extends('layouts.app')

@section('content')

    @include('layouts.TransportHostelLayouts.header-TA')
    @include('layouts.TransportHostelLayouts.sideBar-TA')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Room Allocation</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Room Allocation</li>
                                <li class="breadcrumb-item active" aria-current="page">Room Details</li>
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
                <div class="col-md-12">
                    <form class="form-horizontal" action="{{action('allocationController@update', $hostelNo)}}" method="post">

                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="PATCH">
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
                    <form class="form-horizontal" action="{{action('allocationController@update', $hostelNo)}}" method="post">



                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Room Details</h5>
                            </div>
                            <div class="card-body">

                            </div>


                            <div class="form-group row">
                                <label for="hostelNo"  class="col-sm-3 text-right control-label col-form-label">Hostel No</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control Warden Name-select" id="hostelNo" name="hostelNo" style="width: 100%; height:36px;" required>
                                        <option selected disabled>Hostel No</option>
                                        <option value="1" <?php if($roomallocations->hostelNo == "1") echo 'selected="selected"'?>> 1</option>
                                        <option value="2" <?php if($roomallocations->hostelNo == "2") echo 'selected="selected"'?>> 2</option>
                                        <option value="3" <?php if($roomallocations->hostelNo == "3") echo 'selected="selected"'?>> 3</option>
                                        <option value="4" <?php if($roomallocations->hostelNo == "4") echo 'selected="selected"'?>> 4</option>



                                    </select>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="hostelName" class="col-sm-3 text-right control-label col-form-label">Hostel Name</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control Warden Name-select" id="hostelName" name="hostelName" style="width: 100%; height:36px;" required>
                                        <option selected disabled>Hostel Name</option>
                                        <option value="JSS Hostel" <?php if($roomallocations->hostelName == "JSS Hostel") echo 'selected="selected"'?>> JSS Hostel</option>
                                        <option value="NEW Hostel" <?php if($roomallocations->hostelName == "NEW Hostel") echo 'selected="selected"'?>> NEW Hostel</option>
                                        <option value="DCB Hostel" <?php if($roomallocations->hostelName == "DCB Hostel") echo 'selected="selected"'?>> DCB Hostel</option>
                                        <option value="Sherin Hostel" <?php if($roomallocations->hostelName == "Sherin Hostel") echo 'selected="selected"'?>> Sherin Hostel</option>


                                    </select>
                                </div>
                            </div>





                            <div class="form-group row">
                                <label for="roomNo" class="col-sm-3 text-right control-label col-form-label">Room No</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control Warden Name-select" id="roomNo" name="roomNo" style="width: 100%; height:36px;" required>
                                        <option selected disabled>Room No</option>
                                        <option value="1A" <?php if($roomallocations->roomNo == "1A") echo 'selected="selected"'?>> 1A</option>
                                        <option value="1B" <?php if($roomallocations->roomNo == "1B") echo 'selected="selected"'?>> 1B</option>
                                        <option value="1C" <?php if($roomallocations->roomNo == "1C") echo 'selected="selected"'?>> 1C</option>
                                        <option value="1D"  <?php if($roomallocations->roomNo == "1D") echo 'selected="selected"'?>> 1D</option>
                                        <option value="2A" <?php if($roomallocations->roomNo == "2A") echo 'selected="selected"'?>> 2A</option>
                                        <option value="2B" <?php if($roomallocations->roomNo == "2B") echo 'selected="selected"'?>> 2B</option>
                                        <option value="2C"  <?php if($roomallocations->roomNo == "2C") echo 'selected="selected"'?>> 2C</option>
                                        <option value="2D" <?php if($roomallocations->roomNo == "2D") echo 'selected="selected"'?>> 2D</option>
                                        <option value="3A" <?php if($roomallocations->roomNo == "3A") echo 'selected="selected"'?>> 3A</option>
                                        <option value="3B" <?php if($roomallocations->roomNo == "3B") echo 'selected="selected"'?>> 3B</option>
                                        <option value="3C" <?php if($roomallocations->roomNo == "3C") echo 'selected="selected"'?>> 3C</option>
                                        <option value="3D" <?php if($roomallocations->roomNo == "3D") echo 'selected="selected"'?>> 3D</option>


                                    </select>
                                </div>
                            </div>










                            <div class="form-group row">
                                <label for="reg_no" class="col-sm-3 text-right control-label col-form-label">Reg.No</label>
                                <div class="col-sm-9">

                                    <input type="text"  value="{{$roomallocations->reg_no}}"class="form-control" id="reg_no" name="reg_no" placeholder="Reg.No Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="reg_type" class="col-sm-3 text-right control-label col-form-label">Reg.Type</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control Warden Name-select" id="reg_type" name="reg_type" style="width: 100%; height:36px;" required>
                                        <option selected disabled>Reg.Type</option>
                                        <option value="Student" <?php if($roomallocations->reg_type == "Student") echo 'selected="selected"'?>> Student</option>
                                        <option value="Staff" <?php if($roomallocations->reg_type == "Staff") echo 'selected="selected"'?>> Staff</option>


                                    </select>
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text"  value="{{$roomallocations->name}}" class="form-control" id="name" name="name" placeholder="Name Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="start_date" class="col-sm-3 text-right control-label col-form-label">Start Date</label>
                                <div class="col-sm-9">
                                    <input type="text"  value="{{$roomallocations->start_date}}" class="form-control" id="start_date" name="start_date" placeholder="Start Date Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="end_date" class="col-sm-3 text-right control-label col-form-label">End Date</label>
                                <div class="col-sm-9">
                                    <input type="text"  value="{{$roomallocations->end_date}}" class="form-control" id="end_date" name="end_date" placeholder="End Date Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="charge_per_month" class="col-sm-3 text-right control-label col-form-label">Charge Per Month</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$roomallocations->charge_per_month}}" class="form-control" id="charge_per_month"  name="charge_per_month" placeholder="Charge Per Month Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="charge_per_session" class="col-sm-3 text-right control-label col-form-label"> Charge Per Session</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$roomallocations->charge_per_session}}" class="form-control" id="charge_per_session" name="charge_per_session"placeholder="Charge Per Session Here" required>
                                </div>
                            </div>
















                            <div class="form-group row">

                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>







                            </div>








                            <div class="border-top">
                                <div class="card-body">

                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                    <button type="submit" class="btn btn-outline-warning">Update</button>
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