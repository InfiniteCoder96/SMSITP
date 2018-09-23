@extends('layouts.app')

@section('content')
    @include('layouts.adminLayouts.header')
    @include('layouts.adminLayouts.sideBar')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Welcome to Scalar Management Systems <i class="mdi mdi-face"></i></h4>
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
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">


                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-5 card-body bg-orange">
                                                <center><i class="fa-6x far mdi mdi-account-plus"></i></center>
                                                <center><h5 class="card-title">Admission Requests</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h5 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$temp_students}}" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>

                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                </div>


                                <div class="col-md-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-5 card-body bg-success">
                                                <center><i class="fa-6x fas mdi mdi-account-multiple"></i></center>
                                                <center><h5 class="card-title">Registered Students</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h5 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$reg_students}}" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-5 card-body bg-purple">
                                                <center><i class="fa-6x fas mdi mdi-account-settings"></i></center>
                                                <center><h5 class="card-title">Teachers</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h5 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="" data-speed="2000" data-fresh-interval="20"></h5></center>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-5 card-body bg-secondary">
                                                <center><i class="fa-6x far mdi mdi-account-settings-variant m-b-5"></i></center>
                                                <center><h5 class="card-title">Academic Staff</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h5 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-5 card-body bg-danger">
                                                <center><i class="fa-6x fas mdi mdi-account-star m-b-5 "></i></center>
                                                <center><h5 class="card-title">Non-Academic Staff</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h5 style="font-size:30px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>
                                                <center><h5 style="font-size:30px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-5 card-body bg-warning">
                                                <center><i class="fa-6x far fa-money-bill-alt"></i></center>
                                                <center><h5 class="card-title">Total Profit</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h6 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h6></center>

                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="page-title">Reports <i class="mdi mdi-receipt"></i></h4>
                            <div class="row text-white">
                                <div class="col-md-4 bg-info">
                                    <h4 class="page-title">Daily Reports <i class="mdi mdi-receipt"></i></h4>
                                </div>
                                <div class="col-md-4 bg-dark">
                                    <h4 class="page-title">Monthly Reports <i class="mdi mdi-receipt"></i></h4>
                                </div>
                                <div class="col-md-4 bg-danger">
                                    <h4 class="page-title">Yearly Reports <i class="mdi mdi-receipt"></i></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    </div>
    @include('layouts.adminLayouts.footer')
@endsection