@extends('layouts.app')

@section('content')
    @include('layouts.LibraryLayouts.header')
    @include('layouts.LibraryLayouts.sideBar')
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

                <div class="col-md-3 col-lg-12 col-xlg-6">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">

                            <h1 class="text-white">Smart Library </h1>
                        </div>
                    </div>
                </div>


                <!-- Column -->



            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Library Analysis</h4>
                                    <h5 class="card-subtitle">Overview of the Library</h5>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-user m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">2540</h5>
                                            <small class="font-light">Total Users</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-plus m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">120</h5>
                                            <small class="font-light">Total Books</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px ">
                                    <div class="col-6 m-t-15">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">656</h5>
                                            <small class="font-light">Issued Books</small>
                                        </div>
                                    </div>
                                    <div class="col-6 m-t-15">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-tag m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">9540</h5>
                                            <small class="font-light">Not returned</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px;">

                                    <div class="col-6 m-t-15" style="margin-top: 5px">
                                        <div class="bg-dark p-10 text-white text-center" >
                                            <i class="fa fa-table m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">100</h5>
                                            <small class="font-light">Payments</small>
                                        </div>
                                    </div>
                                    <div class="col-6 m-t-15">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-globe m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">8540</h5>
                                            <small class="font-light">Online Orders</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column -->


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
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->


    @include('layouts.adminLayouts.footer')
@endsection
