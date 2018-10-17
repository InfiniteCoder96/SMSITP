@extends('layouts.app')

@section('content')

    @include('layouts.AcademicLayouts.header')
    @include('layouts.AcademicLayouts.sideBar')

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Sectional Head Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="Page">Assign Sectional Head</li>
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
                        <div class="card-header bg-warning">
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
            <div class="row">
                <div class="col-md-4">
                    <form class="form-horizontal" action="{{url('Aadmin/SectionalHeadS')}}" method="Post">

                        {{csrf_field()}}

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-warning mb-3 text-white">
                                <h5 class="card-title m-b-0">Assign Sectional Head Teachers</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="SectionID" class="col-sm-3 text-right control-label col-form-label">Section ID</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SectionID" name="SectionID" placeholder="Section Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="SectionName" class="col-sm-3 text-right control-label col-form-label">Section Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SectionName" name="SectionName" placeholder="Section Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Grade" class="col-sm-3 text-right control-label col-form-label">Grade</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" id="Grade" name="Grade" style="width: 100%; height:36px;" required>
                                            <option selected disabled>Select Grade</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="SectionalHeadID" class="col-sm-3 text-right control-label col-form-label">Sectional Head's ID</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SectionalHeadID" name="SectionalHeadID" placeholder="Sectional Head's ID Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="SectionalHeadName" class="col-sm-3 text-right control-label col-form-label">Sectional Head's Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SectionalHeadName" name="SectionalHeadName" placeholder="Sectional Head's Name Here" required>
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
                        <div class="card-header bg-warning text-white">
                            <h5 class="card-title m-b-0">Sectional Heads</h5>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="font-size: 12px">Section ID</th>
                                    <th scope="col" style="font-size: 12px">Section Name</th>
                                    <th scope="col" style="font-size: 12px">Grade</th>
                                    <th scope="col" style="font-size: 12px">Sectional Head ID</th>
                                    <th scope="col" style="font-size: 12px">Sectional Head Name</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                </tr>
                                </thead>
                                <tbody class="customtable">

                                {{--code for view data from databse--}}

                                {{--@foreach($students as $student)--}}

                                @foreach($SectionalHeadSes as $sectionalHeadS)

                                <tr>

                                    <td style="font-size: 12px">{{$sectionalHeadS['SectionID']}}</td>
                                    <td style="font-size: 12px">{{$sectionalHeadS['SectionName']}}</td>
                                    <td style="font-size: 12px">{{$sectionalHeadS['Grade']}}</td>
                                    <td style="font-size: 12px">{{$sectionalHeadS['SectionalHeadID']}}</td>
                                    <td style="font-size: 12px">{{$sectionalHeadS['SectionalHeadName']}}</td>

                                    <td style="font-size: 12px">
                                        <a href="{{action('SectionalHeadSController@edit', $sectionalHeadS['id'])}}" class="btn btn-dark">Edit</a>
                                        {{--<button class="btn btn-dark" href="{{action('ClassController@edit', $classS['ClassID'])}}" type="Submit">Edit</button>--}}
                                        {{--<a class="waves-effect waves-dark" href="{{action('ClassController@edit', $classS['ClassID'])}}"><i class="mdi mdi-pencil font-20" ></i></a>--}}
                                        {{--<a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i></a>--}}
                                        <form action="{{action('SectionalHeadSController@destroy', $sectionalHeadS['id'])}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-dark" type="Submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                {{--@endforeach--}}
                                    @endforeach

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