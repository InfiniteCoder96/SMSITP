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
    <header id="header">
        <div class="container">
            <a href="index.html" id="logo" title="HarrisonHighSchool" style="background-image: url({{asset('assets/images/frontend_images/logo_school.png')}});width: 221px;
                    height: 234px;
                    display: block;
                    cursor: pointer;
                    margin: 0 auto -82px;
                    text-indent: -9999em;
                    position: relative;
                    z-index: 3;">HarrisonHighSchool</a>
            <div class="menu-trigger"></div>
            <nav id="menu">
                <ul>

                </ul>
                <ul>
                </ul>
            </nav>
            <!-- / navigation -->
        </div>
        <!-- / container -->

    </header>


        <div class="col-md-6">
            <center><h2>Sports Assigned For A Student</h2></center>
        </div>

    </div>

</div>


<div>
    <h4>Sport List</h4>

</div>



<table style="width:100%">
    <tr style="background-color:#0d374a; text-align: center">
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Sports ID</th>

    </tr>


        <tr style="text-align: center">

            <td>{{$sport_students['student_id']}}</td>
            <td>{{$sport_students['student_name']}}</td>
            <td>{{$sport_students['sport_id']}}</td>

        </tr>



</table>


</body>
</html>