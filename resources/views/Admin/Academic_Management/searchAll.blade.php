@extends('layouts.app')

@section('content')

    @include('layouts.AcademicLayouts.header')
    @include('layouts.AcademicLayouts.sideBar')

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Search</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="Page">Search Class</li>
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

                <div class="row">

                    <div class="col-md-4">

                        <form class="form-horizontal"  method="get" action="{{url('Aadmin/searchAll')}}">

                            {{csrf_field()}}

                            <div class="card bg-dark text-white">
                                <div class="card-header bg-info">
                                    <h5 class="card-title m-b-0 ">Search</h5>
                                </div>
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="Range" class="col-sm-3 text-right control-label col-form-label">Category</label>
                                            <div class="col-sm-9">
                                                <select class="select2 form-control custom-select" id="Category" name="Category" style="width: 100%; height:36px;" required>
                                                    <option selected disabled >Select Category</option>
                                                    <option value="Classes">Classes</option>
                                                    <option value="ClassTeachers">Class Teachers</option>
                                                    <option value="Subjects">Subjects</option>
                                                    <option value="SubjectTeachers">Subject Teachers</option>
                                                    <option value="Sections">Sections</option>
                                                    <option value="SectionTeachers">Section Teachers</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ID" class="col-sm-3 text-right control-label col-form-label">ID</label>
                                            <div class="col-sm-9">
                                                <input type="Text" class="form-control" id="ID" placeholder="ID Here" name="ID" required>
                                            </div>
                                        </div>

                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="Submit" class="btn btn-outline-success">Search</button>
                                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                    @if($ClassResults!=null)
                        <div class="col-md-8">
                            <div class="card bg-secondary text-white">
                                <div class="card-header bg-info">
                                    <h5 class="card-title m-b-0">Classes</h5>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" style="font-size: 12px">Class ID</th>
                                            <th scope="col" style="font-size: 12px">Class Name</th>
                                            <th scope="col" style="font-size: 12px">ClassTeacherID</th>
                                            <th scope="col" style="font-size: 12px">ClassTeacherName</th>
                                            <th scope="col" style="font-size: 12px">No of Students</th>
                                            <th scope="col" style="font-size: 12px">Venue</th>
                                            <th scope="col" style="font-size: 12px">Action</th>

                                        </tr>
                                        </thead>

                                        <tbody class="customtable">

                                        @foreach($ClassResults as $classResult)

                                            <tr>

                                                <td style="font-size: 12px">{{$classResult['ClassID']}}</td>
                                                <td style="font-size: 12px">{{$classResult['ClassName']}}</td>
                                                <td style="font-size: 12px">{{$classResult['NoOfStudents']}}</td>
                                                <td style="font-size: 12px">{{$classResult['ClassTeacherID']}}</td>
                                                <td style="font-size: 12px">{{$classResult['ClassTeacherName']}}</td>
                                                <td style="font-size: 12px">{{$classResult['Venue']}}</td>
                                                <td style="font-size: 12px">
                                                    <a href="{{action('ClassController@edit', $classResult['id'])}}" class="btn btn-dark">Edit</a>

                                                    <form action="{{action('ClassController@destroy', $classResult['id'])}}" method="post">
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
                     @endif

                    @if($ClassTResults!=null)
                        <div class="col-md-8">
                            <div class="card bg-secondary text-white">
                                <div class="card-header bg-info">
                                    <h5 class="card-title m-b-0">Classes Teachers</h5>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col" style="font-size: 12px">Class ID</th>
                                                <th scope="col" style="font-size: 12px">Class Name</th>
                                                <th scope="col" style="font-size: 12px">Class Teacher ID</th>
                                                <th scope="col" style="font-size: 12px">Class Teacher Name</th>
                                                <th scope="col" style="font-size: 12px">Subject</th>
                                                <th scope="col" style="font-size: 12px">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody class="customtable">

                                        @foreach($ClassTResults as $classTResult)

                                            <tr>

                                                <td style="font-size: 12px">{{$classTResult['ClassID']}}</td>
                                                <td style="font-size: 12px">{{$classTResult['ClassName']}}</td>
                                                <td style="font-size: 12px">{{$classTResult['NoOfStudents']}}</td>
                                                <td style="font-size: 12px">{{$classTResult['Venue']}}</td>
                                                <td style="font-size: 12px">
                                                    <a href="{{action('ClassController@edit', $classTResult['id'])}}" class="btn btn-dark">Edit</a>

                                                    <form action="{{action('ClassController@destroy', $classTResult['id'])}}" method="post">
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
                    @endif

                    @if($SubjectResults!=null)
                        <div class="col-md-8">
                            <div class="card bg-secondary text-white">
                                <div class="card-header bg-info">
                                    <h5 class="card-title m-b-0">Subjects</h5>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" style="font-size: 12px">Subject ID</th>
                                            <th scope="col" style="font-size: 12px">Subject Name</th>
                                            <th scope="col" style="font-size: 12px">Subject Teacher ID</th>
                                            <th scope="col" style="font-size: 12px">Subject Teacher Name</th>
                                            <th scope="col" style="font-size: 12px">Range</th>
                                            <th scope="col" style="font-size: 12px">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody class="customtable">

                                        @foreach($SubjectResults as $subjectResult)
                                            <tr>
                                                <td style="font-size: 12px">{{$subjectResult['SubjectID']}}</td>
                                                <td style="font-size: 12px">{{$subjectResult['SubjectName']}}</td>
                                                <td style="font-size: 12px">{{$subjectResult['SubjectTeacherID']}}</td>
                                                <td style="font-size: 12px">{{$subjectResult['SubjectTeacherName']}}</td>
                                                <td style="font-size: 12px">{{$subjectResult['Range']}}</td>

                                                <td style="font-size: 12px">
                                                    <a href="{{action('SubjectSController@edit', $subjectResult['id'])}}" class="btn btn-dark">Edit</a>

                                                    <form action="{{action('SubjectSController@destroy', $subjectResult['id'])}}" method="post">
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

                    @endif

                    @if($SubjectTResults!=null)
                        <div class="col-md-8">
                            <div class="card bg-secondary text-white">
                                <div class="card-header bg-info text-white">
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

                                        @foreach($SubjectTResults as $subjectTResult)

                                            <tr>
                                                <td style="font-size: 12px">{{$subjectTResult['SubjectID']}}</td>
                                                <td style="font-size: 12px">{{$subjectTResult['SubjectName']}}</td>
                                                <td style="font-size: 12px">{{$subjectTResult['Range']}}</td>
                                                <td style="font-size: 12px">{{$subjectTResult['SubjectTeacherID']}}</td>
                                                <td style="font-size: 12px">{{$subjectTResult['SubjectTeacherName']}}</td>

                                                <td style="font-size: 12px">
                                                    <a href="{{action('SubjectTeacherSController@edit', $subjectTResult['id'])}}" class="btn btn-dark">Edit</a>

                                                    <form action="{{action('SubjectTeacherSController@destroy', $subjectTResult['id'])}}" method="post">
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

                    @endif

                    @if($SectionResults!=null)
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
                                            <th scope="col" style="font-size: 12px">Number of Classes</th>
                                            <th scope="col" style="font-size: 12px">Number of Students</th>
                                            <th scope="col" style="font-size: 12px">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody class="customtable">

                                        @foreach($SectionResults as $sectionResult)
                                            <tr>
                                                <td style="font-size: 12px">{{$sectionResult['SectionID']}}</td>
                                                <td style="font-size: 12px">{{$sectionResult['SectionName']}}</td>
                                                <td style="font-size: 12px">{{$sectionResult['Grade']}}</td>
                                                <td style="font-size: 12px">{{$sectionResult['SectionalHeadID']}}</td>
                                                <td style="font-size: 12px">{{$sectionResult['SectionalHeadName']}}</td>
                                                <td style="font-size: 12px">{{$sectionResult['NoOfClasses']}}</td>
                                                <td style="font-size: 12px">{{$sectionResult['NoOfStudents']}}</td>
                                                <td style="font-size: 12px">
                                                    <a href="{{action('SectionSController@edit', $sectionResult['id'])}}" class="btn btn-dark">Edit</a>

                                                    <form action="{{action('SectionSController@destroy', $sectionResult['id'])}}" method="post">
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
                    @endif

                    @if($SectionHResults!=null)
                        <div class="col-md-8">
                            <div class="card bg-secondary text-white">
                                <div class="card-header bg-info text-white">
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

                                        @foreach($SectionHResults as $sectionHResultS)
                                            <tr>
                                                <td style="font-size: 12px">{{$sectionHResultS['SectionID']}}</td>
                                                <td style="font-size: 12px">{{$sectionHResultS['SectionName']}}</td>
                                                <td style="font-size: 12px">{{$sectionHResultS['Grade']}}</td>
                                                <td style="font-size: 12px">{{$sectionHResultS['SectionalHeadID']}}</td>
                                                <td style="font-size: 12px">{{$sectionHResultS['SectionalHeadName']}}</td>

                                                <td style="font-size: 12px">
                                                    <a href="{{action('SectionalHeadSController@edit', $sectionHResultS['id'])}}" class="btn btn-dark">Edit</a>

                                                    <form action="{{action('SectionalHeadSController@destroy', $sectionHResultS['id'])}}" method="post">
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
                    @endif

        </div>



        </div>

    </div>

    @include('layouts.adminLayouts.footer')

@endsection


