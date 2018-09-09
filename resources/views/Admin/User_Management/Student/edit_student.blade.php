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

                <div class="card text-left">
                    <div class="card-header bg-dark text-orange">
                        <i class="mdi mdi-account-plus "></i> Enroll New Student
                    </div>
                    <div class="card-body bg-info text-white">
                        <h5><i class="fas fa-info-circle"></i> Please enter the information in the designated boxes. Click on the SUBMIT button when completed.
                            <Text style="color: red">*</Text>   indicates required field.</h5>
                    </div>
                    <div class="card-body">

                        <form class="needs-validation" novalidate action="{{action('StudentController@update', $sid)}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="card-title text-purple">
                                <i class="fas fa-building"></i> School Information
                            </div>
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
                            <div class="card-title text-purple">
                                <i class="fas fa-user"></i> Student Information(applicant)
                            </div>
                            <div class="card-title text-success text-lg-center bg-dark">
                                <i class="mdi mdi-account-card-details"></i> Personal Information
                            </div>
                            <div class="row">

                                <div class="col-md-3">
                                    <img src="{{asset('storage/StudentImages/Large/'.$student->image)}}" id="img" style="height:280px;width: 280px;background-color: #ccc;border: 2px solid gray;">
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">

                                            <div class="input-group">

                                                <input type="file" name="image" class="form-control" id="image" placeholder="Username" aria-describedby="inputGroupPrepend" style="display: none" required>
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
                                                            <option value="Master" <?php if($student->salutation=="Master") echo 'selected="selected"'; ?> >Master</option>
                                                            <option value="Mr" <?php if($student->salutation=="Mr") echo 'selected="selected"'; ?> >Mr</option>
                                                            <option value="Ms" <?php if($student->salutation=="Ms") echo 'selected="selected"'; ?> >Ms</option>

                                                        </select>
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">First Name</span>
                                                        </div>
                                                        <input type="text" name="first_Name" value="{{$student->first_Name}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                        <div class="invalid-feedback">
                                                            Please choose a username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">Middle Name</span>
                                                        </div>
                                                        <input type="text" name="middle_Name" value="{{$student->middle_Name}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                        <div class="invalid-feedback">
                                                            Please choose a username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">Last Name</span>
                                                        </div>
                                                        <input type="text" name="last_Name" value="{{$student->last_Name}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                        <div class="invalid-feedback">
                                                            Please choose a username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">Date of birth</span>
                                                        </div>
                                                        <input type="date" name="DoB" value="{{$student->DoB}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                        <div class="invalid-feedback">
                                                            Please choose a username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">Date of birth</span>
                                                        </div>
                                                        <input type="date" name="DoB" value="{{$student->DoB}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
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
                                                            <span class="input-group-text" id="inputGroupPrepend">Gender<Text style="color: red">*</Text></span>
                                                        </div>
                                                        <select name="Gender" class="form-control" required>
                                                            <option value="Male" <?php if($student->Gender=="Male") echo 'selected="selected"'; ?> >Male</option>
                                                            <option value="Mr" <?php if($student->Gender=="Female") echo 'selected="selected"'; ?> >Female</option>

                                                        </select>
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
                                                            <span class="input-group-text" id="inputGroupPrepend">NIC / Postal ID<Text style="color: red">*</Text></span>
                                                        </div>
                                                        <input type="text" name="NIC" value="{{$student->NIC}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                                            <span class="input-group-text" id="inputGroupPrepend">Birth Certificate No</span>
                                                        </div>
                                                        <input type="text" name="birth_certificate_no" value="{{$student->birth_certificate_no}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                        <div class="invalid-feedback">
                                                            Please choose a username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">

                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroupPrepend">Religion<Text style="color: red">*</Text></span>
                                                            </div>
                                                            <input type="text" name="religion" value="{{$student->religion}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
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
                                                                <span class="input-group-text" id="inputGroupPrepend">Race<Text style="color: red">*</Text></span>
                                                            </div>
                                                            <input type="text" name="race" value="{{$student->race}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                                                <span class="input-group-text" id="inputGroupPrepend">Nationality<Text style="color: red">*</Text></span>
                                                            </div>
                                                            <input type="text" name="nationality" value="{{$student->nationality}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                            </div>

                            <div class="card-title text-success text-center bg-dark">
                                <i class="mdi mdi-phone-classic"></i> Contact Information
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">Address<Text style="color: red">*</Text></span>
                                        </div>
                                        <textarea class="form-control" name="Address"  id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>{{$student->Address}}</textarea>

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
                                        <input type="text" name="Telephone_No_Res" value="{{$student->Telephone_No_Res}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <input type="text" name="Telephone_No_Mob" value="{{$student->Telephone_No_Mob}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <input type="text" name="Email_Address" value="{{$student->Email_Address}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title text-success text-center bg-dark">
                                <i class="mdi mdi-information-outline"></i> Other Information
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">Blood group</span>
                                        </div>
                                        <input type="text" name="blood_group" value="{{$student->blood_group}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <textarea class="form-control" name="Known_Illnesses" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>{{$student->Known_Illnesses}}</textarea>

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
                                        <textarea class="form-control" name="Known_Allergies" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>{{$student->Known_Allergies}}</textarea>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-title  text-purple">
                                <i class="fas fa-users"></i> Parent/Guardian Information
                            </div>
                            <div class="card-title text-success text-center bg-dark">
                                <i class="mdi mdi-account-card-details"></i> Personal Information
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-2">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">Parent/Guardian<Text style="color: red">*</Text></span>
                                        </div>
                                        <select name="role" class="form-control" required>
                                            <option value="Father" <?php if($student->role=="Father") echo 'selected="selected"'; ?> >Father</option>
                                            <option value="Mother" <?php if($student->role=="Mother") echo 'selected="selected"'; ?> >Mother</option>
                                            <option value="Guardian" <?php if($student->role=="Guardian") echo 'selected="selected"'; ?> >Guardian</option>

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
                                        <input type="text" name="first_name" value="{{$student->Parent_Guardian->first_name}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <input type="text" name="middle_name" value="{{$student->Parent_Guardian->middle_name}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <input type="text" name="last_name" value="{{$student->Parent_Guardian->last_name}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <input type="text" name="NIC_Passport" value="{{$student->Parent_Guardian->NIC_Passport}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
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
                                        <input type="text" name="nationality" value="{{$student->Parent_Guardian->nationality}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <input type="text" name="race" value="{{$student->Parent_Guardian->race}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <input type="text" name="religion" value="{{$student->Parent_Guardian->religion}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="card-title text-success text-center bg-dark">
                                <i class="mdi mdi-engine-outline"></i> Work Information
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
                                        <input type="text" name="profession" value="{{$student->Parent_Guardian->profession}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <input type="text" name="occupation" value="{{$student->Parent_Guardian->occupation}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <textarea class="form-control" name="work_place" value="{{$student->Parent_Guardian->work_place}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></textarea>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="card-title text-success text-center bg-dark">
                                <i class="mdi mdi-phone-classic"></i> Contact Information
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">Email Address<Text style="color: red">*</Text></span>
                                        </div>
                                        <input type="text" name="email" class="form-control" value="{{$student->Parent_Guardian->email}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
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
                                        <input type="text" name="work_address" value="{{$student->Parent_Guardian->work_address}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <input type="text" name="work_telephone" value="{{$student->Parent_Guardian->work_telephone}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                        <input type="text" name="telephone_mob" value="{{$student->Parent_Guardian->telephone_mob}}" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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