@extends('layouts.app')

@section('content')

    @include('layouts.TransportHostelLayouts.sideBar-TA')
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
                    <form class="form-horizontal" action="{{url('room_allocations')}}" method="post">
                        {{csrf_field()}}


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
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>



                                    </select>
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="hostelName"  class="col-sm-3 text-right control-label col-form-label">Hostel Name</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control Warden Name-select" id="hostelName" name="hostelName" style="width: 100%; height:36px;" required>
                                        <option selected disabled>Hostel Name</option>
                                        <option value="JSS">JSS Hostel</option>
                                        <option value="NEW">NEW Hostel</option>
                                        <option value="DCB">DCB Hostel</option>
                                        <option value="Sherin">Sherin Hostel</option>

                                    </select>
                                </div>
                                </div>


                            <div class="form-group row">
                                <label for="roomNo" class="col-sm-3 text-right control-label col-form-label">Room No</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control Warden Name-select" id="roomNo" name="roomNo"  style="width: 100%; height:36px;" required>
                                        <option selected disabled>Room No</option>
                                        <option value="1A">1A</option>
                                        <option value="1B">1B</option>
                                        <option value="1C">1C</option>
                                        <option value="1C">1C</option>
                                        <option value="1D">1D</option>
                                        <option value="1E">1E</option>
                                        <option value="2A">2A</option>
                                        <option value="2B">2B</option>
                                        <option value="2C">2C</option>
                                        <option value="2C">2C</option>
                                        <option value="2D">2D</option>
                                        <option value="2E">2E</option>


                                    </select>
                                </div>
                            </div>

                                <div class="form-group row">
                                    <label for="reg_no" class="col-sm-3 text-right control-label col-form-label">Reg.No</label>
                                    <div class="col-sm-9">

                                        <input type="text" class="form-control" id="reg_no" name="reg_no" placeholder="Reg.No Here" required>
                                    </div>
                                </div>

                            <div class="form-group row">
                                <label for="reg_type" class="col-sm-3 text-right control-label col-form-label">Reg.Type</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control Warden Name-select" id="reg_type" name="reg_type" style="width: 100%; height:36px;" required>
                                        <option selected disabled>Reg.Type</option>
                                        <option value="Student">Student</option>
                                        <option value="Staff">Staff</option>


                                    </select>
                                </div>
                                </div>




                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name Here" required>
                                    </div>
                                </div>

                            <div class="form-group row">
                                <label for="start_date" class="col-sm-3 text-right control-label col-form-label">Start Date</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="start_date"  name="start_date" placeholder="Start Date Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="end_date" class="col-sm-3 text-right control-label col-form-label">End Date</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="end_date" name="end_date" placeholder="End Date Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="charge_per_month" class="col-sm-3 text-right control-label col-form-label">Charge Per Month</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="charge_per_month" name="charge_per_month" placeholder="Charge Per Month Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="charge_per_session" class="col-sm-3 text-right control-label col-form-label"> Charge Per Session</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="charge_per_session" name="charge_per_session" placeholder="Charge Per Session Here" required>
                                </div>
                            </div>


                               <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-outline-success">Save</button>
                                            <button type="reset" class="btn btn-outline-warning">Clear</button>
                                            <button type="reset" class="btn btn-outline-warning">Delete</button>
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
                            <th scope="col" style="font-size: 12px">hostelNo</th>
                            <th scope="col" style="font-size: 12px">hostelName</th>
                            <th scope="col" style="font-size: 12px">reg_no</th>
                            <th scope="col" style="font-size: 12px">reg_type</th>
                            <th scope="col" style="font-size: 12px">name</th>
                            <th scope="col" style="font-size: 12px">start_date</th>
                            <th scope="col" style="font-size: 12px">end_date</th>
                            <th scope="col" style="font-size: 12px">charge_per_month</th>
                            <th scope="col" style="font-size: 12px">charge_per_session</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">




                        @foreach($roomallocations as $roomallocation)
                            <tr>
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </th>


                                <td style="font-size: 12px">{{$roomallocation['hostelNo']}}</td>
                                <td style="font-size: 12px">{{$roomallocation['hostelName']}}</td>
                                <td style="font-size: 12px">{{$roomallocation['roomNo']}}</td>
                                <td style="font-size: 12px">{{$roomallocation['reg_no']}}</td>
                                <td style="font-size: 12px">{{$roomallocation['reg_type']}}</td>
                                <td style="font-size: 12px">{{$roomallocation['name']}}</td>
                                <td style="font-size: 12px">{{$roomallocation['start_date']}}</td>
                                <td style="font-size: 12px">{{$roomallocation['end_date']}}</td>
                                <td style="font-size: 12px">{{$roomallocation['charge_per_month']}}</td>
                                <td style="font-size: 12px">{{$roomallocation['charge_per_session']}}</td>




                                <td><a href="{{action('allocationController@edit', $roomallocation['hostelNo'])}}" class="btn btn-warning">Edit</a>

                                    <form action="{{action('allocationController@destroy', $roomallocation['hostelNo'])}}" method="post">
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

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

            </div>





    @include('layouts.AcademicLayouts.footer')

@endsection