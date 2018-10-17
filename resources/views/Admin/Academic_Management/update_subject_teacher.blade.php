@extends('layouts.app')

@section('content')

    @include('layouts.AcademicLayouts.header')
    @include('layouts.AcademicLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Subject Teacher Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="Page">Update Subject Teachers</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                {{--<div class="col-md-4">--}}
                    {{--<div class="card text-white bg-success mb-3" >--}}
                        {{--<div class="card-header bg-dark">Subject Teachers</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">Everything Fine</h5>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card text-white bg-danger mb-3" >--}}
                        {{--<div class="card-header bg-dark">Notifications</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">Something Wrong in Sinhala</h5>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card text-white bg-warning mb-3" >--}}
                        {{--<div class="card-header bg-dark">Absent Teachers</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">4 subject teachers absent</h5>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
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
                <div class="col-md-12 col-md-offset-12">

                    <div class="card bg-dark text-white">
                        <div class="card-header bg-purple text-white">
                            <h5 class="card-title m-b-0">Update Subject Teachers</h5>
                        </div>


                    <form class="form-horizontal" action="{{action('SubjectTeacherSController@update', $id)}}" method="post">

                    {{csrf_field()}}
                    {{method_field('patch')}}

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="SubjectID" class="col-sm-3 text-right control-label col-form-label">Subject ID</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SubjectID" name="SubjectID" value="{{$SubjectTeacherSE->SubjectID}}"  required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="SubjectName" class="col-sm-3 text-right control-label col-form-label">Subject Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SubjectName" name="SubjectName" value="{{$SubjectTeacherSE->SubjectName}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Range" class="col-sm-3 text-right control-label col-form-label">Range</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="Range" name="Range" value="{{$SubjectTeacherSE->Range}}" required>
                                    </div>
                                </div>
                                {{--<div class="form-group row">--}}
                                    {{--<label for="Range" class="col-sm-3 text-right control-label col-form-label">Range</label>--}}
                                    {{--<div class="col-sm-9">--}}
                                        {{--<select class="select2 form-control custom-select" id="Range" name="Range" style="width: 100%; height:36px;" required>--}}
                                            {{--<option selected disabled>{{$SubjectTeacherSE->Range}}</option>--}}
                                            {{--<option value="1-5">1-5</option>--}}
                                            {{--<option value="6-9">6-9</option>--}}
                                            {{--<option value="10,ll">10,11</option>--}}
                                            {{--<option value="12,13">12,13</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group row">
                                    <label for="SubjectTeacherID" class="col-sm-3 text-right control-label col-form-label">Subject Teacher ID</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SubjectTeacherID" name="SubjectTeacherID" value="{{$SubjectTeacherSE->SubjectTeacherID}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="SubjectTeacherName" class="col-sm-3 text-right control-label col-form-label">Subject Teacher Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SubjectTeacherName" name="SubjectTeacherName" value="{{$SubjectTeacherSE->SubjectTeacherName}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="Submit" class="btn btn-outline-success">Update</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </div>
                    </form>
                    </div>


                </div>


                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

            </div>

        </div>


</div>
    @include('layouts.AcademicLayouts.footer')
@endsection