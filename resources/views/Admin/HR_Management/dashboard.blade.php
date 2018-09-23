
@extends('layouts.app')

@section('content')
    @include('layouts.HRLayouts.header')
    @include('layouts.HRLayouts.sideBar')
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
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn bnt-cyan" onclick="location.href='{{url('recruits')}}'">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                            <h6 class="text-white">Academic Staff</h6>
                        </div>
                        </button>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn bnt-cyan" onclick="location.href='{{url('nonacademic')}}'">
                        <div class="box bg-primary text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                            <h6 class="text-white">Non Academic Staff</h6>
                        </div>
                        </button>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn bnt-cyan" onclick="location.href='{{url('salary')}}'">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-chart-bar"></i></h1>
                            <h6 class="text-white">Payroll</h6>
                        </div>
                        </button>
                        </div>
                    </div>
                </div>
                <!-- Column -->


            </div>
            </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    @include('layouts.adminLayouts.footer')

@endsection
