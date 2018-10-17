@extends('layouts.app')



@section('content')

    @include('layouts.NonAcademicLayouts.header')
    @include('layouts.NonAcademicLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Sports Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Event Management</li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
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



            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" action="{{action('eventController@update',$event_id)}}" method="post">

                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-info text-white">
                                <h5 class="card-title m-b-0">Update Events </h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="event_id" class="col-sm-3 text-right control-label col-form-label">Event ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="event_id" id="event_id"  value="{{$events->event_id}}" placeholder="Event ID Name Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-sm-3 text-right control-label col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="date" id="date"  value="{{$events->date}}" placeholder="Event Date Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="heading" class="col-sm-3 text-right control-label col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="heading" id="heading" value="{{$events->heading}}" placeholder="Title Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="time" class="col-sm-3 text-right control-label col-form-label">Time</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="time" id="time" value="{{$events->time}}" placeholder="Time Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="place" class="col-sm-3 text-right control-label col-form-label">Place</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="place" id="place" value="{{$events->place}}" placeholder="Place name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="description" id="description" value="{{$events->description}}" placeholder="Description Here" required>
                                    </div>
                                </div>




                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-outline-info">Update</button>
                                    <button type="reset" class="btn btn-outline-info">Reset</button>
                                </div>
                            </div>

                        </div>









                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.AcademicLayouts.footer')

@endsection