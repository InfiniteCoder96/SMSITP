@extends('layouts.app')

@section('content')

    @include('layouts.adminLayouts.header')
    @include('layouts.NonAcademicLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Event Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Event Management</li>
                                <li class="breadcrumb-item active" aria-current="page">Event</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <h2></h2><br  />
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif


            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" action="{{url('/events')}}" method="post">
                        {{csrf_field()}}


                        <div class="card bg-#4F5467 text-white">
                            <div class="card-header bg-info text-white">
                                <h5 class="card-title m-b-0">Add New Event</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-2 text-right control-label col-form-label text-dark">Date</label>
                                    <div class="col-sm-8">
                                        <input  type="date" class="form-control" name="date" id="date" placeholder ="Date Here " required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="heading" class="col-sm-2 text-right control-label col-form-label text-dark">Title</label>
                                    <div class="col-sm-8">
                                        <input  type="text" class="form-control" name="heading" id="heading" placeholder ="Title Here " required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="time" class="col-sm-2 text-right control-label col-form-label text-dark">Time</label>
                                    <div class="col-sm-8">
                                        <input  type="text"   class="form-control" name="time" id="time" placeholder="Time Here" required>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="place" class="col-sm-2 text-right control-label col-form-label text-dark">Place</label>
                                    <div class="col-sm-8">
                                        <input  type="text" class="form-control" name="place" id="place" placeholder="place name Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 text-right control-label col-form-label text-dark">Description</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="description" id="description" placeholder="Description Here" required></textarea>
                                    </div>
                                </div>



                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-secondary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="col-md-12">


                    <div class="col-md-12">


                        <div class="card bg-secondary text-white">
                            <div class="card-header bg-info text-white">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <h5 class="card-title m-b-0">Events Details</h5>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="col-sm-3">


                                    </div>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="fname" placeholder="Search">
                                    </div>
                                    <button class="btn btn-secondary btn-xm">Search</button>

                                 <div>  <a href="{{url('/viewevents')}}">    <button class="btn btn-secondary btn-md" style="margin-left: 10px" >View Page</button>  </a></div>

                                </div>


                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>
                                            <label class="customcheckbox m-b-20">
                                                <input type="checkbox" id="mainCheckbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <th scope="col" style="font-size: 12px">Event ID</th>
                                        <th scope="col" style="font-size: 12px">Date</th>
                                        <th scope="col" style="font-size: 12px">Title</th>
                                        <th scope="col" style="font-size: 12px">Place</th>
                                        <th scope="col" style="font-size: 12px">Time</th>
                                        <th scope="col" style="font-size: 12px">Description</th>
                                        <th scope="col" style="font-size: 12px">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody class="customtable bg-white text-dark">

                                    @foreach($events as $event)





                                        <tr>
                                            <th>
                                                <label class="customcheckbox">
                                                    <input type="checkbox" class="listCheckbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </th>



                                            <td style="font-size: 12px">{{$event['event_id']}}</td>
                                            <td style="font-size: 12px">{{$event['date']}}</td>
                                            <td style="font-size: 12px">{{$event['heading']}}</td>
                                            <td style="font-size: 12px">{{$event['time']}}</td>
                                            <td style="font-size: 12px">{{$event['place']}}</td>
                                            <td style="font-size: 12px">{{$event['description']}}</td>
                                            <td style="font-size: 12px">
                                                <a class="waves-effect waves-dark" href="{{action('eventController@edit', $event['event_id'])}}"><i class="mdi mdi-pencil font-20"></i></a>

                                                <form action="{{action('eventController@destroy', $event['event_id'])}}" method="post">

                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-secondary" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach





                                    </tbody>

                                </table>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <p>Page : 1 of 1</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-info btn-md">First</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-info btn-md">Prev</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-info btn-md">Next</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-info btn-md">Last</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>


                            </div>
                        </div>

                    </div>

                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->




                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                </div>

            </div>
        </div>
    </div>


    @include('layouts.AcademicLayouts.footer')

@endsection
