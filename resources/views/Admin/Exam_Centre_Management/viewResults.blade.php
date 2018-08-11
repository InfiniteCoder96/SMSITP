@extends('layouts.app')

@section('content')

    @include('layouts.ExamCentreLayouts.header')
    @include('layouts.ExamCentreLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Non Academic Staff Details</h5>
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
                            <th scope="col" style="font-size: 12px">DoA</th>
                            <th scope="col" style="font-size: 12px">First Name</th>
                            <th scope="col" style="font-size: 12px">Middle name</th>
                            <th scope="col" style="font-size: 12px">Last Name</th>
                            <th scope="col" style="font-size: 12px">DoB</th>
                            <th scope="col" style="font-size: 12px">Gender</th>
                            <th scope="col" style="font-size: 12px">Address</th>
                            <th scope="col" style="font-size: 12px">Email</th>
                            <th scope="col" style="font-size: 12px">Telephone (Res)</th>
                            <th scope="col" style="font-size: 12px">Telephone (Mob)</th>
                            <th scope="col" style="font-size: 12px">Status</th>
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
                            <td style="font-size: 12px">2018-05-14</td>
                            <td style="font-size: 12px">Gihara</td>
                            <td style="font-size: 12px">Thewara</td>
                            <td style="font-size: 12px">Gihan</td>
                            <td style="font-size: 12px">1996-11-08</td>
                            <td style="font-size: 12px">Male</td>
                            <td style="font-size: 12px">1/A,Poukna Mw,Disa Wawa</td>
                            <td style="font-size: 12px">parakumbbb@gmail.com</td>
                            <td style="font-size: 12px">0711254878</td>
                            <td style="font-size: 12px">0112879456</td>
                            <td style="font-size: 12px;background-color:red;color: white" >Absent</td>
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
                            <td style="font-size: 12px">2018-05-14</td>
                            <td style="font-size: 12px">Gihara</td>
                            <td style="font-size: 12px">Thewara</td>
                            <td style="font-size: 12px">Gihan</td>
                            <td style="font-size: 12px">1996-11-08</td>
                            <td style="font-size: 12px">Male</td>
                            <td style="font-size: 12px">1/A,Poukna Mw,Disa Wawa</td>
                            <td style="font-size: 12px">parakumbbb@gmail.com</td>
                            <td style="font-size: 12px">0711254878</td>
                            <td style="font-size: 12px">0112879456</td>
                            <td style="font-size: 12px;background-color: green;color: white" >Present</td>
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