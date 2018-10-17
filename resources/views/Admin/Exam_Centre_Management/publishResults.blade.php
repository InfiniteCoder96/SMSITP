@extends('layouts.app')

@section('content')

    @include('layouts.adminLayouts.header')
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
                    @if (\Session::has('fail'))
                        <div class="alert alert-warning">
                            <p>{{ \Session::get('fail') }}</p>
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
                                        <input type="text" name="sId" class="form-control" id="sId" value="{{$grade['sId']}}" readonly>
                                    </div>
                                </div>

                                @if($grade['grade'] != "10" and $grade['grade'] != "11" and $grade['grade'] != "12" and $grade['grade'] != "13")
                                    <div class="form-group row">
                                        <label for="examId" class="col-sm-3 text-right control-label col-form-label">Term</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="examId" required>
                                                <option selected disabled>Select Term</option>
                                                <option value="G0{{$grade['grade']}}T1">G0{{$grade['grade']}}T1</option>
                                                <option value="G0{{$grade['grade']}}T1">G0{{$grade['grade']}}T2</option>
                                                <option value="G0{{$grade['grade']}}T1">G0{{$grade['grade']}}T3</option>
                                            </select>
                                        </div>
                                    </div>

                                @else
                                    <div class="form-group row">
                                        <label for="examId" class="col-sm-3 text-right control-label col-form-label">Term</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="examId" required>
                                                <option selected disabled>Select Term</option>
                                                <option value="G{{$grade['grade']}}T1">G{{$grade['grade']}}T1</option>
                                                <option value="G{{$grade['grade']}}T1">G{{$grade['grade']}}T2</option>
                                                <option value="G{{$grade['grade']}}T1">G{{$grade['grade']}}T3</option>
                                            </select>
                                        </div>
                                    </div>

                                @endif


                                <div class="form-group row">
                                    <label for="subject" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="subject" required>
                                            <option selected disabled>Select Subject</option>

                                            @foreach($subjects as $subject)

                                                <option value="{{$subject}}">{{$subject}}</option>

                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                            <div class="form-group row">
                                <label for="marks" class="col-sm-3 text-right control-label col-form-label">Marks</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="marks" placeholder="Subject Marks Here" name="marks" value="{{old('marks')}}" required>
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
                    <h5 class="card-title m-b-0">Results of Student ID {{$grade['sId']}}</h5>
                    </div>
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="font-size: 12px">Exam ID</th>
                            <th scope="col" style="font-size: 12px">Subject</th>
                            <th scope="col" style="font-size: 12px">Marks</th>
                        </tr>
                        </thead>
                        <tbody class="customtable">

                            @if($searchResults != null)
                            @foreach($searchResults as $searchResult)
                            <tr>
                            <td style="font-size: 12px">{{$searchResult->examId}}</td>
                            <td style="font-size: 12px">{{$searchResult->subject}}</td>
                            <td style="font-size: 12px">{{$searchResult->marks}}</td>
                            </tr>
                            @endforeach
                            @endif

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