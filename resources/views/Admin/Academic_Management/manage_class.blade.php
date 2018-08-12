@extends('layouts.app')

@section('content')

    @include('layouts.AcademicLayouts.header')
    @include('layouts.AcademicLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Manage Classes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                <div class="card text-white bg-success mb-3" >
                    <div class="card-header bg-dark">Class Teachers</div>
                    <div class="card-body">
                        <h5 class="card-title">Everything Fine</h5>

                    </div>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-danger mb-3" >
                        <div class="card-header bg-dark">Class Students Amount</div>
                        <div class="card-body">
                            <h5 class="card-title">Something Wrong in Class 8A</h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3" >
                        <div class="card-header bg-dark">Absent Teachers</div>
                        <div class="card-body">
                            <h5 class="card-title">5 class teachers absent</h5>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <form class="form-horizontal" action="#" method="get">



                        <div class="card bg-dark text-white">
                            <div class="card-header bg-cyan text-white">
                                <h5 class="card-title m-b-0">Assign Class Techers</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">CID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Clss ID Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Teacher ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Class Teacher ID Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                            <option selected disabled>Select Exam ID</option>
                                            <option value="AK">G1T1</option>
                                            <option value="AK">G1T2</option>
                                            <option value="WA">G1T3</option>
                                        </select>
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
                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-cyan text-white">
                            <h5 class="card-title m-b-0">Class Teachers</h5>
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
                                    <th scope="col" style="font-size: 12px">CID</th>
                                    <th scope="col" style="font-size: 12px">Section</th>
                                    <th scope="col" style="font-size: 12px">TID</th>
                                    <th scope="col" style="font-size: 12px">Class Teacher Name</th>
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


                                    <td style="font-size: 12px">G1A</td>
                                    <td style="font-size: 12px">G1</td>
                                    <td style="font-size: 12px">G51248</td>
                                    <td style="font-size: 12px">Karunadasa D.A.</td>
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


                                    <td style="font-size: 12px">G1A</td>
                                    <td style="font-size: 12px">G1</td>
                                    <td style="font-size: 12px">G51248</td>
                                    <td style="font-size: 12px">Karunadasa D.A.</td>
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

        </div>



    @include('layouts.AcademicLayouts.footer')

@endsection