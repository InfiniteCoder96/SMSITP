@extends('layouts.app')

@section('content')

    @include('layouts.AcademicLayouts.header')
    @include('layouts.AcademicLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Section Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="Page">Update Sections</li>
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
                        {{--<div class="card-header bg-dark">Class Teachers</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">Everything Fine</h5>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card text-white bg-danger mb-3" >--}}
                        {{--<div class="card-header bg-dark">Notifications</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">Something Wrong in Class 8-A</h5>--}}

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



                    <form class="form-horizontal" method="post" action="{{action('SectionSController@update', $SectionID)}}" >

                        {{csrf_field()}}
                        {{method_field('patch')}}

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-info">
                                <h5 class="card-title m-b-0">Update Sections</h5>
                            </div>
                            <div class="card-body">
                                {{--<div class="form-group row">--}}
                                    {{--<label for="SectionID" class="col-sm-3 text-right control-label col-form-label">Section ID</label>--}}
                                    {{--<div class="col-sm-9">--}}
                                        {{--<input type="Text" class="form-control" id="SectionID" name="SectionID" value="{{$SectionSE->SectionID}}" required>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group row">--}}
                                    {{--<label for="Grade" class="col-sm-3 text-right control-label col-form-label">Grade</label>--}}
                                    {{--<div class="col-sm-9">--}}
                                        {{--<select class="select2 form-control custom-select" value="{{$SectionSE->Grade}}" id="Grade" name="Grade" style="width: 100%; height:36px;" required>--}}
                                            {{--<option selected disabled>Select Grade</option>--}}
                                            {{--<option value="01">01</option>--}}
                                            {{--<option value="02">02</option>--}}
                                            {{--<option value="03">03</option>--}}
                                            {{--<option value="04">04</option>--}}
                                            {{--<option value="05">05</option>--}}
                                            {{--<option value="06">06</option>--}}
                                            {{--<option value="07">07</option>--}}
                                            {{--<option value="08">08</option>--}}
                                            {{--<option value="09">09</option>--}}
                                            {{--<option value="10">10</option>--}}
                                            {{--<option value="11">11</option>--}}
                                            {{--<option value="12">12</option>--}}
                                            {{--<option value="13">13</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group row">
                                    <label for="Grade" class="col-sm-3 text-right control-label col-form-label">Grade</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="Grade" name="Grade" value="0{{$SectionSE->Grade}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="SectionName" class="col-sm-3 text-right control-label col-form-label">Section Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SectionName" name="SectionName" value="{{$SectionSE->SectionName}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NoOfClasses" class="col-sm-3 text-right control-label col-form-label">Number of Classes</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="NoOfClasses" name="NoOfClasses" value="{{$SectionSE->NoOfClasses}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="NoOfStudents" class="col-sm-3 text-right control-label col-form-label">Number of Students</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="NoOfStudents" name="NoOfStudents" value="{{$SectionSE->NoOfStudents}}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="Submit" class="btn btn-outline-success">Update</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

            </div>

        </div>



    </div>
    @include('layouts.adminLayouts.footer')

@endsection