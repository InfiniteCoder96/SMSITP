@extends('layouts.app')

@section('content')

    @include('layouts.adminLayouts.header')
    @include('layouts.adminLayouts.sideBar')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" style="background-image: url('/public/assets/images/big/auth-bg.jpg')">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Welcome to Student Management Portal <i class="mdi mdi-face"></i></h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Management</li>
                                <li class="breadcrumb-item active" aria-current="page">Student</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Student Details</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>


                            <th scope="col" style="font-size: 12px">SID</th>
                            <th scope="col" style="font-size: 12px">First Name</th>
                            <th scope="col" style="font-size: 12px">Last Name</th>
                            <th scope="col" style="font-size: 12px">DoB</th>
                            <th scope="col" style="font-size: 12px">Gender</th>
                            <th scope="col" style="font-size: 12px">Address</th>
                            <th scope="col" style="font-size: 12px">Email</th>
                            <th scope="col" style="font-size: 12px">Telephone (Res)</th>
                            <th scope="col" style="font-size: 12px">Telephone (Mob)</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">

                        @foreach($temporary_students as $temporary_student)

                            <tr>

                                <td style="font-size: 12px">{{$temporary_student->temp_sid}}</td>
                                <td style="font-size: 12px">{{$temporary_student->first_Name}}</td>
                                <td style="font-size: 12px">{{$temporary_student->last_Name}}</td>
                                <td style="font-size: 12px">{{$temporary_student->DoB}}</td>
                                <td style="font-size: 12px">{{$temporary_student->Gender}}</td>
                                <td style="font-size: 12px">{{$temporary_student->Address}}</td>
                                <td style="font-size: 12px">{{$temporary_student->Email_Address}}</td>
                                <td style="font-size: 12px">{{$temporary_student->Telephone_No_Mob}}</td>
                                <td style="font-size: 12px">{{$temporary_student->Telephone_No_Res}}</td>
                                <td style="font-size: 12px" >
                                    <div class="row">
                                        <div  id="sid"> <a  class="waves-effect waves-dark" href="{{action('StudentController@show', $temporary_student['temp_sid'])}}"><button class="btn btn-info btn-xs" type="button">View</button></a></div>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#acceptConfirmationModal"

                                                data-id="{{$temporary_student['temp_sid']}}"

                                                type="button">Accept</button>

                                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteConfirmationModal"

                                                data-id="{{$temporary_student['temp_sid']}}"

                                                type="button">Deny</button>
                                    </div>

                                    {{--<a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>--}}
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->

    <script>


    </script>
    @include('layouts.adminLayouts.footer')
    @include('layouts.adminLayouts.deleteConfirmationModal')
    @include('layouts.adminLayouts.acceptConfirmationModal')
@endsection