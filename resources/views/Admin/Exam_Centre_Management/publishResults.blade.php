@extends('layouts.app')

@section('content')

    @include('layouts.ExamCentreLayouts.header')
    @include('layouts.ExamCentreLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">

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

                    <form class="form-horizontal" action="{{url('results')}}" method="post">
                        {{csrf_field()}}


                        <div class="card bg-dark text-white">
                            <div class="card-body card text-white bg-success mb-3">
                                <h5 class="card-title card text-white bg-success mb-3">Publish Results</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="sId" class="col-sm-3 text-right control-label col-form-label">Student ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="sId" class="form-control" id="sId" placeholder="Student ID Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="examId" class="col-sm-3 text-right control-label col-form-label">Exam ID</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="examId" required>
                                            <option selected disabled>Select Exam ID</option>
                                            <option value="G1T1">G1T1</option>
                                            <option value="G1T2">G1T2</option>
                                            <option value="G1T3">G1T3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="subject" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="subject" required>
                                            <option selected disabled>Select Subject</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Science">Science</option>
                                            <option value="History">History</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="marks" class="col-sm-3 text-right control-label col-form-label">Marks</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="marks" placeholder="Subject Marks Here" name="marks" required>
                                    </div>
                                </div>


                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-outline-success">Save</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </div>

                        </div>


                    </form>
                </div>
                <div class="col-md-8">
                    <div class="card bg-secondary text-white">
                        <div class="card-body card text-white bg-danger mb-3">
                            <h5 class="card-title m-b-0">Results</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th>
                                        <label class="customcheckbox">
                                            <input type="checkbox" class="listCheckbox" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>
                                    <th scope="col" style="font-size: 12px">Student ID</th>
                                    <th scope="col" style="font-size: 12px">Exam ID</th>
                                    <th scope="col" style="font-size: 12px">Subject</th>
                                    <th scope="col" style="font-size: 12px">Marks</th>

                                </tr>
                                </thead>
                                <tbody class="customtable">
@if($Results1 != null)
                              @foreach($Results1 as $result1)

                               <tr>
                                    <th>
                                        <label class="customcheckbox">
                                            <input type="checkbox" class="listCheckbox" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>

                                    <td style="font-size: 12px">{{$result1['sId']}}</td>
                                    <td style="font-size: 12px">{{$result1['examId']}}</td>
                                    <td style="font-size: 12px">{{$result1['subject']}}</td>
                                    <td style="font-size: 12px">{{$result1['marks']}}</td>

                                </tr>

                                @endforeach
@endif
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