@extends('layouts.app')

@section('content')

    @include('layouts.adminLayouts.header')
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
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                        </div><br />
                    @endif

                <div class="col-md-15 col-centered text-center">
                    <form  action="{{action('ResultController@update',$result['id'])}}" method="post">
                        {{method_field('patch')}}
                        {{csrf_field()}}
                        <input type="hidden" id="id" name="id">
                        <div class="form-group row">
                            <label for="sId" class="col-sm-3 text-right control-label col-form-label">Student ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="sId" name="sId" value="{{$result->sId}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="examId" class="col-sm-3 text-right control-label col-form-label">Exam ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="examId" name="examId" value="{{$result->examId}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="subject" name="subject" value="{{$result->subject}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marks" class="col-sm-3 text-right control-label col-form-label">Marks</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="marks"  name="marks" value="{{$result->marks}}" required>
                            </div>
                        </div>

                        <div class="border-top">
                            <div class="modal-body">
                                <button type="submit" class="btn btn-outline-success">Save</button>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
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