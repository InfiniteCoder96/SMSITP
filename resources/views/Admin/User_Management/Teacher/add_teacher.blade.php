@extends('layouts.app')

@section('content')

    @include('layouts.adminLayouts.header')
    @include('layouts.adminLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <form class="form-horizontal" action="#" method="get">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Recuit New Teacher</h5>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="First Name Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Contact No Here" required>
                                    </div>
                                    {{--<div class="col-sm-9">--}}
                                    {{--<textarea class="form-control"></textarea>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>

                            </div>


                        </div>







                    </div>


                </div>
            </form>
        </div>
    </div>



    @include('layouts.adminLayouts.footer')

@endsection