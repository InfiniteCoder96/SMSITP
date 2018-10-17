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

                    <div class="col-md-5">

                        <form class="form-horizontal"  method="get" action="{{url('/Aadmin/pdf/download')}}">

                            {{csrf_field()}}

                            <div class="card bg-dark text-white">
                                <div class="card-header bg-info">
                                    <h5 class="card-title m-b-0 ">Search</h5>
                                </div>
                                <div class="card-body">
                                    <div class="card-body">
                                        {{--<div class="form-group row">--}}
                                            {{--<label for="Range" class="col-sm-3 text-right control-label col-form-label">Category</label>--}}
                                            {{--<div class="col-sm-9">--}}
                                                {{--<select class="select2 form-control custom-select" id="Category" name="Category" style="width: 100%; height:36px;" required>--}}
                                                    {{--<option selected disabled >Select Category</option>--}}
                                                    {{--<option value="Classes">Classes</option>--}}
                                                    {{--<option value="ClassTeachers">Class Teachers</option>--}}
                                                    {{--<option value="Subjects">Subjects</option>--}}
                                                    {{--<option value="SubjectTeachers">Subject Teachers</option>--}}
                                                    {{--<option value="Sections">Sections</option>--}}
                                                    {{--<option value="SectionTeachers">Section Teachers</option>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="form-group row">
                                            <label for="ID" class="col-sm-3 text-right control-label col-form-label">Teacher ID</label>
                                            <div class="col-sm-9">
                                                <input type="Text" class="form-control" id="ID" placeholder="ID Here" name="ID" required>
                                            </div>
                                        </div>

                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="Submit" class="btn btn-outline-success">Download</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>


                    {{--@if($Results!=null)--}}
                        {{--<div class="col-md-8">--}}
                            {{--<div class="card bg-secondary text-white">--}}
                                {{--<div class="card-header bg-info text-white">--}}
                                    {{--<h5 class="card-title m-b-0">Subject Teachers</h5>--}}
                                {{--</div>--}}

                                {{--<div class="table-responsive">--}}
                                    {{--<table class="table">--}}
                                        {{--<thead class="thead-dark">--}}
                                        {{--<tr>--}}
                                            {{--<th scope="col" style="font-size: 12px">Subject ID</th>--}}
                                            {{--<th scope="col" style="font-size: 12px">Subject Name</th>--}}


                                        {{--</tr>--}}
                                        {{--</thead>--}}
                                        {{--<tbody class="customtable">--}}

                                        {{--@foreach($Results as $result)--}}

                                            {{--<tr>--}}
                                                {{--<td style="font-size: 12px">{{$result['SubjectID']}}</td>--}}
                                                {{--<td style="font-size: 12px">{{$result['SubjectName']}}</td>--}}



                                            {{--</tr>--}}

                                        {{--@endforeach--}}

                                        {{--</tbody>--}}
                                    {{--</table>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--@endif--}}


        </div>

            <div class="row">
                <div class="border-top">
                    <div class="card-body">
                        <a href=""></a>
                    </div>
                </div>
            </div>



        </div>

    </div>

    @include('layouts.adminLayouts.footer')

@endsection


