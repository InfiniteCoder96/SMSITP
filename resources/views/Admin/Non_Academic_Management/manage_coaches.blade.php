@extends('layouts.app')

@section('content')

    @include('layouts.NonAcademicLayouts.header')
    @include('layouts.NonAcademicLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Sport Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sport Management</li>
                                <li class="breadcrumb-item active" aria-current="page">Coach</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <h2></h2><br  />
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


            <div class="row">
                <div class="col-md-4">
                    <form class="form-horizontal" action="{{url('coaches')}}" method="post">
                        {{csrf_field()}}


                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Add New Coach</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="coach_id" class="col-sm-3 text-right control-label col-form-label">Coach ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="coach_id" placeholder="Coach ID Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="coach_name" class="col-sm-3 text-right control-label col-form-label">Coach Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="coach_name" placeholder="Coach Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sport_id" class="col-sm-3 text-right control-label col-form-label">Sports ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="sport_id" placeholder="Sport ID Name Here" required>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="approval" class="col-sm-3 text-right control-label col-form-label">Approval Letter</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="approval" placeholder="approval name Here" required>
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


                    <div class="col-md-12">


                        <div class="card bg-secondary text-white">
                            <div class="card-header bg-info text-white">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <h5 class="card-title m-b-0">Sport Coach Details</h5>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="col-sm-3">


                                    </div>

                                    <div class="col-sm-3">
                                        <input type="text" name="query" class="form-control input-sm" id="searchInput" placeholder="Search">
                                    </div>
                                    <button class="btn btn-danger btn-xm">Search</button>
                                </div>


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
                                        <th scope="col" style="font-size: 12px">Coach ID</th>
                                        <th scope="col" style="font-size: 12px">Coach Name</th>
                                        <th scope="col" style="font-size: 12px">Sports ID</th>
                                        <th scope="col" style="font-size: 12px">Details</th>
                                        <th scope="col" style="font-size: 12px">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody class="customtable">
                                    @foreach($categories as $coach)





                                    <tr>
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>


                                        <td style="font-size: 12px">{{$coach['coach_id']}}</td>
                                        <td style="font-size: 12px">{{$coach['coach_name']}}</td>
                                        <td style="font-size: 12px">{{$coach['sport_id']}}</td>
                                        <td style="font-size: 12px">{{$coach['approval']}}</td>
                                        <td style="font-size: 12px">
                                            <a class="waves-effect waves-dark" href="{{action('coachController@edit', $coach['coach_id'])}}"><i class="mdi mdi-pencil font-20"></i></a>

                                            <form action="{{action('coachController@destroy', $coach['coach_id'])}}" method="post">

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
                            <div class="card-footer">
                                <div class="row">
                                    <p>Page : 1 of 1</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-warning btn-md">First</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-warning btn-md">Prev</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-warning btn-md">Next</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-warning btn-md">Last</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>


                            </div>
                        </div>

                    </div>

                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->




                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                </div>

            </div>
        </div>
    </div>


    @include('layouts.AcademicLayouts.footer')

@endsection