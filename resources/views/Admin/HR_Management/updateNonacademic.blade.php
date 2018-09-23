@extends('layouts.app')

@section('content')

    @include('layouts.HRLayouts.header')
    @include('layouts.HRLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="modal-header bg-warning">

                <h5 class="card-title m-b-0">Update Non Academic Staff Details</h5>

            </div>
            <div class="modal-body bg-dark">

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

                <form  action="{{action('nonacademicController@update',$nonacademic['id'])}}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <input type="hidden" id="id" name="id">

                    <div class="form-group row">
                        <label for="name" class="text-white-50 col-sm-1 text-right control-label col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" value="{{$nonacademic->name}}"  required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nic" class="text-white-50 col-sm-1 text-right control-label col-form-label">NIC</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nic" name="nic" value="{{$nonacademic->nic}}"  required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="text-white-50 col-sm-1 text-right control-label col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="address" value="{{$nonacademic->address}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dob" class="text-white-50 col-sm-1 text-right control-label col-form-label">Date Of Birth</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="dob" name="dob" value="{{$nonacademic->dob}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="age" class="text-white-50 col-sm-1 text-right control-label col-form-label">E-mail</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" name="email" value="{{$nonacademic->email}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gender" class="text-white-50 col-sm-1 text-right control-label col-form-label">Gender</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="gender"required>
                                <option selected disabled>Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="text-white-50 col-sm-1 text-right control-label col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="status"required>
                                <option selected disabled>Select</option>
                                <option value="married">Married</option>
                                <option value="single">Single</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category" class="text-white-50 col-sm-1 text-right control-label col-form-label">Category</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category"required>
                                <option selected disabled>Select</option>
                                <option value="Finance">Finance</option>
                                <option value="Sports">Sports</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contact_number" class="text-white-50 col-sm-1 text-right control-label col-form-label">Contact No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{$nonacademic->contact_number}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="file" class="text-white-50 col-sm-1 text-right control-label col-form-label">Upload Qualification</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                        </div>
                    </div>

                </form>
            </div>

            </form>


        </div>
    </div>

    @include('layouts.adminLayouts.footer')

@endsection