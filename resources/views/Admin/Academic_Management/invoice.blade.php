{{--<!DOCTYPE html>--}}

{{--<HTML>--}}
{{--<BODY>--}}
{{--<H5 style="color:#8a1f11;">Heloo </H5>--}}
{{--{{$data['name']}}--}}
{{--<a href="{{url('/Aadmin/pdf')}}">Download PDF</a>--}}
{{--<a href="{{url('Aadmin/pdf/export')}}">Download</a>--}}


{{--</BODY>--}}
{{--</HTML>--}}


                {{--<table>--}}
                    {{--<tr>--}}
                        {{--<th>No</th>--}}
                        {{--<th>Product Name</th>--}}
                        {{--<th>Price</th>--}}
                    {{--</tr>--}}

                    {{--<tr>--}}
                        {{--<td>1</td>--}}
                        {{--<td>Laptop</td>--}}
                        {{--<td>33,000</td>--}}
                    {{--</tr>--}}

                    {{--<tr>--}}
                        {{--<td>2</td>--}}
                        {{--<td>Tablet</td>--}}
                        {{--<td>15,000</td>--}}
                    {{--</tr>--}}

                    {{--<tr>--}}
                        {{--<td>3</td>--}}
                        {{--<td>Mobile</td>--}}
                        {{--<td>10,000</td>--}}
                    {{--</tr>--}}
                {{--</table>--}}




<?php use Carbon\Carbon; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{asset('css/backend_css/bootstrap.min.css')}}" rel="stylesheet">


    <head>
        <style>
            .page-break {
                page-break-after: always;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;

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
                    margin-left: 260px;
                    text-indent: -9999em;
                    z-index: 3;">HarrisonHighSchool</a>
        </div>
        <div class="col-md-6">
            <center><h2>Subject Assigned for Teachers</h2></center>
        </div>

    </div>

</div>


<div>
    <h4>Subject List</h4>

    <h3>Teacher ID :- {{$SubID[1]}}</h3>
    <h3>Teacher Name :- {{$SubName[1]}}</h3>
</div>



<table style="width:100%">
    <tr style="background-color:#0d374a; text-align: center">
        <th>Subject ID</th>
        <th>Subject Name</th>
    </tr>

    @foreach($Results as $result)
        <tr style="text-align: center">
            <td>{{$result['SubjectID']}}</td>
            <td>{{$result['SubjectName']}}</td>
        </tr>
    @endforeach


</table>


</body>
</html>