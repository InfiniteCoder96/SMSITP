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
                                <li class="breadcrumb-item active" aria-current="Page">Add New Class</li>
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
            @if (\Session::has('fail'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('fail') }}</p>
                </div><br />
            @endif

                @if (\Session::has('UnSuccess'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('UnSuccess') }}</p>
                    </div><br />
                @endif
            <div class="row">

                <div class="col-md-4">



                    <form class="form-horizontal" method="post" action="{{url('Aadmin/ClassS')}}" >

                        {{csrf_field()}}

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-orange">
                                <h5 class="card-title m-b-0">Add New Class </h5>
                            </div>
                            <div class="card-body">
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
                                    <label for="ClassName" class="col-sm-3 text-right control-label col-form-label">Class Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="ClassName" placeholder="Class Name Here" name="ClassName" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NoOfStudents" class="col-sm-3 text-right control-label col-form-label">Number of Students </label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="NoOfStudents" placeholder="No of Students Here" name="NoOfStudents" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NoOfStudents" class="col-sm-3 text-right control-label col-form-label">Venue</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="Venue" placeholder="Venue Here" name="Venue" required>
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
                        <div class="card-header bg-orange">
                            <h5 class="card-title m-b-0">Classes</h5>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="font-size: 12px">Class ID</th>
                                    <th scope="col" style="font-size: 12px">Class Name</th>
                                    <th scope="col" style="font-size: 12px">Grade</th>
                                    <th scope="col" style="font-size: 12px">ClassTeacher ID</th>
                                    <th scope="col" style="font-size: 12px">CLassTeacher Name</th>
                                    <th scope="col" style="font-size: 12px">No of Students</th>
                                    <th scope="col" style="font-size: 12px">Venue</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                </tr>
                                </thead>
                                <tbody class="customtable">

                                {{--code for view data from databse--}}

                                {{--@foreach($students as $student)--}}

                                @foreach($ClassSes as $classS)
                                        <tr>

                                    <td style="font-size: 12px">{{$classS['ClassID']}}</td>
                                    <td style="font-size: 12px">{{$classS['ClassName']}}</td>
                                    <td style="font-size: 12px">{{$classS['Grade']}}</td>
                                    <td style="font-size: 12px">{{$classS['ClassTeacherID']}}</td>
                                    <td style="font-size: 12px">{{$classS['ClassTeacherName']}}</td>
                                    <td style="font-size: 12px">{{$classS['NoOfStudents']}}</td>
                                    <td style="font-size: 12px">{{$classS['Venue']}}</td>
                                    <td style="font-size: 12px">
                                            <a href="{{action('ClassController@edit', $classS['ClassID'])}}" class="btn btn-dark">Edit</a>
                                            {{--<button class="btn btn-dark" href="{{action('ClassController@edit', $classS['ClassID'])}}" type="Submit">Edit</button>--}}
                                            {{--<a class="waves-effect waves-dark" href="{{action('ClassController@edit', $classS['ClassID'])}}"><i class="mdi mdi-pencil font-20" ></i></a>--}}
                                            {{--<a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i></a>--}}
                                        <form action="{{action('ClassController@destroy', $classS['ClassID'])}}" method="post">
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

            </div>

        </div>



    </div>
    @include('layouts.adminLayouts.footer')

@endsection