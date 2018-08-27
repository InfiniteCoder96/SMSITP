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

                    <form class="form-horizontal" action="{{url('qBanks')}}" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <div class="card card bg-secondary text-white">
                            <div class="card-body card text-white bg-success mb-3">
                                <h5 class="card-title m-b-0">Publish Questions</h5>
                            </div>
                            <div class="card-body ">
                                <div class="form-group row">
                                    <label for="examId" class="col-sm-3 text-right control-label col-form-label">Year and term</label>
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
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Subject</label>
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
                                    <label for="file" class="col-sm-3 text-right control-label col-form-label">Upload Papers</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="file" name="file" required>
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
                    <div class="card card bg-secondary text-white">
                        <div class="card-body card text-white bg-danger mb-3">
                            <h5 class="card-title m-b-0">Sample Question Papers</h5>
                        </div>
                        <div class="table-responsive ">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th>
                                        <label class="customcheckbox m-b-20">
                                            <input type="checkbox" id="mainCheckbox" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>
                                    <th scope="col" style="font-size: 12px">Year and term</th>
                                    <th scope="col" style="font-size: 12px">Subject</th>
                                    <th scope="col" style="font-size: 12px">Content</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                </tr>
                                </thead>
                                <tbody class="customtable">

                                {{--code for view data from databse--}}

                                {{--@foreach($students as $student)--}}

                                <tr>
                                    <th>
                                        <label class="customcheckbox">
                                            <input type="checkbox" class="listCheckbox" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>


                                    <td style="font-size: 12px">S123</td>
                                    <td style="font-size: 12px">English</td>
                                    <td style="font-size: 12px">E:\G1T1.xlsx</td>
                                    <td style="font-size: 12px">
                                        <a class="waves-effect waves-dark" href="" data-toggle="modal" data-target="#updateQuestionPapersModal"><i class="mdi mdi-pencil font-20" ></i></a>
                                        <form action="{{--action('QBankController@destroy', $Questions['id'] )--}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">

                                            <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                {{--@endforeach--}}

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