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
                    <h4 class="page-title">Welcome to Family <i class="mdi mdi-face"></i></h4>
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

            <div class="card text-left">
                <div class="card-header bg-dark text-orange">
                    <i class="mdi mdi-account-plus "></i> Enroll New Student
                </div>
                <div class="card-body bg-info text-white">
                    <h5><i class="fas fa-info-circle"></i> Please enter the information in the designated boxes. Click on the SUBMIT button when completed.
                        <Text style="color: red">*</Text>   indicates required field.</h5>
                </div>
                <div class="card-body">

                    <form enctype="multipart/form-data" class="needs-validation" novalidate action="{{url('students')}}" method="post">
                        {{csrf_field()}}

                        <div class="card-title text-success text-lg-center bg-dark ">
                            <i class="mdi mdi-hospital-building"></i> School Information
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">College / School</span>
                                            </div>
                                            <select name="school" class="form-control" required>
                                                <option selected disabled>- Select -</option>
                                                <option value="Master">Royal Institute,Kurunegala</option>

                                            </select>
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                    <div class="col-md-2 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">Section</span>
                                            </div>
                                            <select name="section" class="form-control" required>
                                                <option selected disabled>- Select -</option>
                                                <option value="Master">Primary</option>
                                                <option value="Ms">Secondary</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">Grade Applied For   *</span>
                                            </div>
                                            <select name="grade" class="form-control" required>
                                                <option selected disabled>- Select -</option>
                                                <option value="Master">Grade 1</option>
                                                <option value="Ms">Grade 2</option>
                                                <option value="Mr">Grade 3</option>
                                                <option value="Mr">Grade 4</option>
                                                <option value="Mr">Grade 5</option>
                                                <option value="Mr">Grade 6</option>
                                                <option value="Mr">Grade 7</option>
                                                <option value="Mr">Grade 8</option>
                                                <option value="Mr">Grade 9</option>
                                                <option value="Mr">Grade 10</option>
                                                <option value="Mr">Grade 12</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">Year Applied For   *</span>
                                            </div>
                                            <select name="year_applied" class="form-control" required>
                                                <option selected disabled>- Select -</option>
                                                <option value="Master">2018/2019</option>
                                                <option value="Ms">2019/2020</option>

                                            </select><div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-title text-success text-lg-center bg-dark ">
                            <i class="mdi mdi-account-card-details"></i> Student Information(applicant)
                        </div>
                        <div class="col-md-12 card-title text-purple">
                            <i class="fas fa-user"></i> Personal Information
                        </div>


                        <div class="row">

                            <div class="col-md-3">
                                <img src="{{asset('assets/images/no-image.png')}}" id="img" style="height:280px;width: 280px;background-color: #ccc;border: 2px solid gray;">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">

                                        <div class="input-group">


                                            <input type="file" name="image" class="form-control" id="image" placeholder="Username" aria-describedby="inputGroupPrepend" value="{{old('image')}}" style="display: none" required>
                                            <input type="button" value="Browse" id="browse_image" class="btn btn-info form-control">
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-9">
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">Salutation</span>
                                                    </div>
                                                    <select name="salutation" class="form-control" required>
                                                        <option selected disabled>Select salutation</option>
                                                        <option value="Master">Master</option>
                                                        <option value="Ms">Ms</option>
                                                        <option value="Mr">Mr</option>
                                                    </select>
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">First Name</span>
                                                    </div>
                                                    <input type="text" name="first_Name" class="form-control" id="validationCustomUsername" value="{{old('first_Name')}}" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">Middle Name</span>
                                                    </div>
                                                    <input type="text" name="middle_Name" class="form-control" id="validationCustomUsername" value="{{old('middle_Name')}}" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">Last Name</span>
                                                    </div>
                                                    <input type="text" name="last_Name" class="form-control" id="validationCustomUsername" value="{{old('last_Name')}}" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">Date of birth</span>
                                                    </div>
                                                    <input type="date" name="DoB" class="form-control" id="validationCustomUsername" value="{{old('DoB')}}" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">Gender<Text style="color: red">*</Text></span>
                                                    </div>
                                                    <select name="Gender" class="form-control" required>
                                                        <option selected disabled>Select salutation</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4">


                                        <div class="form-row ">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend" >NIC / Postal ID<Text style="color: red">*</Text></span>
                                                    </div>
                                                    <input type="text" name="NIC" class="form-control" id="validationCustomUsername" value="{{old('NIC')}}" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div></div>
                                        </div>



                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">Birth Certificate No</span>
                                                    </div>
                                                    <input type="text" name="birth_certificate_no" class="form-control" value="{{old('birth_certificate_no')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">Religion<Text style="color: red">*</Text></span>
                                                    </div>
                                                    <input type="text" name="religion" class="form-control" id="validationCustomUsername" value="{{old('religion')}}" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">Race<Text style="color: red">*</Text></span>
                                                    </div>
                                                    <input type="text" name="race" class="form-control" value="{{old('race')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">Nationality<Text style="color: red">*</Text></span>
                                                    </div>
                                                    <input type="text" name="nationality" class="form-control" value="{{old('nationality')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>







                        <div class="card-title  text-purple">
                            <i class="fas fa-phone"></i> Contact Information
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Address<Text style="color: red">*</Text></span>
                                    </div>
                                    <textarea class="form-control" name="Address" value="{{old('Address')}}"  id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></textarea>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Telephone(Res)<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="Telephone_No_Res" class="form-control" value="{{old('Telephone_No_Res')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Telephone(Mob)<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="Telephone_No_Mob" class="form-control" value="{{old('Telephone_No_Mob')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Email<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="email" name="Email_Address" class="form-control" value="{{old('Email_Address')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card-title  text-purple">
                            <i class="fas fa-info-circle"></i> Other Information
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Blood group</span>
                                    </div>
                                    <input type="text" name="blood_group" class="form-control" value="{{old('blood_group')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Known Illnesses </span>
                                    </div>
                                    <textarea class="form-control" name="Known_Illnesses" value="{{old('Known_Illnesses')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></textarea>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Known Allergies</span>
                                    </div>
                                    <textarea class="form-control" name="Known_Allergies" value="{{old('Known_Allergies')}}"  id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></textarea>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-title text-success text-center bg-dark">
                            <i class="mdi mdi-account-card-details"></i> Parent/Guardian Information
                        </div>
                        <div class="card-title  text-purple">
                            <i class="fas fa-users"></i> Personal Information
                        </div>

                        <div class="form-row">
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Parent/Guardian<Text style="color: red">*</Text></span>
                                    </div>
                                    <select name="role" class="form-control" required>
                                        <option selected disabled>Select salutation</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Guardian">Guardian</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">First Name<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Middle Name<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="middle_name" class="form-control" value="{{old('middle_name')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Last Name<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Passport / NIC Number <Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="NIC_Passport" class="form-control" value="{{old('NIC_Passport')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Nationality<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="pr_nationality" class="form-control" value="{{old('pr_nationality')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Race<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="pr_race" class="form-control" value="{{old('pr_race')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Religion<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="pr_religion" class="form-control" value="{{old('pr_religion')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card-title  text-purple">
                            <i class="fas fa-users"></i> Work Information
                        </div>

                        <div class="form-row">
                            <div class="col-md-3 mb-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Working Sector <Text style="color: red">*</Text></span>
                                    </div>
                                    <select name="working_sector" class="form-control" required>
                                        <option selected disabled>Select salutation</option>
                                        <option value="Goverment">Goverment</option>
                                        <option value="Semi Goverment">Semi Goverment</option>
                                        <option value="NGO">NGO</option>
                                        <option value="Private">Private</option>
                                        <option value="Other">Other</option>
                                        <option value="House Wife">House Wife</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Profession<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="profession" class="form-control" value="{{old('profession')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Occupation<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="occupation" class="form-control" value="{{old('occupation')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Place of Work<Text style="color: red">*</Text></span>
                                    </div>
                                    <textarea class="form-control" name="work_place" value="{{old('work_place')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></textarea>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="card-title  text-purple">
                            <i class="fas fa-users"></i> Contact Information
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Email Address<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="email" name="email" class="form-control" value="{{old('email')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Office Address<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="work_address" class="form-control" value="{{old('work_address')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Office Phone<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="work_telephone" class="form-control" value="{{old('work_telephone')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Telephone No(Mob)<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="telephone_mob" class="form-control" value="{{old('telephone_mob')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card-title text-success text-center bg-dark">
                            <i class="mdi mdi-paperclip"></i> Documents Needed
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Child Birth Certificate<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="file" name="email" class="form-control" value="{{old('email')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Grama Niladhari Cerificate<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="file" name="work_address" class="form-control" value="{{old('work_address')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">Parent Marriage Certificate<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="file" name="work_telephone" class="form-control" value="{{old('work_telephone')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>



                        </div>




                        <div class="card-footer text-white bg-dark">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">SUBMIT</button>
                            <button class="btn btn-warning" type="reset">RESET</button>
                        </div>
                    </form>
                </div>
            </div>



            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>
            <script type="text/javascript">
                $('#browse_image').on('click', function(e){
                    $('#image').click();
                })
                $('#image').on('change', function(e){
                    var fileInput = this;
                    if(fileInput.files[0]){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#img').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(fileInput.files[0]);
                    }
                })
            </script>

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