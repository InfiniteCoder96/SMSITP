<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" content="text/html" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title></title>
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

<div class="row">
    <center><h1>SALARY SLIP</h1></center>
    <table class="table table-dark" style="border: 3px solid black ; border-collapse: collapse;">

    @foreach($salary as $value )

            <thead class="thead-dark">
            <tr>
                <th scope="col" style="font-size: 20px">Employee ID</th>
                <th scope="col" style="font-size: 20px">Basic Salary</th>
                <th scope="col" style="font-size: 20px">Allowances</th>
                <th scope="col" style="font-size: 20px">Bonus</th>
                <th scope="col" style="font-size: 20px">Deductions</th>
                <th scope="col" style="font-size: 20px">Net Salary</th>
            </tr>
            </thead>


            <tr>
                <th>{{$value->sid}}</th>
                <th>{{$value->bSalary}}</th>
                <th>{{$value->allowance}}</th>
                <th>{{$value->bonus}}</th>
                <th>{{$value->deduction}}</th>
                <th>{{$value->net_salary}}</th>
            </tr>
        @endforeach
</table>
</div>
</body>
</html>
