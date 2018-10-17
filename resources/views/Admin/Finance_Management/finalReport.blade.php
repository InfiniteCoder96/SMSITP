<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<img src="{{asset('assets/images/logos.png')}}" alt="homepage" class="light-logo" />
<h2>St. John College</h2>
<h2>Finance</h2>
<h3>Report for the date : <?php echo (date("Y-m-d")); ?></h3>
<table class="table table-bordered">
    <tr>
        <td>
            <p> Profit</p>
        </td>
        <td>
            {{$profit}}
        </td>
    </tr>
    <tr>
        <td>
            <p> Expences</p>
        </td>
        <td>
            {{$total}}
        </td>

    </tr>

    <tr>
        <td>
            <p>Approved Payments</p>
        </td>
        <td>
            {{$Total}}
        </td>

    </tr>

    <tr>
        <td>
            <p>Disapproved Payments</p>
        </td>
        <td>
            {{$Tot}}
        </td>

    </tr>
