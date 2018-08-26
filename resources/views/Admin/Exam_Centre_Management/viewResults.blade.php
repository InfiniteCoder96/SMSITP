@extends('layouts.app')

@section('content')

    @include('layouts.ExamCentreLayouts.header')
    @include('layouts.ExamCentreLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid ">
            <div class="card card bg-dark text-white ">
                <div class="card-body card text-white bg-success mb-3">
                    <div class="row">
                        <div class="col-sm-8">
                            <h5 class="card-title m-b-0">Results Overview</h5>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">


                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                        <option selected disabled>Select a Grade</option>

                                        <option value="WA">Grade 01</option>
                                        <option value="NV">Grade 01</option>
                                        <option value="CA">Grade 01</option>
                                        <option value="WA">Grade 01</option>
                                        <option value="WA">Grade 01</option>
                                        <option value="OR">Grade 01</option>


                                    </select>

                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">


                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                    <option selected disabled>Select a Class</option>

                                    <option value="WA">A</option>
                                    <option value="NV">B</option>
                                    <option value="CA">C</option>
                                    <option value="WA">D</option>
                                    <option value="WA">E</option>
                                    <option value="OR">F</option>


                                </select>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>
                                <label class="customcheckbox m-b-20">
                                    <input type="checkbox" id="mainCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <th scope="col" style="font-size: 12px">ID</th>
                            <th scope="col" style="font-size: 12px">First Name</th>
                            <th scope="col" style="font-size: 12px">Last Name</th>
                            <th scope="col" style="font-size: 12px">Exam ID</th>
                            <th scope="col" style="font-size: 12px">Subjects</th>
                            <th scope="col" style="font-size: 12px">Total</th>
                            <th scope="col" style="font-size: 12px">Average</th>
                            <th scope="col" style="font-size: 12px;">Status</th>
                            <th scope="col" style="font-size: 12px">Remark</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">

                        {{--code for view data from databse--}}

                        @foreach($Results as $result)

                        <tr>
                             <th>
                                 <label class="customcheckbox">
                                     <input type="checkbox" class="listCheckbox" />
                                     <span class="checkmark"></span>
                                 </label>
                             </th>

                            <td style="font-size: 12px">{{$result['sId']}}</td>
                            <td style="font-size: 12px">null</td>
                            <td style="font-size: 12px">null</td>
                            <td style="font-size: 12px">{{$result['examId']}}</td>
                            <td style="font-size: 12px">{{$result['subject']}}</td>
                            <td style="font-size: 12px">{{$result['marks']}}</td>
                            <td style="font-size: 12px">null</td>
                            <td style="font-size: 12px">null</td>
                            <td style="font-size: 12px">null</td>

                                 <td><a class="waves-effect waves-dark" href="{{action('ResultController@edit', $result['id'])}}" data-toggle="modal" data-target="#updateResultsModal"><i class="mdi mdi-pencil font-20" ></i></a>

                                     <form action="{{action('ResultController@destroy', $result['id'] )}}" method="post">
                                         {{csrf_field()}}
                                         <input name="_method" type="hidden" value="DELETE">

                                         <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                                     </form>
                                 </td>

                                     <!--a class="waves-effect waves-dark" href="{{--url('results')--}}" data-method="delete">
                                         <i class="mdi mdi-delete font-20"></i></a></td>-->

                         </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->

        </div>
    </div>



    @include('layouts.adminLayouts.footer')

@endsection