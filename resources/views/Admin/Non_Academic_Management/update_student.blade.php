@extends('layouts.app')



@section('content')

    @include('layouts.NonAcademicLayouts.header')
    @include('layouts.NonAcademicLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Sports Management</h4>
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




            <div class="row">
                <div class="col-md-4">

                    <form class="form-horizontal" action="{{action('s_studentController@update',$student_id)}}" method="post">

                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Update New Student</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="student_id" class="col-sm-3 text-right control-label col-form-label">Student ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="student_id"  value="{{$s_student->student_id}}" placeholder="Student ID Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="student_name" class="col-sm-3 text-right control-label col-form-label">Student Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="student_name" value="{{$s_student->student_name}}" placeholder="Student Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sport_id" class="col-sm-3 text-right control-label col-form-label">Sport ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="sport_id" value="{{$s_student->sport_id}}" placeholder="Sport ID Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="approval" class="col-sm-3 text-right control-label col-form-label">Approval letter</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="approval" value="{{$s_student->approval}}" placeholder="Approval Here" required>
                                    </div>





                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-outline-success">Update</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </div>

                        </div>







                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    @include('layouts.AcademicLayouts.footer')

@endsection