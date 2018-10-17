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

            <form class="form-horizontal" action="{{url('recruits')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="row">


                    <div class="col-md-6">
                        <div class="card card bg-secondary text-white">
                            <div class="card-body text-white bg-warning mb-3">
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
                                        <input type="text" class="form-control" id="nic" name="nic" placeholder="NIC Number Here" value="{{old('nic')}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address Here" value="{{old('address')}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dob" class="col-sm-3 text-right control-label col-form-label">Date Of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="dob" name="dob" placeholder="Date Of Birth Here" value="{{old('dob')}}"  required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age" class="col-sm-3 text-right control-label col-form-label">E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail Here" value="{{old('email')}}" required>
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

                                            <option value="Teacher">Teacher</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_number" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact No Here" value="{{old('contact_number')}}" required>
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
                <div class="card-body card text-white bg-cyan mb-3">
                    <h5 class="card-title m-b-0">Teaching Staff Details</h5>

                    <form class="form-horizontal" action="{{url('search')}}" method="get">
                        {{csrf_field()}}

                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="tid" id="tid"placeholder="Search ID...">
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
                        <tr><th>
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


{{--@if($recruits != null)--}}


                        @foreach($recruits as $recruit)
                            <tr>
                                <th>
                                </th>
                                <td>{{$recruit->tid}}</td>
                                <td>{{$recruit->name}}</td>
                                <td>{{$recruit->nic}}</td>
                                <td>{{$recruit->address}}</td>
                                <td>{{$recruit->dob}}</td>
                                <td>{{$recruit->email}}</td>
                                <td>{{$recruit->gender}}</td>
                                <td>{{$recruit->status}}</td>
                                <td>{{$recruit->category}}</td>
                                <td>{{$recruit->contact_number}}</td>
                                <td><a class="text-cyan font-14" href="storage/uploads/{{$recruit->documents}}" download="{{$recruit->documents}}" target="_blank">{{$recruit->documents}}</a></td>


                                <td style="font-size: 12px">

                                    <a class="waves-effect waves-dark" href="{{action('recruitController@edit', $recruit['id'])}}"><i class="mdi mdi-pencil font-20"></i></a>
                                    <form action="{{action('recruitController@destroy', $recruit->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Do you really want to delete')")>Delete</button>
                                    </form>
                                </td>


                            </tr>

                        @endforeach
{{--@endif--}}





                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->




        </div>
    </div>



    @include('layouts.adminLayouts.footer')

@endsection