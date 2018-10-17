


@extends('layouts.app')

@section('content')

    @include('layouts.TransportHostelLayouts.header-TA')
    @include('layouts.TransportHostelLayouts.sideBar-TA')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Add Route</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Route</li>
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
                    <form class="form-horizontal" action="{{url('routes')}}" method="post">
                        {{csrf_field()}}

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Add Route</h5>
                            </div>
                            <div class="form-group row">
                                <label for="routeName" class="col-sm-3 text-right control-label col-form-label">Route Name</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control Warden Name-select" id="routeName" name="routeName" style="width: 100%; height:36px;" required>
                                        <option selected disabled>Route Name</option>
                                        <option value="Ja Ela">Ja Ela</option>
                                        <option value="Giriulla">Giriulla</option>
                                        <option value="Kurunagala">Kurunagala</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="driverName" class="col-sm-3 text-right control-label col-form-label">Driver Name</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control Warden Name-select" id="driverName" name="driverName" style="width: 100%; height:36px;" required>
                                        <option selected disabled>Driver Name</option>
                                        <option value="Saman Rathnayaka">Saman Rathnayaka</option>
                                        <option value="Kamal Fernando">Kamal Fernando</option>
                                        <option value="Sunil Pathirana">Sunil Pathirana</option>
                                        <option value="Sampath Perera">Sampath Perera</option>



                                    </select>
                                </div>


                            </div>
                                <div class="form-group row">
                                    <label for="stopName" class="col-sm-3 text-right control-label col-form-label">Stop Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="stopName" name="stopName" placeholder="Stop Name Here" required>
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="vehicle" class="col-sm-3 text-right control-label col-form-label">Vehicle</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control Warden Name-select" id="vehicle" name="vehicle" style="width: 100%; height:36px;" required>
                                        <option selected disabled>Vehicle</option>
                                        <option value="Van">Van</option>
                                        <option value="Bus">Bus</option>




                                    </select>
                                </div>


                            </div>

                                <div class="form-group row">
                                    <label for="amount" class="col-sm-3 text-right control-label col-form-label">Amount</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="amount" name="amount"  placeholder="Amount Here" required>
                                    </div>
                                </div>






                            <div class="form-group row">

                                </div>




                        </div>




                        <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-outline-success">Submit</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                    <button type="reset" class="btn btn-outline-warning">Update</button>

                                </div>
                            </div>

                    </form>
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
                                <th scope="col" style="font-size: 12px">Driver Name</th>
                                <th scope="col" style="font-size: 12px">Stop Name</th>
                                <th scope="col" style="font-size: 12px">Vehicle</th>
                                <th scope="col" style="font-size: 12px">Amount</th>
                                <th scope="col" style="font-size: 12px">Action</th>

                            </tr>
                            </thead>
                            <tbody class="customtable">





                            @foreach($routes as $routes)
                                <tr>
                                    <th>
                                        <label class="customcheckbox">
                                            <input type="checkbox" class="listCheckbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>


                                    <td style="font-size: 12px">{{$routes['routeName']}}</td>
                                    <td style="font-size: 12px">{{$routes['driverName']}}</td>
                                    <td style="font-size: 12px">{{$routes['stopName']}}</td>
                                    <td style="font-size: 12px">{{$routes['vehicle']}}</td>
                                    <td style="font-size: 12px">{{$routes['amount']}}</td>
                                    <td><a href="{{action('RouteController@edit', $routes['id'])}}" class="btn btn-warning">Edit</a>

                                        <form action="{{action('RouteController@destroy', $routes['id'])}}" method="post">
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