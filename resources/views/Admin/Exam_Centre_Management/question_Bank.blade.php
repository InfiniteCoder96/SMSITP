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


                    <form class="form-horizontal" action="{{url('qBanks')}}" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <div class="card card bg-secondary text-white">
                            <div class="card-body card text-white bg-warning mb-3">
                                <h5 class="card-title m-b-0">Publish Questions</h5>
                            </div>
                            <div class="card-body ">
                                <div class="form-group row">
                                    <label for="examId" class="col-sm-3 text-right control-label col-form-label">Year and term</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="examId" required>
                                            <option selected disabled>Select Exam ID</option>
                                            <option value="G01T1">G01T1</option>
                                            <option value="G01T2">G01T2</option>
                                            <option value="G01T3">G01T3</option>
                                            <option value="G08T1">G08T1</option>
                                            <option value="G08T2">G08T2</option>
                                            <option value="G08T3">G08T3</option>
                                            <option value="G12T1">G12T1</option>
                                            <option value="G12T2">G12T2</option>
                                            <option value="G12T3">G12T3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="subject" required>
                                            <option selected disabled>Select Subject</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="English">English</option>
                                            <option value="Aesthetics">Aesthetics</option>
                                            <option value="Science">Science</option>
                                            <option value="History">History</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Chemistry">Chemistry</option>
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

                        <div class="card-body card bg-info text-white mb-3">
                            <div class="row">

                            <h5 class="card-title m-b-0">Sample Question Papers</h5>
                        </div>

                            <form class="form-horizontal" action="{{url('QBank')}}" method="get">

                                <div class="input-group custom-search-form">
                                    <input type="text" name="key" class="form-control" id="key" placeholder="search" required>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default-sm" type="submit">
                                               <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <div class="table-responsive ">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>

                                    <th scope="col" style="font-size: 12px">Year and term</th>
                                    <th scope="col" style="font-size: 12px">Subject</th>
                                    <th scope="col" style="font-size: 12px">Content</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                </tr>
                                </thead>
                                <tbody class="customtable">

                                {{--code for view data from databse--}}

                                @if($searchResults != null)
                                    @foreach($searchResults as $searchResult)
                                        <tr>
                                            <td style="font-size: 12px">{{$searchResult->examId}}</td>
                                            <td style="font-size: 12px">{{$searchResult->subject}}</td>
                                            <td style="font-size: 12px"><a class="text-cyan font-14" href="storage/uploads/{{$searchResult->content}}" download="{{$searchResult->content}}" target="_blank">{{$searchResult->content}}</a></td>
                                            <td style="font-size: 12px">

                                                <form action="{{action('QBankController@destroy', $searchResult->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">

                                                    <button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('Do you really want to delete?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
{{--                            {{$searchResults->links()}}--}}
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