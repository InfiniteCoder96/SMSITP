@extends('layouts.app')

@section('content')

    @include('layouts.HRLayouts.header')
    @include('layouts.HRLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card ">
                <div class="card-body card text-white bg-danger mb-3">
                    <h5 class="card-title m-b-0">Payroll Info</h5>
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
                            <th scope="col" style="font-size: 12px">Basic Salary</th>
                            <th scope="col" style="font-size: 12px">Bonus</th>
                            <th scope="col" style="font-size: 12px">Deduction</th>
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
                            <td style="font-size: 12px">Perera</td>
                            <td style="font-size: 12px;background-color:goldenrod;color: white" >25,000</td>
                            <td style="font-size: 12px;background-color:goldenrod;color: white" >15,000</td>
                            <td style="font-size: 12px;background-color:goldenrod;color: white" >5,000</td>
                            <td style="font-size: 12px">
                                <a class="waves-effect waves-dark" href="" data-toggle="modal" data-target="#updatePlayrollDetailsModal"><i class="mdi mdi-pencil font-20" ></i></a>
                                <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i></a>
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
                            <td style="font-size: 12px">Perera</td>
                            <td style="font-size: 12px;background-color:goldenrod;color: white" >25,000</td>
                            <td style="font-size: 12px;background-color:goldenrod;color: white" >15,000</td>
                            <td style="font-size: 12px;background-color:goldenrod;color: white" >5,000</td>
                            <td style="font-size: 12px">
                                <a class="waves-effect waves-dark" href="" data-toggle="modal" data-target="#updatePlayrollDetailsModal"><i class="mdi mdi-pencil font-20" ></i></a>
                                <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <form class="form-horizontal" action="#" method="get">
                <div class="row">

                    <div class="col-md-6 ">
                        <div class="card ">

                            <div class="card-body card text-white bg-success mb-3">
                                <h4 class="card-title ">Calculate Salary</h4>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">User ID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" placeholder="User ID Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">User Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" placeholder="User Name Here" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Basic Salary</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="cono1" placeholder="Salary Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Bonus</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="cono1" placeholder="Bonus Here" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Deduction</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="cono1" placeholder="Deduction Here" required>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                            <h5 ><center>Net Salary is ......<center></center></h5>


                        </div>


                    </div>

                </div>

        </div>

        </form>

    </div>
    </div>



    @include('layouts.adminLayouts.footer')

@endsection