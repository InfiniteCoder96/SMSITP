@extends('layouts.app')

@section('content')

    @include('layouts.adminLayouts.header')
    @include('layouts.ExamCentreLayouts.sideBar')

    <div class="page-wrapper">
        <div class="container-fluid ">
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


                    <div class="col-md-5 col-centered text-center">
                        <form method="get" action="{{url('pdf')}}">
                            {{csrf_field()}}

                            <div class="card bg-dark text-white">
                                <div class="card-body card text-white bg-success mb-3">
                                    <h5 class="card-title card text-white bg-success mb-3">Select Grade</h5>
                                </div>

                                <div class="form-group row">
                                    <label for="sId" class="col-sm-3 text-right control-label col-form-label">Student ID</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="sId" class="form-control" id="sId" placeholder="Student ID Name Here" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="sId" class="col-sm-3 text-right control-label col-form-label">Exam ID</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="examId" class="form-control" id="examId" placeholder="Exam ID" required>
                                    </div>
                                </div>

                                <div class="border-top">
                                    <div class="card-body text-center">
                                        <button class="btn btn-primary btn-md" type="submit">Download</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

        </div>
    </div>
    @include('layouts.adminLayouts.footer')

@endsection