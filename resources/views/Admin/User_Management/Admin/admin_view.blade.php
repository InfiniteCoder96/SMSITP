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
                    <div class="card text-white bg-dark mb-3 card-hover" >
                        <div class="row">
                            <div class="col-md-3 card-body bg-orange">
                                <center><i class="fa-3x fas fa-users"></i></center>
                                <h5 class="card-title">Students</h5>
                            </div>
                            <div class="card-body">
                                <center><h5 style="font-size:36px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="5000" data-speed="2000" data-fresh-interval="20">5,000</h5></center>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-dark mb-3 card-hover" >
                        <div class="row">
                            <div class="col-md-3 card-body bg-success ">
                                <center><i class="fa-3x fas fa-users"></i></center>
                                <h5 class="card-title">Teachers</h5>
                            </div>
                            <div class="card-body">
                                <center><h5 style="font-size:36px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="300" data-speed="2000" data-fresh-interval="20"></h5></center>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-dark mb-3 card-hover" >
                        <div class="row">
                            <div class="col-md-3 card-body bg-danger">
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
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-account-plus"></i></h1>
                            <h6 class="text-white">New Student</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-database"></i></h1>
                            <h6 class="text-white">View Database</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="fas fa-clipboard-list"></i></h1>
                            <h6 class="text-white">Noticeboard</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                            <h6 class="text-white">Tables</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @include('layouts.adminLayouts.footer')

@endsection