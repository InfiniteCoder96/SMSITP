<?php use Carbon\Carbon; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{asset('css/backend_css/bootstrap.min.css')}}" rel="stylesheet">
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-md-12 mb-3">
        <div class="col-md-6 ">
            <a href="index.html" id="logo" title="HarrisonHighSchool" style="background-image: url({{asset('assets/images/frontend_images/logo_school2.png')}});
                    width: 190px;
                    height: 190px;
                    display: block;
                    cursor: pointer;
                    margin-left: 240px;
                    text-indent: -9999em;
                    z-index: 3;">HarrisonHighSchool</a>
        </div>
        <div class="col-md-6">
            <center><h5>St.John College Admission Form 2018/2019</h5></center>
        </div>

    </div>

</div>
<div class="row" style="margin-top: 30px">

    <table class="table table-dark">
        <tbody>
        <tr>
            <td colspan="2" scope="col"></td>

            <td colspan="2" scope="col" style="text-align: right">Date : {{Carbon::now()->toDateString()}}</td>
        </tr>

        <tr>

            <td scope="col" colspan="4" class="bg-danger">Student Information</td>

        </tr>
        <tr>


            <td colspan="4" scope="col" align="center"><img src="{{asset('storage/StudentImages/Large/'.$student['image'])}}" class="rounded-circle" style="width:210px;height: 230px;border: 2px solid crimson" ></td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Full Name :</td>
            <td colspan="2" scope="col">{{$student['salutation']}}.{{$student['first_Name']}} {{$student['middle_Name']}} {{$student['last_Name']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Date of Birth :</td>
            <td colspan="2" scope="col">{{$student['DoB']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">NIC / Postal ID :</td>
            <td colspan="2" scope="col">{{$student['NIC']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Gender :</td>
            <td colspan="2" scope="col">{{$student['Gender']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Religion :</td>
            <td colspan="2" scope="col">{{$student['religion']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Religion :</td>
            <td colspan="2" scope="col">{{$student['race']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Nationality :</td>
            <td colspan="2" scope="col">{{$student['nationality']}}</td>
        </tr>
        <tr>

            <td scope="col" class="bg-danger" colspan="4">Student Contact Information</td>

        </tr>
        <tr>

            <td colspan="2" scope="col">Address :</td>
            <td colspan="2" scope="col">{{$student['Address']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Telephone(Res) :</td>
            <td colspan="2" scope="col">{{$student['Telephone_No_Res']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Telephone(Mob) :</td>
            <td colspan="2" scope="col">{{$student['Telephone_No_Mob']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Email :</td>
            <td colspan="2" scope="col">{{$student['Email_Address']}}</td>
        </tr>
        <tr>

            <td scope="col" class="bg-danger" colspan="4">Student Other Information</td>

        </tr>
        <tr>

            <td colspan="2" scope="col">Blood group :</td>
            <td colspan="2" scope="col">{{$student['blood_group']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Known Illnesses :</td>
            <td colspan="2" scope="col">{{$student['Known_Illnesses']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Known Allergies :</td>
            <td colspan="2" scope="col">{{$student['Known_Allergies']}}</td>
        </tr>
        <tr>

            <td scope="col" class="bg-danger" colspan="4">Parent/Guardian Information</td>

        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['role']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian Full Name :</td>
            <td colspan="2" scope="col">
                @if($student->Parent_Guardian['role'] == 'Father')
                    Mr.{{$student->Parent_Guardian['first_name']}} {{$student->Temporary_Parent_Guardian['middle_name']}} {{$student->Temporary_Parent_Guardian['last_name']}}</td>
                @else
                Mrs.{{$student->Temporary_Parent_Guardian['first_name']}} {{$student->Temporary_Parent_Guardian['middle_name']}} {{$student->Temporary_Parent_Guardian['last_name']}}</td>
                @endif
        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian Passport / NIC Number :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['NIC_Passport']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian Nationality :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['nationality']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian Race :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['race']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian Religion :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['religion']}}</td>
        </tr>
        <tr>

            <td scope="col" class="bg-danger" colspan="4">Parent/Guardian Work Information</td>

        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian Working Sector :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['working_sector']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian Profession :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['profession']}}</td>
        </tr>
        <tr >

            <td colspan="2" scope="col">Parent/Guardian Occupation :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['occupation']}}</td>
        </tr>
        <tr >

            <td colspan="2" scope="col">Parent/Guardian Place of Work :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['work_place']}}</td>
        </tr>
        <tr>

            <td scope="col" class="bg-danger" colspan="4">Parent/Guardian Contact Information</td>

        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian Email Address :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['email']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian Office Address :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['work_address']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian Office Phone :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['work_telephone']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Parent/Guardian Telephone No(Mob) :</td>
            <td colspan="2" scope="col">{{$student->Temporary_Parent_Guardian['telephone_mob']}}</td>
        </tr>
        </tbody>
    </table>

</div>
<div class="row">
    <p style="margin-top: 200px">I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief and I undertake to inform you of any changes therein, immediately.</p>
</div>
<div class="row">
    <div class="col-md-6">
        <p style="margin-top: 100px">..........................................<br>
            Parent/Guardian Signature</p>
    </div>
    <div class="col-md-6" >
        <p style="margin-top: 100px;float: right">.................................<br>
            Date</p>
    </div>

</div>

</body>
</html>