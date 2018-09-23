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
                                <li class="breadcrumb-item active" aria-current="Page">Assign Subject Teacher</li>
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
                        <div class="card-header bg-purple">
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

                            <!--Arrow left-->
                            {{--<li class="page-item disabled">--}}
                                {{--<a class="page-link" href="#" aria-label="Previous">--}}
                                    {{--<span aria-hidden="true">&laquo;</span>--}}
                                    {{--<span class="sr-only">Previous</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                            {{--<li class="page-item active">--}}
                                {{--<a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>--}}
                            {{--</li>--}}
                            {{$TeacherSes->links()}}
                            {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                            {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                            {{--<li class="page-item"><a class="page-link" href="#">4</a></li>--}}
                            {{--<li class="page-item"><a class="page-link" href="#">5</a></li>--}}

                            {{--<li class="page-item">--}}
                                {{--<a class="page-link" href="#" aria-label="Next">--}}
                                    {{--<span aria-hidden="true">&raquo;</span>--}}
                                    {{--<span class="sr-only">Next</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
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

                    <div class="card bg-dark text-white">
                        <div class="card-header bg-purple text-white">
                            <h5 class="card-title m-b-0">Assign Subject Teacher</h5>
                        </div>


                    <form class="form-horizontal" action="{{url('/Aadmin/SubjectTeacherS')}}" method="post">

                    {{csrf_field()}}

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="SubjectID" class="col-sm-3 text-right control-label col-form-label">Subject ID</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SubjectID" name="SubjectID" placeholder="Subject ID Here"  required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="SubjectName" class="col-sm-3 text-right control-label col-form-label">Subject Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SubjectName" name="SubjectName" placeholder="Subject Name Here" required>
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
                                <div class="form-group row">
                                    <label for="SubjectTeacherID" class="col-sm-3 text-right control-label col-form-label">Subject Teacher ID</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SubjectTeacherID" name="SubjectTeacherID" placeholder="Subject Teacher's ID Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="SubjectTeacherName" class="col-sm-3 text-right control-label col-form-label">Subject Teacher Name</label>
                                    <div class="col-sm-9">
                                        <input type="Text" class="form-control" id="SubjectTeacherName" name="SubjectTeacherName" placeholder="Subject Teacher's Name Here" required>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="Submit" class="btn btn-outline-success">Assign</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </div>



                    </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-purple text-white">
                            <h5 class="card-title m-b-0">Subject Teachers</h5>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="font-size: 12px">Subject ID</th>
                                    <th scope="col" style="font-size: 12px">Subject Name</th>
                                    <th scope="col" style="font-size: 12px">Range</th>
                                    <th scope="col" style="font-size: 12px">Subject Teacher ID</th>
                                    <th scope="col" style="font-size: 12px">Subject Teacher Name</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                </tr>
                                </thead>
                                <tbody class="customtable">

                                @foreach($SubjectTeacherSes as $subjectTeacherS)

                                <tr>
                                     <td style="font-size: 12px">{{$subjectTeacherS['SubjectID']}}</td>
                                    <td style="font-size: 12px">{{$subjectTeacherS['SubjectName']}}</td>
                                    <td style="font-size: 12px">{{$subjectTeacherS['Range']}}</td>
                                    <td style="font-size: 12px">{{$subjectTeacherS['SubjectTeacherID']}}</td>
                                    <td style="font-size: 12px">{{$subjectTeacherS['SubjectTeacherName']}}</td>

                                    <td style="font-size: 12px">
                                        <a href="{{action('SubjectTeacherSController@edit', $subjectTeacherS['id'])}}" class="btn btn-dark">Edit</a>

                                        <form action="{{action('SubjectTeacherSController@destroy', $subjectTeacherS['id'])}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-dark" type="Submit">Delete</button>
                                        </form>
                                    </td>

                                </tr>

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
    @include('layouts.AcademicLayouts.footer')
    @include('layouts.AcademicLayouts.updateSubjectTeacherDetailsModal')
@endsection