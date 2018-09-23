<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
@include('layouts.FrontendLayouts.head')
<style>
    * {
        box-sizing: border-box;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }
</style>
<body style="background-image: url({{asset('assets/images/frontend_images/kids-photo.jpg')}});background-size: cover;">
@include('layouts.FrontendLayouts.header')
@include('layouts.FrontendLayouts.navbar')

<div class="col-md-12 mb-3" style="margin-left: 500px;margin-top: 20px">
    <div class="row">
        @if ($errors->any())
            <div id="alertBox" class="alert alert-danger">
                <a class="close" data-dismiss="alert">&times;</a>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        @if (\Session::has('success'))
            <div id="alertBox" class="alert alert-success">
                <a class="close" data-dismiss="alert">&times;</a>

                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
    </div>

</div>
<div class="col-md-12  " style="opacity: 0.9">

    <form enctype="multipart/form-data"  id="regForm" action="{{url('students')}}" novalidate method="post" class="bg-dark text-white">
        {{csrf_field()}}
        <input type="hidden" value="joinUs" name="source">
        <h3>Online Application to Join St.John College</h3>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">School Information
            <div class="row">
                <div class="col-md-12 mb-3">
                    <p><select name="school" class="form-control"  >
                            <option selected disabled>- Select College / School -</option>
                            <option value="Master">Royal Institute,Kurunegala</option>

                        </select></p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p><select name="grade" class="form-control" required>
                            <option selected disabled>- Select Grade Applied For -</option>
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

                        </select></p>
                </div>
                <div class="col-md-6 mb-3">
                    <p> <select name="year_applied" class="form-control" required>
                            <option selected disabled>- Select Year Applied For -</option>
                            <option value="Master">2018/2019</option>
                            <option value="Ms">2019/2020</option>

                        </select></p>
                </div>
            </div>


        </div>

        <div class="tab">Student Information(applicant)
            <div class="row">
                <div class="col-md-offset-3 mb-3" style="margin-left: 350px">
                    <img src="{{asset('assets/images/no-image.png')}}" id="img" style="height:280px;width: 280px;background-color: #ccc;border: 2px solid #425be0;">



                    <div class="input-group">


                        <input type="file" name="image" class="form-control" id="image" placeholder="Username" aria-describedby="inputGroupPrepend" value="{{old('image')}}" style="display: none" required>
                        <input type="button" value="Browse" id="browse_image" class="btn btn-info form-control btn-block">
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>



                </div>




            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <p><select required name="salutation" class="form-control" >
                            <option selected disabled>- Select salutation -</option>
                            <option value="Master">Master</option>
                            <option value="Ms">Ms</option>
                            <option value="Mr">Mr</option>
                        </select></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="first_Name" class="form-control" id="validationCustomUsername" value="{{old('first_Name')}}" placeholder="First Name..." aria-describedby="inputGroupPrepend" required></p>

                </div>
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="middle_Name" class="form-control" id="validationCustomUsername" value="{{old('middle_Name')}}" placeholder="Middle Name..." aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="last_Name" class="form-control" id="validationCustomUsername" value="{{old('last_Name')}}" placeholder="Last Name..." aria-describedby="inputGroupPrepend" required></p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <p><input type="date" name="DoB" class="form-control" id="validationCustomUsername" value="{{old('DoB')}}" placeholder="Date of birth..." aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-4 mb-3">
                    <p><select name="Gender" class="form-control" required>
                            <option selected disabled>- Select Gender -</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select></p>
                </div>
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="NIC" class="form-control" id="validationCustomUsername" value="{{old('NIC')}}" placeholder="NIC/Passport..." aria-describedby="inputGroupPrepend" required></p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><input type="text" name="religion" class="form-control" id="validationCustomUsername" value="{{old('religion')}}" placeholder="Religion..." aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-4">
                    <p><input type="text" name="race" class="form-control" value="{{old('race')}}" id="validationCustomUsername" placeholder="Race..." aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-4">
                    <p><input type="text" name="nationality" class="form-control" value="{{old('nationality')}}" id="validationCustomUsername" placeholder="Nationality..." aria-describedby="inputGroupPrepend" required></p>
                </div>

            </div>
        </div>
        <div class="tab">Contact Information
            <div class="row">
                <div class="col-md-12 mb-3">
                    <textarea class="form-control" name="Address" value="{{old('Address')}}"  id="validationCustomUsername" placeholder="Address..." aria-describedby="inputGroupPrepend" required></textarea>
                </div>



            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p><input type="text" name="Telephone_No_Res" class="form-control" value="{{old('Telephone_No_Res')}}" id="validationCustomUsername" placeholder="Residential Telephone..." aria-describedby="inputGroupPrepend" required></p>

                </div>
                <div class="col-md-6 mb-3">
                    <p><input type="text" name="Telephone_No_Mob" class="form-control" value="{{old('Telephone_No_Mob')}}" id="validationCustomUsername" placeholder="Mobile Telephone..." aria-describedby="inputGroupPrepend" required></p>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <p><input type="email" name="Email_Address" class="form-control" value="{{old('Email_Address')}}" id="validationCustomUsername" placeholder="Email Address..." aria-describedby="inputGroupPrepend" required></p>
                </div>


            </div>

        </div>
        <div class="tab">Other Information
            <div class="row">
                <div class="col-md-4 mb-3">
                    <p><select name="blood_group" class="form-control" required>
                            <option selected disabled>- Select Blood Group -</option>
                            <option value="A+">A RhD positive (A+)</option>
                            <option value="A-">A RhD negative (A-)</option>
                            <option value="B+">B RhD positive (B+)</option>
                            <option value="B-">B RhD negative (B-)</option>
                            <option value="O+">O RhD positive (O+)</option>
                            <option value="O-">O RhD negative (O-)</option>
                            <option value="AB+">AB RhD positive (AB+)</option>
                            <option value="AB-">AB RhD negative (AB-)</option>


                        </select></p>
                </div>



            </div>
            <div class="row mb-3">

                <textarea class="form-control" name="Known_Illnesses" value="{{old('Known_Illnesses')}}" id="validationCustomUsername" placeholder="Known Illnesses..." aria-describedby="inputGroupPrepend" required></textarea>




            </div>
            <div class="row mb-3">
                <textarea class="form-control" name="Known_Allergies" value="{{old('Known_Allergies')}}"  id="validationCustomUsername" placeholder="Known Allergies..." aria-describedby="inputGroupPrepend" required></textarea>


            </div>
        </div>
        <div class="tab">Father/Mother/Guardian Information

            <div class="row">
                <div class="col-md-4 mb-3">
                    <p> <select name="role" class="form-control" required>
                            <option selected disabled>- Select Role -</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Guardian">Guardian</option>
                        </select></p>
                </div>


            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" id="validationCustomUsername" placeholder="First Name..." aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="middle_name" class="form-control" value="{{old('middle_name')}}" id="validationCustomUsername" placeholder="Middle Name..." aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="last_name" class="form-control" value="{{old('last_name')}}" id="validationCustomUsername" placeholder="Last Name..." aria-describedby="inputGroupPrepend" required></p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <p><input type="text" name="Parent_NIC_Passport" class="form-control" value="{{old('Parent_NIC_Passport')}}" id="validationCustomUsername" placeholder="NIC/Passport..." aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-3 mb-3">
                    <p><input type="text" name="pr_nationality" class="form-control" value="{{old('pr_nationality')}}" id="validationCustomUsername" placeholder="Nationality..." aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-3 mb-3">
                    <p><input type="text" name="pr_race" class="form-control" value="{{old('pr_race')}}" id="validationCustomUsername" placeholder="Race..." aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-3 mb-3">
                    <p><input type="text" name="pr_religion" class="form-control" value="{{old('pr_religion')}}" id="validationCustomUsername" placeholder="Religion..." aria-describedby="inputGroupPrepend" required></p>
                </div>
            </div>
        </div>
        <div class="tab">Father/Mother/Guardian Work Information
            <div class="row">
                <div class="col-md-4 mb-3">
                    <p> <select name="working_sector" class="form-control" required>
                            <option selected disabled>- Select Working Sector -</option>
                            <option value="Goverment">Goverment</option>
                            <option value="Semi Goverment">Semi Goverment</option>
                            <option value="NGO">NGO</option>
                            <option value="Private">Private</option>
                            <option value="Other">Other</option>
                            <option value="House Wife">House Wife</option>
                        </select></p>
                </div>


            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p><input type="text" name="profession" class="form-control" value="{{old('profession')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-6 mb-3">
                    <p><input type="text" name="occupation" class="form-control" value="{{old('occupation')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></p>
                </div>


            </div>
            <div class="row">
                <textarea class="form-control" name="work_place" value="{{old('work_place')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></textarea>
            </div>
        </div>
        <div class="tab">Father/Mother/Guardian Contact Information
            <div class="row mb-3">
                <textarea type="text" name="work_address" class="form-control" value="{{old('work_address')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></textarea>



            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <p><input type="email" name="email" class="form-control" value="{{old('email')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="work_telephone" class="form-control" value="{{old('work_telephone')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="telephone_mob" class="form-control" value="{{old('telephone_mob')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></p>
                </div>

            </div>

        </div>
        <div class="tab">Documents

            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">Grama Niladhari Cerificate<Text style="color: red">*</Text></span>
                        </div>
                        <input type="file" name="email" class="form-control" value="{{old('email')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
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
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">Parent Marriage Certificate<Text style="color: red">*</Text></span>
                        </div>
                        <input type="file" name="email" class="form-control" value="{{old('email')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button class="btn btn-md btn-info" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button class="btn btn-md btn-success" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                <a href="{{url('addDemoData')}}"><button type="button" class="btn btn-md btn-warning">ADD DEMO</button> </a>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
</div>



<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the crurrent tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }

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

    setTimeout(function() {
        $('#alertBox').hide('fade');
    }, 4000);
</script>

</body>
</html>
