@extends('layouts.app')

@section('content')

    @include('layouts.AcademicLayouts.header')
    @include('layouts.AcademicLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Subject Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="Page">Add New Subject</li>
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
            @if (\Session::has('fail'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('fail') }}</p>
                </div><br />
            @endif
            <div class="row">

                <div class="col-md-4">



                    <form class="form-horizontal" method="post" action="{{url('Aadmin/SubjectS')}}" >

                        {{csrf_field()}}

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-success">
                                <h5 class="card-title m-b-0">Add New Subject </h5>
                            </div>
                            <div class="card-body">
                                {{--<div class="form-group row">--}}
                                    {{--<label for="ClassID" class="col-sm-3 text-right control-label col-form-label">Subject ID</label>--}}
                                    {{--<div class="col-sm-9">--}}
                                        {{--<input type="Text" class="form-control" id="SubjectID"  placeholder="Subject ID Here" name="SubjectID" required>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <div class="form-group row">
                                    <label for="Grade" class="col-sm-3 text-right control-label col-form-label">Grade</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" id="Grade" name="Grade" style="width: 100%; height:36px;" required>
                                            <option selected disabled>Select Grade</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ClassName" class="col-sm-3 text-right control-label col-form-label">Subject Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SubjectName" placeholder="Subject Name Here" name="SubjectName" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Range" class="col-sm-3 text-right control-label col-form-label">Range</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" id="Range" name="Range" style="width: 100%; height:36px;" required>
                                            <option selected disabled>Select Range</option>
                                            <option value="1-5">1-5</option>
                                            <option value="6-9">6-9</option>
                                            <option value="10,ll">10,11</option>
                                            <option value="12,13">12,13</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="Submit" class="btn btn-outline-success">Add</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

                <div class="col-md-8">
                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-success">
                            <h5 class="card-title m-b-0">Subjects</h5>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="font-size: 12px">Subject ID</th>
                                    <th scope="col" style="font-size: 12px">Subject Name</th>
                                    <th scope="col" style="font-size: 12px">Grade</th>
                                    <th scope="col" style="font-size: 12px">SubjectTeacherID</th>
                                    <th scope="col" style="font-size: 12px">SubjectTeacherName</th>
                                    <th scope="col" style="font-size: 12px">Range</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                </tr>
                                </thead>
                                <tbody class="customtable">

                                    @foreach($SubjectSes as $SubjectS)
                                        <tr>
                                  <td style="font-size: 12px">{{$SubjectS['SubjectID']}}</td>
                                  <td style="font-size: 12px">{{$SubjectS['SubjectName']}}</td>
                                  <td style="font-size: 12px">{{$SubjectS['Grade']}}</td>
                                  <td style="font-size: 12px">{{$SubjectS['SubjectTeacherID']}}</td>
                                  <td style="font-size: 12px">{{$SubjectS['SubjectTeacherName']}}</td>
                                    <td style="font-size: 12px">{{$SubjectS['Range']}}</td>

                                    <td style="font-size: 12px">
                                         <a href="{{action('SubjectSController@edit', $SubjectS['SubjectID'])}}" class="btn btn-dark">Edit</a>

                                         <form action="{{action('SubjectSController@destroy', $SubjectS['SubjectID'])}}" method="post">
                                                    {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-dark" type="Submit">Delete</button>
                                         </form>
                                    </td>
                                </tr>

                                @endforeach

                                    {{--@foreach($Subjects as $subject)--}}
                                        {{--<tr>--}}
                                            {{--<td style="font-size: 12px">{{$subject['SubjectID']}}</td>--}}
                                            {{--<td style="font-size: 12px">{{$subject['SubjectName']}}</td>--}}
                                            {{--<td style="font-size: 12px">{{$subject['Grade']}}</td>--}}
                                            {{--<td style="font-size: 12px">{{$subject['Range']}}</td>--}}

                                            {{--<td style="font-size: 12px">--}}
                                                {{--<a href="{{action('SubjectSController@edit', $subject['id'])}}" class="btn btn-dark">Edit</a>--}}

                                                {{--<form action="{{action('SubjectSController@destroy', $subject['id'])}}" method="post">--}}
                                                    {{--{{csrf_field()}}--}}
                                                    {{--<input name="_method" type="hidden" value="DELETE">--}}
                                                    {{--<button class="btn btn-dark" type="Submit">Delete</button>--}}
                                                {{--</form>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}

                                    {{--@endforeach--}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

            </div>

        </div>



    </div>
    @include('layouts.adminLayouts.footer')

@endsection