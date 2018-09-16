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
<body style="background-image: url({{asset('assets/images/frontend_images/joinbackground.jpg')}});background-size: cover;">
@include('layouts.FrontendLayouts.header')
@include('layouts.FrontendLayouts.navbar')


<div class="container">
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

    <div class="row">
        <div class="col-md-8 mb-3" >

            <div class="row">
                <h3 style="float: left;color: goldenrod">Download Your Application</h3>

            </div>


            <div class="row" style="color: white">
                <button class="btn btn-block btn-success btn-md">DOWNLOAD</button>

            </div>
        </div>


    </div>
</div>






</body>
</html>
