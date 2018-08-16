@extends('layouts.app')

@section('content')

    @include('layouts.adminLayouts.header')
    @include('layouts.adminLayouts.sideBar')

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
                                <li class="breadcrumb-item active" aria-current="page">Administrator</li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                <bu
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 90px">
                        <div class="row">
                            <div class="col-md-4 card-body bg-orange">
                                <center><i class="fa-3x fas fa-users"></i></center>
                                <center><h5 class="card-title">Students</h5></center>
                            </div>
                            <div class="card-body">
                                <center><h5 style="font-size:36px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="5000" data-speed="2000" data-fresh-interval="20">5,000</h5></center>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 90px">
                        <div class="row">
                            <div class="col-md-4 card-body bg-success ">
                                <center><i class="fa-3x fas fa-users"></i></center>
                                <center><h5 class="card-title">Teachers</h5></center>
                            </div>
                            <div class="card-body">
                                <center><h5 style="font-size:36px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="300" data-speed="2000" data-fresh-interval="20"></h5></center>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 90px">
                        <div class="row">
                            <div class="col-md-4 card-body bg-purple">
                                <center><i class="fa-3x far fa-money-bill-alt"></i></center>
                                <center><h5 class="card-title">Profit</h5></center>
                            </div>
                            <div class="card-body">
                                <center><h5 style="font-size:36px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="5000000" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-account-plus"></i></h1>
                            <h6 class="text-white">New Student</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-message-alert"></i></h1>
                            <h6 class="text-white">Teacher Leave Requests</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-message-bulleted"></i></h1>
                            <h6 class="text-white">Student Leave Requests</h6>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-secondary text-center">
                            <h1 class="font-light text-white"><i class="fas fa-clipboard-list"></i></h1>
                            <h6 class="text-white">Noticeboard</h6>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Daily Attendance Summary</h4>
                            <div class="m-t-20">
                                <div class="d-flex no-block align-items-center">
                                    <span>81% Clicks</span>
                                    <div class="ml-auto">
                                        <span>125</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="m-t-25">
                                <div class="d-flex no-block align-items-center m-t-15">
                                    <span>72% Uniquie Clicks</span>
                                    <div class="ml-auto">
                                        <span>120</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="m-t-25">
                                <div class="d-flex no-block align-items-center m-t-15">
                                    <span>53% Impressions</span>
                                    <div class="ml-auto">
                                        <span>785</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 53%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="m-t-25">
                                <div class="d-flex no-block align-items-center m-t-15">
                                    <span>3% Online Users</span>
                                    <div class="ml-auto">
                                        <span>8</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-0">News Updates</h4>
                        </div>
                        <ul class="list-style-none">
                            <li class="d-flex no-block card-body">
                                <i class="fa fa-check-circle w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                    <span class="text-muted">dolor sit amet, consectetur adipiscing</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">20</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-gift w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Congratulation Maruti, Happy Birthday</a>
                                    <span class="text-muted">many many happy returns of the day</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">11</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-plus w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Maruti is a Responsive Admin theme</a>
                                    <span class="text-muted">But already everything was solved. It will ...</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">19</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-leaf w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Envato approved Maruti Admin template</a>
                                    <span class="text-muted">i am very happy to approved by TF</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">20</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-question-circle w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0"> I am alwayse here if you have any question</a>
                                    <span class="text-muted">we glad that you choose our template</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">15</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>


    @include('layouts.adminLayouts.footer')

@endsection