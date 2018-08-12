@extends('layouts.app')

@section('content')

    @include('layouts.ExamCentreLayouts.header')
    @include('layouts.ExamCentreLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
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
                            <th scope="col" style="font-size: 12px">Middle name</th>
                            <th scope="col" style="font-size: 12px">Last Name</th>
                            <th scope="col" style="font-size: 12px">Subjects</th>
                            <th scope="col" style="font-size: 12px">Total</th>
                            <th scope="col" style="font-size: 12px">Average</th>
                            <th scope="col" style="font-size: 12px">Position</th>
                            <th scope="col" style="font-size: 12px;">Status</th>
                            <th scope="col" style="font-size: 12px">Remark</th>
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
                            <td style="font-size: 12px">Gihara</td>
                            <td style="font-size: 12px">Thewara</td>
                            <td style="font-size: 12px">Gihan</td>
                            <td style="font-size: 12px"></td>
                            <td style="font-size: 12px">360</td>
                            <td style="font-size: 12px">40.0</td>
                            <td style="font-size: 12px">40</td>
                            <td style="font-size: 12px;background-color:red;color: white">Bad</td>
                            <td style="font-size: 12px;" >Keep it up</td>
                            <td style="font-size: 12px">
                                <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                    <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>


                            <td style="font-size: 12px">S123</td>
                            <td style="font-size: 12px">Gihara</td>
                            <td style="font-size: 12px">Thewara</td>
                            <td style="font-size: 12px">Gihan</td>
                            <td style="font-size: 12px"></td>
                            <td style="font-size: 12px">560</td>
                            <td style="font-size: 12px">63.2</td>
                            <td style="font-size: 12px">13</td>
                            <td style="font-size: 12px;background-color:orange;color: white">Average</td>
                            <td style="font-size: 12px;" >Keep it up</td>
                            <td style="font-size: 12px">
                                <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                    <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                            </td>
                        </tr>
                        {{--@endforeach--}}

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