@extends('layouts.app')

@section('content')

    @include('layouts.AcademicLayouts.header')
    @include('layouts.AcademicLayouts.sideBar')

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">

                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Classroom Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="Page">Update Classes</li>
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

                    {{--<div class="col-lg-1 col-offset-6 centered">--}}

                    <form class="form-horizontal" method="Post" action="{{action('ClassController@update',$ClassID)}}" >

                        {{csrf_field()}}
                        {{method_field('patch')}}

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-orange">
                                <h5 class="card-title m-b-0">Update Classes</h5>
                            </div>
                            <div class="card-body">
                                {{--<div class="form-group row">--}}
                                    {{--<label for="ClassID" class="col-sm-3 text-right control-label col-form-label">Class ID</label>--}}
                                    {{--<div class="col-sm-9">--}}
                                        {{--<input type="Text" class="form-control" id="ClassID"  value="{{$ClassE->ClassID}}" name="ClassID" required>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <div class="form-group row">
                                    <label for="ClassName" class="col-sm-3 text-right control-label col-form-label">Class Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="ClassName" value="{{$ClassE->ClassName}}" name="ClassName" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="Grade" class="col-sm-3 text-right control-label col-form-label">Grade</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="Grade" value="0{{$ClassE->Grade}}" name="Grade" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NoOfStudents" class="col-sm-3 text-right control-label col-form-label">Number of Students </label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="NoOfStudents" value="{{$ClassE->NoOfStudents}}" name="NoOfStudents" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NoOfStudents" class="col-sm-3 text-right control-label col-form-label">Venue</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="Venue" value="{{$ClassE->Venue}}" name="Venue" required>
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
                {{--<div class="col-md-8">--}}
                    {{--<div class="card bg-secondary text-white">--}}
                        {{--<div class="card-header bg-orange">--}}
                            {{--<h5 class="card-title m-b-0">Classes</h5>--}}
                        {{--</div>--}}

                        {{--<div class="table-responsive">--}}
                            {{--<table class="table">--}}
                                {{--<thead class="thead-dark">--}}
                                {{--<tr>--}}
                                    {{--<th>--}}
                                        {{--<label class="customcheckbox m-b-20">--}}
                                            {{--<input type="checkbox" id="mainCheckbox" />--}}
                                            {{--<span class="checkmark"></span>--}}
                                        {{--</label>--}}
                                    {{--</th>--}}
                                    {{--<th scope="col" style="font-size: 12px">Class ID</th>--}}
                                    {{--<th scope="col" style="font-size: 12px">Class Name</th>--}}
                                    {{--<th scope="col" style="font-size: 12px">No of Students</th>--}}
                                    {{--<th scope="col" style="font-size: 12px">Venue</th>--}}
                                    {{--<th scope="col" style="font-size: 12px">Action</th>--}}

                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody class="customtable">--}}

                                {{--code for view data from databse--}}

                                {{--@foreach($students as $student)--}}

                                {{--@foreach($ClassSUes as $ClassSU)--}}
                                    {{--<tr>--}}
                                        {{--<th>--}}
                                        {{--<label class="customcheckbox">--}}
                                        {{--<input type="checkbox" class="listCheckbox" />--}}
                                        {{--<span class="checkmark"></span>--}}
                                        {{--</label>--}}
                                        {{--</th>--}}


                                        {{--<td style="font-size: 12px">{{$classS['ClassID']}}</td>--}}
                                        {{--<td style="font-size: 12px">{{$classS['ClassName']}}</td>--}}
                                        {{--<td style="font-size: 12px">{{$classS['NoOfStudents']}}</td>--}}
                                        {{--<td style="font-size: 12px">{{$classS['Venue']}}</td>--}}
                                        {{--<td style="font-size: 12px">--}}
                                            {{--<a href="{{action('ClassController@edit', $classS['ID'])}}" class="btn btn-dark">Edit</a>--}}
                                            {{--<button class="btn btn-dark" href="{{action('ClassController@edit', $classS['ClassID'])}}" type="Submit">Edit</button>--}}
                                            {{--<a class="waves-effect waves-dark" href="{{action('ClassController@edit', $classS['ClassID'])}}"><i class="mdi mdi-pencil font-20" ></i></a>--}}
                                            {{--<a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i></a>--}}
                                            {{--<form action="{{action('ClassController@destroy', $classS['ID'])}}" method="post">--}}
                                                {{--{{csrf_field()}}--}}
                                                {{--<input name="_method" type="hidden" value="DELETE">--}}
                                                {{--<button class="btn btn-dark" type="Submit">Delete</button>--}}
                                            {{--</form>--}}
                                        {{--</td>--}}

                                        {{--<td style="font-size: 12px">--}}
                                        {{--<a  ><button class="btn btn-dark" data-toggle="modal" data-target="#updateClassTeacherDetailsModal"--}}

                                        {{--data-ClassID="{{$classTeacher['ClassID']}}"--}}
                                        {{--data-ClassName="{{$classTeacher['ClassName']}}"--}}
                                        {{--data-ClassTeacher="{{$classTeacher['ClassTeacher']}}"--}}
                                        {{--data-Subject="{{$classTeacher['Subject']}}"--}}
                                        {{--data-NoOfStudents="{{$classTeacher['NoOfStudents']}}"--}}
                                        {{--type="button">Edit</button></a>--}}

                                        {{--<form action="{{action('ClassTeacherController@destroy', $classTeacher['ClassID'])}}" method="post">--}}
                                        {{--{{csrf_field()}}--}}
                                        {{--<input name="_method" type="hidden" value="DELETE">--}}
                                        {{--<button class="btn btn-dark" type="Submit">Delete</button>--}}
                                        {{--</form>--}}
                                        {{--@include('layouts.AcademicLayouts.updateClassTeacherDetailsModal')--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}

                                {{--@endforeach--}}
                                {{--@endforeach--}}

                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

            </div>

        </div>
        </div>


    @include('layouts.adminLayouts.footer')

@endsection