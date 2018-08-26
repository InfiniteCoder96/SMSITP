@extends('layouts.app')

@section('content')

    @include('layouts.ExamCentreLayouts.header')
    @include('layouts.ExamCentreLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <form class="form-horizontal" action="#" method="get">



                        <div class="card card bg-secondary text-white">
                            <div class="card-body card text-white bg-success mb-3">
                                <h5 class="card-title m-b-0">Publish Questions</h5>
                            </div>
                            <div class="card-body ">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Year and term</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                            <option selected disabled>Year and term </option>
                                            <option value="AK">G1T1</option>
                                            <option value="AK">G1T2</option>
                                            <option value="WA">G1T3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                            <option selected disabled>Subject</option>
                                            <option value="AK">Mathematics</option>
                                            <option value="AK">Science</option>
                                            <option value="WA">English</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Upload Papers</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="cono1" required>
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
                                    <td style="font-size: 12px">E:\G1T2.xlsx</td>
                                    <td style="font-size: 12px">
                                        <a class="waves-effect waves-dark" href="" data-toggle="modal" data-target="#updateQuestionPapersModal"><i class="mdi mdi-pencil font-20" ></i></a>
                                        <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i></a>
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
                                        <a class="waves-effect waves-dark" href="" data-toggle="modal" data-target="#updateQuestionPapersModal"><i class="mdi mdi-pencil font-20" ></i></a>
                                        <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i></a>
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



    @include('layouts.adminLayouts.footer')

@endsection