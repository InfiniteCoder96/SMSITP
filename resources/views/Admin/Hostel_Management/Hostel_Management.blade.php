@extends('layouts.app')

@section('content')

    @include('layouts.adminLayouts.header')
    @include('layouts.TransportHostelLayouts.sideBar-TA')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Hostel Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">


                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Hostel Management</li>
                                <li class="breadcrumb-item active" aria-current="page">Hostel Details</li>
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
                    <form class="form-horizontal" action="{{url('hostels')}}" method="post">
                        {{csrf_field()}}


                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Hostel Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="hostelNo" class="col-sm-3 text-right control-label col-form-label">Hostel No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="hostelNo" name="hostelNo" placeholder="Hostel No Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hostelName" class="col-sm-3 text-right control-label col-form-label">Hostel Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="hostelName" name="hostelName" placeholder="Hostel Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="description" name="description" placeholder="Description Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">

                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contactNo" class="col-sm-3 text-right control-label col-form-label">Contact Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contactNo" name="contactNo" placeholder="Contact Number Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="wardenName" class="col-sm-3 text-right control-label col-form-label">Warden Name</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control Warden Name-select" id="wardenName" name="wardenName" style="width: 100%; height:36px;" required>
                                            <option selected disabled>Warden Name</option>
                                            <option value="Chaya">Chaya</option>
                                            <option value="Ram Roy">Ram Roy</option>
                                            <option value="Rahul">Rahul</option>
                                            <option value="Sayana">Sayana</option>
                                            <option value="Anupa">Anupa</option>
                                            <option value="Kunal">Kunal</option>


                                        </select>
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
                            <th scope="col" style="font-size: 12px">description</th>
                            <th scope="col" style="font-size: 12px">address</th>
                            <th scope="col" style="font-size: 12px">contactNo</th>
                            <th scope="col" style="font-size: 12px">wardenName</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">




                        @foreach($hostels as $hostel)
                            <tr>
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </th>


                                <td style="font-size: 12px">{{$hostel['hostelNo']}}</td>
                                <td style="font-size: 12px">{{$hostel['hostelName']}}</td>
                                <td style="font-size: 12px">{{$hostel['description']}}</td>
                                <td style="font-size: 12px">{{$hostel['address']}}</td>
                                <td style="font-size: 12px">{{$hostel['contactNo']}}</td>
                                <td style="font-size: 12px">{{$hostel['wardenName']}}</td>

                                <td><a href="{{action('hostelController@edit', $hostel['hostelNo'])}}" class="btn btn-warning">Edit</a>

                                    <form action="{{action('hostelController@destroy', $hostel['hostelNo'])}}" method="post">
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