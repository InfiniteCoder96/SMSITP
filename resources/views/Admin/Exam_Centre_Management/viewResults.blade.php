@extends('layouts.app')

@section('content')

    @include('layouts.ExamCentreLayouts.header')
    @include('layouts.ExamCentreLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid ">
            <div class="card card bg-dark text-white ">
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


                    <div class="card-body card bg-info text-white mb-3">
                        <div class="row">

                            <h5 class="card-title m-b-0">Results</h5>
                        </div>

                        <form class="form-horizontal" action="{{url('search')}}" method="get">

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

                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="font-size: 12px">ID</th>
                            <th scope="col" style="font-size: 12px">First Name</th>
                            {{--<th scope="col" style="font-size: 12px">Last Name</th>--}}
                            <th scope="col" style="font-size: 12px">Exam ID</th>
                            <th scope="col" style="font-size: 12px">Subjects</th>
                            <th scope="col" style="font-size: 12px">Total</th>
                            <th scope="col" style="font-size: 12px">Remark</th>
                            <th scope="col" style="font-size: 12px">Action</th>
                        </tr>
                        </thead>
                        <tbody class="customtable">

                        @if($Results != null)
                        @foreach($Results as $result)
                        <tr>
                            <td style="font-size: 12px">{{$result->sId}}</td>
                            <td style="font-size: 12px">{{$result->studentF['name']}}</td>
                            {{--<td style="font-size: 12px">null</td>--}}
                            <td style="font-size: 12px">{{$result->examId}}</td>
                            <td style="font-size: 12px">{{$result->subject}}</td>
                            <td style="font-size: 12px">{{$result->marks}}</td>

                            @if($result->marks <= 100 && $result->marks >= 85 )
                             <td style="font-size: 15px" class="text-primary">Excellent</td>
                            @elseif($result->marks < 84 && $result->marks >= 75)
                                <td style="font-size: 15px" class="text-success">good</td>
                            @elseif($result->marks < 74 && $result->marks >= 50 )
                                <td style="font-size: 15px" class="text-success">Average</td>
                            @elseif($result->marks < 49 && $result->marks >= 30 )
                                <td style="font-size: 15px" class="text-warning">Poor</td>
                            @elseif($result->marks < 30)
                                <td style="font-size: 15px" class="text-danger">Very poor</td>
                            @endif

                            <td style="font-size: 12px">
                                <div class="row">

                                    <a class="waves-effect waves-dark" href="{{action('ResultController@edit', $result['id'])}}"><i class="mdi mdi-pencil font-20"></i></a>

                                     <form action="{{action('ResultController@destroy', $result->id)}}" method="post">
                                         {{csrf_field()}}
                                         <input name="_method" type="hidden" value="DELETE">

                                         <button class="btn btn-danger btn-xs" type="submit"onclick="return confirm('Do you really want to delete?')")>Delete</button>
                                     </form>

                                </div>
                            </td>
                         </tr>
                        @endforeach
                        @endif

                        </tbody>
                    </table>

{{--                    {{$Results->links()}}--}}

                </div>
            </div>
        </div>
    </div>

    @include('layouts.adminLayouts.footer')

@endsection