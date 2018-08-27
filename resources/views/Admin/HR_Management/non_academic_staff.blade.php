@extends('layouts.app')

@section('content')

    @include('layouts.HRLayouts.header')
    @include('layouts.HRLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card card bg-secondary text-white">
                <div class="card-body card text-white bg-danger mb-3">
                    <h5 class="card-title m-b-0">Non Academic Staff Details</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>
                                <label class="customcheckbox m-b-20">
                                    <input type="checkbox" id="mainCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <th scope="col" style="font-size: 12px">User ID</th>
                            <th scope="col" style="font-size: 12px">User Name</th>
                            <th scope="col" style="font-size: 12px">Contact No</th>
                            <th scope="col" style="font-size: 12px">Category</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">

                        @foreach($nonacademics as $nonacademic)
                            <tr>
                                <th>
                                    <label class="customcheckbox m-b-20">
                                        <input type="checkbox" id="mainCheckbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <td>{{$nonacademic['rid']}}</td>
                                <td>{{$nonacademic['name']}}</td>
                                <td>{{$nonacademic['contact_number']}}
                                <td>{{$nonacademic['category']}}</td>

                                <td style="font-size: 12px">
                                    <a  ><button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#updateAcademicStaffModal"

                                                 data-id="{{$nonacademic['id']}}"
                                                 data-name="{{$nonacademic['name']}}"
                                                 data-category="{{$nonacademic['category']}}"
                                                 data-contact_number="{{$nonacademic['contact_number']}}"

                                                 type="button">Edit</button></a>

                                    <form action="{{action('nonacademicController@destroy', $nonacademic['id'])}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>


                            </tr>

                        @endforeach

                        {{--@endforeach--}}

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->

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

            <form class="form-horizontal" action="{{url('recruits')}}" method="post">
                {{csrf_field()}}
                <div class="row">

                    <div class="col-md-6">
                        <div class="card card bg-secondary text-white">
                            <div class="card-body text-white bg-success mb-3">
                                <h5 class="card-title m-b-0">Recruit New User</h5>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>
                                <div class="form-group row">
                                    <label for="id" class="col-sm-3 text-right control-label col-form-label">User ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="id" name="rid" placeholder="User ID Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">User Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="User Name Here" required>
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
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact No Here" required>
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
        </div>
    </div>



    @include('layouts.adminLayouts.footer')

@endsection