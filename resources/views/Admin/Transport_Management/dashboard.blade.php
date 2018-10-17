@extends('layouts.app')

@section('content')
    @include('layouts.TransportHostelLayouts.header-TA')
    @include('layouts.TransportHostelLayouts.sideBar-TA')
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
                        <button type="button" class="btn bnt-cyan" onclick="location.href='{{url('hostels')}}'">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"> </h1>
                            <h6 class="text-white">HOSTEL</h6>
                        </div>
                            </button>
                    </div>
                </div>



                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn bnt-cyan" onclick="location.href='{{url('hostelRooms')}}'">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"> </h1>
                            <h6 class="text-white">ROOMS</h6>
                        </div>
                        </button>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn bnt-cyan" onclick="location.href='{{url('room_allocations')}}'">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"> </h1>
                            <h6 class="text-white">STUDENTS</h6>
                        </div>
                        </button>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn bnt-cyan" onclick="location.href='{{url('routes')}}'">
                            <div class="box bg-warning text-center">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white">  </h1>
                            <h6 class="text-white">ROUTE</h6>
                        </div>
                        </button>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn bnt-cyan" onclick="location.href='{{url('staff_reports')}}'">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"> </h1>
                            <h6 class="text-white">STAFF REPORTS</h6>
                        </div>
                        </button>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn bnt-cyan" onclick="location.href='{{url('student_reports')}}'">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"> </h1>
                            <h6 class="text-white">STUDENT REPORTS</h6>
                        </div>
                        </button>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <button type="button" class="btn bnt-cyan" onclick="location.href='{{url('vehicles')}}'">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"> </h1>
                            <h6 class="text-white">VEHICLE</h6>
                        </div>
                        </button>
                    </div>
                </div>


                <!-- Column -->
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
