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
                                <li class="breadcrumb-item active" aria-current="page">Students</li>
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
                    <form class="form-horizontal" action="{{url('s_students')}}" method="post">
                        {{csrf_field()}}



                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Add New Student</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="student_id" class="col-sm-3 text-right control-label col-form-label">Student ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="student_id" placeholder="Student ID Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="student_name" class="col-sm-3 text-right control-label col-form-label">Student Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="student_name" placeholder="Student Name Here" required>
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
                                        <input type="file" class="form-control" name="approval" placeholder="approval  Here" required>
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
                                            <h5 class="card-title m-b-0">Sport Students Details</h5>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="col-sm-3">


                                        </div>
                                    <form action="{{url('search')}}" method="get" class="form-horizontal">
                                        {{csrf_field()}}
                                        <div class="col-sm-3">
                                            <input type="text" name="search_student" class="form-control" id="search_student" placeholder="Search">
                                        </div>
                                        <button class="btn btn-danger btn-xm" type="submit">Search</button>
                                    </form>
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
                                            <th scope="col" style="font-size: 12px">Student ID</th>
                                            <th scope="col" style="font-size: 12px">Student Name</th>
                                            <th scope="col" style="font-size: 12px">Sports ID</th>
                                            <th scope="col" style="font-size: 12px">Approval Letter</th>
                                            <th scope="col" style="font-size: 12px">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody class="customtable">
                                        @foreach($categories as $student)




                                        <tr>
                                            <th>
                                                <label class="customcheckbox">
                                                    <input type="checkbox" class="listCheckbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </th>


                                            <td style="font-size: 12px">{{$student['student_id']}}</td>
                                            <td style="font-size: 12px">{{$student['student_name']}}</td>
                                            <td style="font-size: 12px">{{$student['sport_id']}}</td>
                                            <td style="font-size: 12px">{{$student['approval']}}</td>
                                            <td style="font-size: 12px">


                                                <a class="waves-effect waves-dark" href="{{action('s_studentController@edit', $student['student_id'])}}"><i class="mdi mdi-pencil font-20"></i></a>

                                                <form action="{{action('s_studentController@destroy', $student['student_id'])}}" method="post">

                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-outline-success" type="submit">Delete</button>
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
    {{--@include('layouts.NonAcademicLayouts.updateStudentmodal')--}}
    @include('layouts.AcademicLayouts.footer')

@endsection