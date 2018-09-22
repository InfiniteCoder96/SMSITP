<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" content="text/html" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title></title>
</head>
<body>
    <div align="center" class="">
        <h3 class="card-title text-black-50">St. John College</h3>
    </div>

    <p style="font-size: 15px"><B>Student ID :  {{$sId}} </B></p>
    <p style="font-size: 15px"><B>Student Name : {{$fname[0]}}</B></p>
    <p style="font-size: 15px"><B>Student ID :  {{$examId}} </B></p>

    <div class="row">

            <table class="table table-dark" style="border: 3px solid black ; border-collapse: collapse;">
                <thead class="thead-dark">
                <tr>
                    <th scope="col" style="font-size: 20px">Grade and term</th>
                    <th scope="col" style="font-size: 20px">Subjects</th>
                    <th scope="col" style="font-size: 20px">Marks/100</th>
                </tr>
                </thead>
                <tbody>

                @if($Datas != null)
                    @foreach($Datas as $data)
                            <tr>
                                <td style="font-size: 15px">{{$data->examId}}</td>>
                                <td style="font-size: 15px">{{$data->subject}}</td>
                                <td style="font-size: 12px">{{$data->marks}}</td>
                            </tr>
                    @endforeach
                @endif

                </tbody>
            </table>

            <p style="font-size: 15px"><B>Total marks :  {{$total}}/{{$count*100}} </B></p>
            <p style="font-size: 15px"><B>Average :  {{$avg}}% </B></p>

    </div>

</body>
</html>


