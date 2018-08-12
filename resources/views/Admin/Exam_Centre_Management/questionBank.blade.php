@extends('layouts.app')

@section('content')

    @include('layouts.ExamCentreLayouts.header')
    @include('layouts.ExamCentreLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <form class="form-horizontal" action="#" method="get">



                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Publish Results</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Subject Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">EID</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                            <option selected disabled>Select Exam ID</option>
                                            <option value="AK">G1T1</option>
                                            <option value="AK">G1T2</option>
                                            <option value="WA">G1T3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Class</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                            <option selected disabled>Select Class</option>
                                            <option value="AK">A</option>
                                            <option value="AK">B</option>
                                            <option value="WA">C</option>
                                            <option value="NV">D</option>
                                            <option value="CA">E</option>
                                            <option value="WA">F</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Question Paper</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="cono1" placeholder="Final Grade No Here" required>
                                    </div>
                                </div>


                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-outline-success">Submit</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </div>

                        </div>









                    </form>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Published Papers</h5>
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
                                    <th scope="col" style="font-size: 12px">EID</th>
                                    <th scope="col" style="font-size: 12px">Subject</th>
                                    <th scope="col" style="font-size: 12px">Context</th>
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
                                    <td style="font-size: 12px">E:\G1T2.xlsx</td>
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
                                    <td style="font-size: 12px">English</td>
                                    <td style="font-size: 12px">E:\G1T1.xlsx</td>
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
                </div>

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Published Results</h5>
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
                                    <th scope="col" style="font-size: 12px">SID</th>
                                    <th scope="col" style="font-size: 12px">Class</th>
                                    <th scope="col" style="font-size: 12px">EID</th>
                                    <th scope="col" style="font-size: 12px">Subject</th>
                                    <th scope="col" style="font-size: 12px">Results</th>
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
                                    <td style="font-size: 12px">A</td>
                                    <td style="font-size: 12px">G1T1</td>
                                    <td style="font-size: 12px">English</td>
                                    <td style="font-size: 12px">98</td>
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
                                    <td style="font-size: 12px">A</td>
                                    <td style="font-size: 12px">G1T1</td>
                                    <td style="font-size: 12px">English</td>
                                    <td style="font-size: 12px">98</td>
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
                </div>

            </div>
        </div>



    @include('layouts.adminLayouts.footer')

@endsection