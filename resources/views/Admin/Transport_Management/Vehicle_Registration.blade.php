


@extends('layouts.app')

@section('content')

    @include('layouts.TransportHostelLayouts.header-TA')
    @include('layouts.TransportHostelLayouts.sideBar-TA')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Vehicle Registration</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
                                <li class="breadcrumb-item active" aria-current="page">Registration Details</li>
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
                    <form class="form-horizontal" action="{{url('vehicles')}}" method="post">
                        {{csrf_field()}}


                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Registration Details</h5>
                            </div>
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="regNo" class="col-sm-3 text-right control-label col-form-label">Registration No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="regNo" name="regNo" placeholder="Registration No No Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="regOwner" class="col-sm-3 text-right control-label col-form-label">Registered Owner</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="regOwner" name="regOwner" placeholder="Registered Owner Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Mfg" class="col-sm-3 text-right control-label col-form-label">Month-Year of Mfg</label>
                                    <div class="col-sm-9">

                                        <input type="text" class="form-control" id="Mfg" name="Mfg" placeholder="Month-Year of Mfg Here" required>
                                    </div>
                                </div>





                                <div class="form-group row">
                                    <label for="chassisNo" class="col-sm-3 text-right control-label col-form-label">Chassis No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="chassisNo" name="chassisNo" placeholder="Chassis No Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="seating_Capacity" class="col-sm-3 text-right control-label col-form-label">Seating Capacity</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="seating_Capacity" name="seating_Capacity" placeholder="Seating CapacityHere" required>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="wheelBase" class="col-sm-3 text-right control-label col-form-label">Wheel Base</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="wheelBase" name="wheelBase" placeholder="Wheel Base Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Regn_Authority" class="col-sm-3 text-right control-label col-form-label">Regn.Authority</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="Regn_Authority"  name="Regn_Authority" placeholder="Regn.Authority Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Regn_date" class="col-sm-3 text-right control-label col-form-label">Regn.Date</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="Regn_date" name="Regn_date" placeholder="Regn.Date Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="regn_Valid" class="col-sm-3 text-right control-label col-form-label">Regn.Valid upto</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="regn_Valid"  name="regn_Valid" placeholder="Regn.Valid upto Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fuel" class="col-sm-3 text-right control-label col-form-label">Fuel Used</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fuel" name="fuel" placeholder="Fuel Used Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="type_Of_Body" class="col-sm-3 text-right control-label col-form-label">Type Of Body</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="type_Of_Body" name="type_Of_Body" placeholder="Type Of Body Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="vehicle_Class" class="col-sm-3 text-right control-label col-form-label">Vehicle Class</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="vehicle_Class" name="vehicle_Class" placeholder="Vehicle Class Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="engineNo" class="col-sm-3 text-right control-label col-form-label">Engine No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="engineNo" name="engineNo" placeholder="Engine No Here" required>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="tax" class="col-sm-3 text-right control-label col-form-label">Tax</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tax" name="tax" placeholder="Tax Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colour" class="col-sm-3 text-right control-label col-form-label">Colour</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="colour" name="colour" placeholder="Colour Here" required>
                                    </div>
                                </div>









                                <div class="form-group row">

                                </div>



                            </div>




                            <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-outline-success">Save</button>
                                            <button type="reset" class="btn btn-outline-warning">Close</button>
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
                                    <th scope="col" style="font-size: 12px">regNo</th>
                                    <th scope="col" style="font-size: 12px">regOwner</th>
                                    <th scope="col" style="font-size: 12px">address</th>
                                    <th scope="col" style="font-size: 12px">Mfg</th>
                                    <th scope="col" style="font-size: 12px">chassisNo</th>
                                    <th scope="col" style="font-size: 12px">seating_Capacity</th>
                                    <th scope="col" style="font-size: 12px">wheelBase</th>
                                    <th scope="col" style="font-size: 12px">Regn_Authority</th>
                                    <th scope="col" style="font-size: 12px">Regn_date</th>
                                    <th scope="col" style="font-size: 12px">regn_Valid</th>
                                    <th scope="col" style="font-size: 12px">fuel</th>
                                    <th scope="col" style="font-size: 12px">type_Of_Body</th>
                                    <th scope="col" style="font-size: 12px">vehicle_Class</th>
                                    <th scope="col" style="font-size: 12px">engineNo</th>
                                    <th scope="col" style="font-size: 12px">tax</th>
                                    <th scope="col" style="font-size: 12px">colour</th>

                                    <th scope="col" style="font-size: 12px">Action</th>
                                </tr>
                            </thead>
                            <tbody class="customtable">
                            @foreach($vehicles as $vehicles)
                                <tr>
                                    <th>
                                        <label class="customcheckbox">
                                            <input type="checkbox" class="listCheckbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>
                                        <td style="font-size: 12px">{{$vehicles['regNo']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['regOwner']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['address']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['Mfg']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['chassisNo']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['seating_Capacity']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['wheelBase']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['Regn_Authority']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['Regn_date']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['regn_Valid']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['fuel']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['type_Of_Body']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['vehicle_Class']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['engineNo']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['tax']}}</td>
                                        <td style="font-size: 12px">{{$vehicles['colour']}}</td>
                                        <td><a href="{{action('vehicleController@edit', $vehicles['id'])}}" class="btn btn-warning">Edit</a>
                                            <form action="{{action('vehicleController@destroy', $vehicles['id'])}}" method="post">
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

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

            </div>





    @include('layouts.AcademicLayouts.footer')

@endsection