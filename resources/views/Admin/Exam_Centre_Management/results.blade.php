@extends('layouts.app')

@section('content')

    @include('layouts.ExamCentreLayouts.header')
    @include('layouts.ExamCentreLayouts.sideBar')
    <div class="page-wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                        @if (\Session::has('fail'))
                            <div class="alert alert-warning">
                                <p>{{ \Session::get('fail') }}</p>
                            </div><br />
                        @endif

                <div class="col-md-15 col-centered text-center">
                    <form method="get" action="{{url('results/create')}} ">
                        {{csrf_field()}}

                        <div class="card bg-dark text-white">
                            <div class="card-body card text-white bg-success mb-3">
                                <h5 class="card-title card text-white bg-success mb-3">Select Grade</h5>
                            </div>

                            <div class="form-group row">
                                <label for="sId" class="col-sm-3 text-right control-label col-form-label">Student ID</label>
                                <div class="col-sm-6">
                                    <input type="text" name="sId" class="form-control" id="sId" placeholder="Student ID Name Here" value="{{old('sId')}}" required>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="examId" class="col-sm-3 text-right control-label col-form-label">Grade</label>
                                    <div class="col-sm-5">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="grade" required>
                                            <option selected disabled>Select</option>
                                            <option value="1">G01</option>
                                            <option value="2">G02</option>
                                            <option value="3">G03</option>
                                            <option value="4">G04</option>
                                            <option value="5">G05</option>
                                            <option value="6">G06</option>
                                            <option value="7">G07</option>
                                            <option value="8">G08</option>
                                            <option value="9">G09</option>
                                            <option value="10">G10</option>
                                            <option value="11">G11</option>
                                            <option value="12">G12</option>
                                            <option value="13">G13</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        <div class="border-top">
                            <div class="card-body text-center">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </div>

                        </div>
                    </form>

            </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.adminLayouts.footer')

@endsection