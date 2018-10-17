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
            <a href="index.html" id="logo" title="HarrisonHighSchool" style="background-image: url({{asset('assets/images/users/logo_school2.png')}});
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
    <center><h1>Expence Report</h1></center>
    <table class="table table-dark" style="border: 3px solid black ; border-collapse: collapse;">



            <thead class="thead-dark">
            <tr>
                <th scope="col" style="font-size: 20px">Expence Type</th>
                <th scope="col" style="font-size: 20px">Name</th>
                <th scope="col" style="font-size: 20px">ID</th>
                <th scope="col" style="font-size: 20px">Amount</th>
                <th scope="col" style="font-size: 20px">Email</th>
                <th scope="col" style="font-size: 20px">Status</th>
                <th scope="col" style="font-size: 20px">Date</th>

            </tr>
            </thead>

        @foreach($expence as $value )
            <tr>
                <th>{{$value->ExpenceType}}</th>
                <th>{{$value->Name}}</th>
                <th>{{$value->ID}}</th>
                <th>{{$value->Amount}}</th>
                <th>{{$value->Email}}</th>
                <th>{{$value->Status}}</th>
                <th>{{$value->Date}}</th>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
