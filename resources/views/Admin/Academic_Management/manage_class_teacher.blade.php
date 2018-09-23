@extends('layouts.app')

@section('content')

    @include('layouts.AcademicLayouts.header')
    @include('layouts.AcademicLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Class Teacher Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="Page">Assign Class Teachers</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 align-content-lg-center">
                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-danger">
                            <h5 class="card-title m-b-0">Teacher Details</h5>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="font-size: 12px">Teacher ID</th>
                                    <th scope="col" style="font-size: 12px">Teacher Name</th>
                                    <th scope="col" style="font-size: 12px">Qualifications</th>
                                </tr>
                                </thead>
                                <tbody class="customtable">

                                {{--code for view data from databse--}}

                                {{--@foreach($students as $student)--}}

                                @foreach($TeacherSes as $teacherS)
                                    <tr>
                                        <td style="font-size: 12px">{{$teacherS['TeacherID']}}</td>
                                        <td style="font-size: 12px">{{$teacherS['TeacherName']}}</td>
                                        <td style="font-size: 12px">{{$teacherS['Qualifications']}}</td>
                                    </tr>

                                @endforeach
                                {{--@endforeach--}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--Pagination-->
                    <div aria-label="pagination example">
                        <ul class="pagination pg-blue">
                            {{$TeacherSes->links()}}
                        </ul>
                    </div>
                </div>

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



                    <form class="form-horizontal" method="post" action="{{url('/Aadmin/ClassTeacherS')}}" >

                        {{csrf_field()}}

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger">
                                <h5 class="card-title m-b-0">Assign Class Teachers</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="ClassID" class="col-sm-3 text-right control-label col-form-label">Class ID</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="ClassID"  placeholder="Class ID Here" name="ClassID" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ClassName" class="col-sm-3 text-right control-label col-form-label">Class Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="ClassName" placeholder="Class Name Here" name="ClassName" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ClassTeacherID" class="col-sm-3 text-right control-label col-form-label">Class Teacher ID</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="ClassTeacherID" placeholder="Class Teacher's ID Here" name="ClassTeacherID" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ClassTeacherName" class="col-sm-3 text-right control-label col-form-label">Class Teacher Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="ClassTeacherName" placeholder="Class Teacher's Name Here" name="ClassTeacherName" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Subject" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="Subject" placeholder="Subject Name Here" name="Subject" required>
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="Submit" class="btn btn-outline-success">Assign</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="col-md-8">
                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-danger">
                            <h5 class="card-title m-b-0">Class Teachers</h5>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    {{--<th>--}}
                                        {{--<label class="customcheckbox m-b-20">--}}
                                            {{--<input type="checkbox" id="mainCheckbox" />--}}
                                            {{--<span class="checkmark"></span>--}}
                                        {{--</label>--}}
                                    {{--</th>--}}
                                    <th scope="col" style="font-size: 12px">Class ID</th>
                                    <th scope="col" style="font-size: 12px">Class Name</th>
                                    <th scope="col" style="font-size: 12px">Class Teacher ID</th>
                                    <th scope="col" style="font-size: 12px">Class Teacher Name</th>
                                    <th scope="col" style="font-size: 12px">Subject</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                </tr>
                                </thead>
                                <tbody class="customtable">

                                {{--code for view data from databse--}}

                                {{--@foreach($students as $student)--}}

                                    @foreach($ClassTeacherSes as $classTeacherS)
                                        <tr>
                                    {{--<th>--}}
                                        {{--<label class="customcheckbox">--}}
                                            {{--<input type="checkbox" class="listCheckbox" />--}}
                                            {{--<span class="checkmark"></span>--}}
                                        {{--</label>--}}
                                    {{--</th>--}}


                                    <td style="font-size: 12px">{{$classTeacherS['ClassID']}}</td>
                                    <td style="font-size: 12px">{{$classTeacherS['ClassName']}}</td>
                                    <td style="font-size: 12px">{{$classTeacherS['ClassTeacherID']}}</td>
                                    <td style="font-size: 12px">{{$classTeacherS['ClassTeacherName']}}</td>
                                    <td style="font-size: 12px">{{$classTeacherS['Subject']}}</td>
                                    <td style="font-size: 12px">
                                            <a href="{{action('ClassTeacherSController@edit', $classTeacherS['id'])}}" class="btn btn-dark">Edit</a>
                                                {{--<button class="btn btn-dark" href="{{action('ClassController@edit', $classS['ClassID'])}}" type="Submit">Edit</button>--}}
                                                {{--<a class="waves-effect waves-dark" href="{{action('ClassController@edit', $classS['ClassID'])}}"><i class="mdi mdi-pencil font-20" ></i></a>--}}
                                                {{--<a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i></a>--}}
                                            <form action="{{action('ClassTeacherSController@destroy', $classTeacherS['id'])}}" method="post">
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