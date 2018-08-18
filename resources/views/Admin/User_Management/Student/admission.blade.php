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
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
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
            <div class="card bg-success text-dark">
                <div class="card-body wizard-content">
                    <h4 class="card-title">Add A New Student</h4>
                    <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{url('students')}}" method="post" class="m-t-40">
                        {{csrf_field()}}
                        <div>
                            <h6 class="card-subtitle"></h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="userName">Salutation *</label>
                                        <select name="salutation" class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                            <option selected disabled>Select salutation</option>
                                            <option value="AK">Master</option>
                                            <option value="AK">Ms</option>
                                            <option value="WA">Mr</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="userName">Name with Initials *</label>
                                        <input id="userName" name="nameIni" type="text" class="required form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="userName">First Name *</label>
                                        <input id="userName" name="first_Name" type="text" class="required form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="userName">Middle Name *</label>
                                        <input id="userName" name="middle_Name" type="text" class="required form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="userName">Last Name *</label>
                                        <input id="userName" name="last_Name" type="text" class="required form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="password">Data of Birth *</label>
                                        <input id="password" name="DoB" type="date" class="required form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="confirm">Gender *</label>
                                        <input id="confirm" name="Gender" type="text" class="required form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="password">NIC </label>
                                        <input id="password" name="NIC" type="text" class="required form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="password">Birth cretificate number *</label>
                                        <input id="password" name="birth_certificate_no" type="text" class="required form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="confirm">Religion *</label>
                                        <input id="confirm" name="religion" type="text" class="required form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="password">Race *</label>
                                        <input id="password" name="race" type="text" class="required form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="password">Nationality *</label>
                                        <input id="password" name="nationality" type="text" class="required form-control">
                                    </div>
                                </div>

                                <p>(*) Mandatory</p>
                            </section>
                            <h6 class="card-subtitle"></h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="userName">Address *</label>
                                        <input id="userName" name="Address" type="text" class="required form-control">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="userName">Telephone Number(Mobile) *</label>
                                        <input id="userName" name="Telephone_No_Mob" type="tel" class="required form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="userName">Telephone Number(Residence) *</label>
                                        <input id="userName" name="Telephone_No_Res" type="tel" class="required form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="userName">Email *</label>
                                        <input id="userName" name="Email_Address" type="email" class="required form-control">
                                    </div>
                                </div>

                                <p>(*) Mandatory</p>
                            </section>
                            <h6 class="card-subtitle"></h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="userName">Parent/Guardian Full Name *</label>
                                        <input id="userName" name="telmob" type="text" class="required form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="userName">Email *</label>
                                        <input id="userName" name="telres" type="email" class="required form-control">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="userName">Telephone Number(Mobile) *</label>
                                        <input id="userName" name="telmob" type="tel" class="required form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="userName">Telephone Number(Residence) *</label>
                                        <input id="userName" name="telres" type="tel" class="required form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="userName">Telephone Number(Work) *</label>
                                        <input id="userName" name="stdemail" type="email" class="required form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="userName">Address *</label>
                                        <input id="userName" name="telmob" type="text" class="required form-control">
                                    </div>

                                </div>
                            </section>
                            <h6 class="card-subtitle"></h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="userName">Known illnesses *</label>
                                        <textarea id="userName" name="Known_Illnesses" class="required form-control"></textarea>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="userName">Known Allergies *</label>
                                        <textarea id="userName" name="Known_Allergies" class="required form-control"></textarea>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-lg btn-block btn-success">Submit</button>
                            </section>

                        </div>
                    </form>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    `@include('layouts.adminLayouts.footer')

@endsection