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
                                <li class="breadcrumb-item active" aria-current="Page">Add New Section</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">

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



                    <form class="form-horizontal" method="post" action="{{url('/Aadmin/SectionS')}}" >

                        {{csrf_field()}}

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-info">
                                <h5 class="card-title m-b-0">Add New Section</h5>
                            </div>
                            <div class="card-body">
                                {{--<div class="form-group row">--}}
                                    {{--<label for="SectionID" class="col-sm-3 text-right control-label col-form-label">Section ID</label>--}}
                                    {{--<div class="col-sm-9">--}}
                                        {{--<input type="Text" class="form-control" id="SectionID" name="SectionID" placeholder="Section Here" required>--}}
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
                                    <label for="SectionName" class="col-sm-3 text-right control-label col-form-label">Section Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SectionName" name="SectionName" placeholder="Section Name Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NoOfClasses" class="col-sm-3 text-right control-label col-form-label">Number of Classes</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="NoOfClasses" name="NoOfClasses" placeholder="Number of Classes Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="NoOfStudents" class="col-sm-3 text-right control-label col-form-label">Number of Students</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="NoOfStudents" name="NoOfStudents" placeholder="Number of Students Here" required>
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
                        <div class="card-header bg-info">
                            <h5 class="card-title m-b-0">Sections</h5>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="font-size: 12px">Section ID</th>
                                    <th scope="col" style="font-size: 12px">Section Name</th>
                                    <th scope="col" style="font-size: 12px">Grade</th>
                                    <th scope="col" style="font-size: 12px">SectionalHeadID</th>
                                    <th scope="col" style="font-size: 12px">SectionalHeadName</th>
                                    <th scope="col" style="font-size: 12px">Number of Classes</th>
                                    <th scope="col" style="font-size: 12px">Number of Students</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                </tr>
                                </thead>
                                <tbody class="customtable">

                                {{--code for view data from databse--}}

                                {{--@foreach($students as $student)--}}

                                    @foreach($SectionSes as $sectionS)
                                        <tr>
                                    {{--<th>--}}
                                        {{--<label class="customcheckbox">--}}
                                            {{--<input type="checkbox" class="listCheckbox" />--}}
                                            {{--<span class="checkmark"></span>--}}
                                        {{--</label>--}}
                                    {{--</th>--}}


                                    <td style="font-size: 12px">{{$sectionS['SectionID']}}</td>
                                    <td style="font-size: 12px">{{$sectionS['SectionName']}}</td>
                                    <td style="font-size: 12px">{{$sectionS['Grade']}}</td>
                                            <td style="font-size: 12px">{{$sectionS['SectionTeacherID']}}</td>
                                            <td style="font-size: 12px">{{$sectionS['SectionTeacherName']}}</td>
                                    <td style="font-size: 12px">{{$sectionS['NoOfClasses']}}</td>
                                    <td style="font-size: 12px">{{$sectionS['NoOfStudents']}}</td>
                                            <td style="font-size: 12px">
                                                <a href="{{action('SectionSController@edit', $sectionS['SectionID'])}}" class="btn btn-dark">Edit</a>
                                                {{--<button class="btn btn-dark" href="{{action('ClassController@edit', $classS['ClassID'])}}" type="Submit">Edit</button>--}}
                                                {{--<a class="waves-effect waves-dark" href="{{action('ClassController@edit', $classS['ClassID'])}}"><i class="mdi mdi-pencil font-20" ></i></a>--}}
                                                {{--<a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i></a>--}}
                                                <form action="{{action('SectionSController@destroy', $sectionS['SectionID'])}}" method="post">
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-dark" type="Submit">Delete</button>
                                                </form>
                                     </td>

                                </tr>

                                @endforeach
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