@include('layouts.FrontendLayouts.head')


<body style="background-image: url({{asset('assets/images/frontend_images/iStock-494617082.jpg')}});background-size: cover;">

@include('layouts.FrontendLayouts.header')
@include('layouts.FrontendLayouts.navbar')

<!-- / header -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif


<div class="container">
        <div class="col-md-12" style="margin-top: 30px">

                @if ($success)
                    <div id="alertBox" class="alert alert-success">
                        <a class="close" data-dismiss="alert">&times;</a>
                        <ul>

                            <li>{{ $success }}</li>

                        </ul>
                    </div><br />
                @endif

        </div>
        <div class="col-md-12" style="margin-left: 250px;margin-top: 100px">
            <div class="row">
                <h5 style="color: white">We'll contact you soon...Thank You</h5>

            </div>
            <div class="row">

                <h3 style="color: gold">Download Your Application Here.....<br><br>
                        <a href="{{url('/download-application?stdID='.$stdID)}}"><button class="btn btn-md btn-danger btn-block" >DOWNLOAD</button></a></h3>

            </div>
        </div>
</div>
<script>
    setTimeout(function() {
        $('#alertBox').hide('fade');
    }, 4000);
</script>


</body>
</html>
