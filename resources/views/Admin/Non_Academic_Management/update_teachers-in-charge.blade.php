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
                                <li class="breadcrumb-item active" aria-current="page">Sport Management</li>
                                <li class="breadcrumb-item active" aria-current="page">Teacher In Charge</li>
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
                <div class="col-md-4">
                    <form class="form-horizontal" action="{{action('t_inchargeController@update',$teacher_id)}}" method="post">

                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-danger text-white">
                                <h5 class="card-title m-b-0">Add New Teacher</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="teacher_id" class="col-sm-3 text-right control-label col-form-label">Teacher ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="teacher_id"  value="{{$t_incharge->teacher_id}}" placeholder="Teacher ID Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="teacher_name" class="col-sm-3 text-right control-label col-form-label">Teacher Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="teacher_name" value="{{$t_incharge->teacher_name}}" placeholder="Teacher Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sport_id" class="col-sm-3 text-right control-label col-form-label">Sport ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="sport_id" value="{{$t_incharge->sport_id}}" placeholder="Sport ID Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="o_docs" class="col-sm-3 text-right control-label col-form-label">Other Documents</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="o_docs" value="{{$t_incharge->o_docs}}" placeholder="Other Documents Here" required>
                                    </div>
                                </div>




                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-outline-success">Update</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
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