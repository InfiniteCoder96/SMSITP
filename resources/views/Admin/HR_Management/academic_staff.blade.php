@extends('layouts.app')

@section('content')

    @include('layouts.HRLayouts.header')
    @include('layouts.HRLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Teaching Staff Details</h5>
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
                            <th scope="col" style="font-size: 12px">ID</th>
                            <th scope="col" style="font-size: 12px">DoA</th>
                            <th scope="col" style="font-size: 12px">First Name</th>
                            <th scope="col" style="font-size: 12px">Middle name</th>
                            <th scope="col" style="font-size: 12px">Last Name</th>
                            <th scope="col" style="font-size: 12px">DoB</th>
                            <th scope="col" style="font-size: 12px">Gender</th>
                            <th scope="col" style="font-size: 12px">Address</th>
                            <th scope="col" style="font-size: 12px">Email</th>
                            <th scope="col" style="font-size: 12px">Telephone (Res)</th>
                            <th scope="col" style="font-size: 12px">Telephone (Mob)</th>
                            <th scope="col" style="font-size: 12px">Status</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">

                        {{--code for view data from databse--}}

                        {{--@foreach($students as $student)--}}

                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>


                            <td style="font-size: 12px">S123</td>
                            <td style="font-size: 12px">2018-05-14</td>
                            <td style="font-size: 12px">Gihara</td>
                            <td style="font-size: 12px">Thewara</td>
                            <td style="font-size: 12px">Gihan</td>
                            <td style="font-size: 12px">1996-11-08</td>
                            <td style="font-size: 12px">Male</td>
                            <td style="font-size: 12px">1/A,Poukna Mw,Disa Wawa</td>
                            <td style="font-size: 12px">parakumbbb@gmail.com</td>
                            <td style="font-size: 12px">0711254878</td>
                            <td style="font-size: 12px">0112879456</td>
                            <td style="font-size: 12px;background-color:red;color: white" >Absent</td>
                            <td style="font-size: 12px">
                                <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                    <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>


                            <td style="font-size: 12px">S123</td>
                            <td style="font-size: 12px">2018-05-14</td>
                            <td style="font-size: 12px">Gihara</td>
                            <td style="font-size: 12px">Thewara</td>
                            <td style="font-size: 12px">Gihan</td>
                            <td style="font-size: 12px">1996-11-08</td>
                            <td style="font-size: 12px">Male</td>
                            <td style="font-size: 12px">1/A,Poukna Mw,Disa Wawa</td>
                            <td style="font-size: 12px">parakumbbb@gmail.com</td>
                            <td style="font-size: 12px">0711254878</td>
                            <td style="font-size: 12px">0112879456</td>
                            <td style="font-size: 12px;background-color: green;color: white" >Present</td>
                            <td style="font-size: 12px">
                                <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                    <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                            </td>
                        </tr>
                        {{--@endforeach--}}

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <form class="form-horizontal" action="#" method="get">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Recuit New Teacher</h5>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">User Role</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                            <option>Select</option>
                                            <optgroup label="Academic">
                                                <option value="AK">Teacher</option>
                                                <option value="AK">Academic Manager</option>

                                            </optgroup>
                                            <optgroup label="Non Academic">
                                                <option value="WA">Administrator</option>
                                                <option value="NV">Coach</option>
                                                <option value="CA">Finance Manager</option>
                                                <option value="WA">Non Academic Manager</option>
                                                <option value="WA">Transport Manager</option>
                                                <option value="OR">Warden</option>
                                            </optgroup>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="First Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">NIC Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="id" placeholder="NIC Number here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono1" placeholder="Contact No Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono1" placeholder="Contact No Here" required>
                                    </div>
                                    {{--<div class="col-sm-9">--}}
                                    {{--<textarea class="form-control"></textarea>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>

                            </div>


                        </div>







                    </div>
                    <div class="col-md-6">
                        <div class="card">

                            <div class="card-body">
                                <h4 class="card-title">Career Info</h4>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">User Role</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                            <option>Select</option>
                                            <optgroup label="Academic">
                                                <option value="AK">Teacher</option>
                                                <option value="AK">Academic Manager</option>

                                            </optgroup>
                                            <optgroup label="Non Academic">
                                                <option value="WA">Administrator</option>
                                                <option value="NV">Coach</option>
                                                <option value="CA">Finance Manager</option>
                                                <option value="WA">Non Academic Manager</option>
                                                <option value="WA">Transport Manager</option>
                                                <option value="OR">Warden</option>
                                            </optgroup>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="First Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name Here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">ID Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="id" placeholder="S458" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono1" placeholder="Contact No Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono1" placeholder="Contact No Here">
                                    </div>
                                    {{--<div class="col-sm-9">--}}
                                    {{--<textarea class="form-control"></textarea>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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