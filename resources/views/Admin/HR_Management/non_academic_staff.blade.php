@extends('layouts.app')

@section('content')

    @include('layouts.HRLayouts.header')
    @include('layouts.HRLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">



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

            <form class="form-horizontal" action="{{url('nonacademic')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="row">


                    <div class="col-md-6">
                        <div class="card card bg-secondary text-white">
                            <div class="card-body text-white bg-primary mb-3">
                                <h5 class="card-title m-b-0">Recruit New User</h5>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>


                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">User Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="User Name Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nic" class="col-sm-3 text-right control-label col-form-label">NIC</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nic" name="nic" placeholder="NIC Number Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dob" class="col-sm-3 text-right control-label col-form-label">Date Of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="dob" name="dob" placeholder="Date Of Birth Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age" class="col-sm-3 text-right control-label col-form-label">E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gender" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="gender"required>
                                            <option selected disabled>Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="status"required>
                                            <option selected disabled>Select</option>
                                            <option value="married">Married</option>
                                            <option value="single">Single</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="category" class="col-sm-3 text-right control-label col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category"required>
                                            <option selected disabled>Select</option>

                                            <option value="sports">Sports</option>
                                            <option value="finance">Finance</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_number" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact No Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="file" class="col-sm-3 text-right control-label col-form-label">Upload Qualification</label>
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


                            </div>


                        </div>

                    </div>

                </div>


            </form>

            <div class="card card bg-secondary text-white">
                <div class="card-body card text-white bg-danger mb-3">
                    <h5 class="card-title m-b-0">Non Academic Staff Details</h5>

                    <form class="form-horizontal" action="{{url('searchNon')}}" method="get">
                        {{csrf_field()}}

                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="id" placeholder="Search ID...">
                            <span class="input-group-btn">
                         <button class="btn btn-default-sm" type="submit">
                            <i class="fa fa-search"></i>
                         </button>
                    </span>
                        </div>
                    </form>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>

                            </th>
                            <th scope="col" style="font-size: 12px">User ID</th>
                            <th scope="col" style="font-size: 12px">User Name</th>
                            <th scope="col" style="font-size: 12px">NIC No</th>
                            <th scope="col" style="font-size: 12px">Address</th>
                            <th scope="col" style="font-size: 12px">Date Of Birth</th>
                            <th scope="col" style="font-size: 12px">E-mail</th>
                            <th scope="col" style="font-size: 12px">Gender</th>
                            <th scope="col" style="font-size: 12px">Status</th>
                            <th scope="col" style="font-size: 12px">Category</th>
                            <th scope="col" style="font-size: 12px">Contact No</th>
                            <th scope="col" style="font-size: 12px">Documents</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">

                        @foreach($nonacademics as $nonacademic)
                            <tr>
                                <th>

                                </th>
                                <td>{{$nonacademic['nid']}}</td>
                                <td>{{$nonacademic['name']}}</td>
                                <td>{{$nonacademic['nic']}}</td>
                                <td>{{$nonacademic['address']}}</td>
                                <td>{{$nonacademic['dob']}}</td>
                                <td>{{$nonacademic['email']}}</td>
                                <td>{{$nonacademic['gender']}}</td>
                                <td>{{$nonacademic['status']}}</td>
                                <td>{{$nonacademic['category']}}</td>
                                <td>{{$nonacademic['contact_number']}}</td>
                                <td>{{$nonacademic['documents']}}


                                <td style="font-size: 12px">
                                    <a class="waves-effect waves-dark" href="{{action('nonacademicController@edit', $nonacademic['id'])}}"><i class="mdi mdi-pencil font-20"></i></a>
                                    <form action="{{action('nonacademicController@destroy', $nonacademic['id'])}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Do you really want to delete')")>Delete</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    @include('layouts.adminLayouts.footer')

@endsection