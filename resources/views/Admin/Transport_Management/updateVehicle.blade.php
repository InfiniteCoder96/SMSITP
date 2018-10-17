


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
            <div class="container-fluid">

                <div class="row">
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
                    <form class="form-horizontal" action="{{action('vehicleController@update', $id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="PATCH">



                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Registration Details</h5>
                            </div>
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="regNo" class="col-sm-3 text-right control-label col-form-label">Registration No</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->regNo}}" class="form-control" id="regNo" name="regNo" placeholder="Registration No No Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="regOwner" class="col-sm-3 text-right control-label col-form-label">Registered Owner</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->regOwner}}" class="form-control" id="regOwner" name="regOwner" placeholder="Registered Owner Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->address}}" class="form-control" id="address" name="address" placeholder="Address Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Mfg" class="col-sm-3 text-right control-label col-form-label">Month-Year of Mfg</label>
                                    <div class="col-sm-9">

                                        <input type="text" value="{{$vehicles->Mfg}}" class="form-control" id="Mfg" name="Mfg" placeholder="Month-Year of Mfg Here" required>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="chassisNo" class="col-sm-3 text-right control-label col-form-label">Chassis No</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->chassisNo}}" class="form-control" id="chassisNo" name="chassisNo" placeholder="Chassis No Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="seating_Capacity" class="col-sm-3 text-right control-label col-form-label">Seating Capacity</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->seating_Capacity}}" class="form-control" id="seating_Capacity" name="seating_Capacity" placeholder="Seating CapacityHere" required>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="wheelBase" class="col-sm-3 text-right control-label col-form-label">Wheel Base</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->wheelBase}}" class="form-control" id="wheelBase" name="wheelBase" placeholder="Wheel Base Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Regn_Authority" class="col-sm-3 text-right control-label col-form-label">Regn.Authority</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->Regn_Authority}}" class="form-control" id="Regn_Authority" name="Regn_Authority" placeholder="Regn.Authority Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Regn_date" class="col-sm-3 text-right control-label col-form-label">Regn.Date</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->Regn_date}}" class="form-control" id="Regn_date" name="Regn_date" placeholder="Regn.Date Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="regn_Valid" class="col-sm-3 text-right control-label col-form-label">Regn.Valid upto</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->regn_Valid}}" class="form-control" id="regn_Valid" name="regn_Valid" placeholder="Regn.Valid upto Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fuel" class="col-sm-3 text-right control-label col-form-label">Fuel Used</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->fuel}}" class="form-control" id="fuel" name="fuel" placeholder="Fuel Used Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="type_Of_Body" class="col-sm-3 text-right control-label col-form-label">Type Of Body</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->type_Of_Body}}" class="form-control" id="type_Of_Body" name="type_Of_Body" placeholder="Type Of Body Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="vehicle_Class" class="col-sm-3 text-right control-label col-form-label">Vehicle Class</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->vehicle_Class}}" class="form-control" id="vehicle_Class" name="vehicle_Class" placeholder="Vehicle Class Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="engineNo" class="col-sm-3 text-right control-label col-form-label">Engine No</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->engineNo}}" class="form-control" id="engineNo" name="engineNo" placeholder="Engine No Here" required>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="tax" class="col-sm-3 text-right control-label col-form-label">Tax</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->tax}}" class="form-control" id="tax" name="tax" placeholder="Tax Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colour" class="col-sm-3 text-right control-label col-form-label">Colour</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$vehicles->colour}}" class="form-control" id="colour" name="colour" placeholder="Colour Here" required>
                                    </div>
                                </div>









                                <div class="form-group row">

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

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

    </div>





    @include('layouts.AcademicLayouts.footer')

@endsection