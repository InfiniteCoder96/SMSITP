@extends('layouts.app')

@section('content')
    @include('layouts.adminLayouts.header')
    @include('layouts.ExamCentreLayouts.sideBar')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
            <div class="row">
                <!-- Column -->
                <div class="col-md-1 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn btn-cyan" onclick="location.href='{{ url('QBank') }}'" >
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                            <h6 class="text-white">Question Bank</h6>
                        </div>
                        </button>
                    </div>
                </div>

                <!-- Column -->
                <div class="col-md-4 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn btn-danger" onclick="location.href='{{ url('/ECadmin/resultsHome') }}'" >
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                <h6 class="text-white">Add Results</h6>
                            </div>
                        </button>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn btn-success" onclick="location.href='{{ url('/search') }}'" >
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="fa fa-trophy"></i></h1>
                                <h6 class="text-white">Results</h6>
                            </div>
                        </button>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn btn-info" onclick="location.href='{{ url('/searchBySId') }}'" >
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="fa fa-file-text-o"></i></h1>
                            <h6 class="text-white">Reports</h6>
                        </div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-file"></i></h1>
                            <h6 class="text-white">Sample question papers</h6>
                            <div class="card-body">
                                <center><h5 style="font-size:36px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$count}}" data-speed="2000" data-fresh-interval="20"></h5></center>

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
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>

    @include('layouts.adminLayouts.footer')
@endsection
