@extends('layouts.app')

@section('content')

    @include('layouts.HRLayouts.header')
    @include('layouts.HRLayouts.sideBar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card ">

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
                    @if (\Session::has('fail'))
                        <div class="alert alert-warning">
                            <p>{{ \Session::get('fail') }}</p>
                        </div><br />
                    @endif


                <form class="form-horizontal" action="{{url('salary')}}" method="post">
                    {{csrf_field()}}

                    <div class="row">

                        <div class="col-md-6 ">
                            <div class="card ">

                                <div class="card-body card text-white bg-cyan mb-3">
                                    <h4 class="card-title ">Calculate Salary</h4>
                                </div>
                                <div class="form-group row">
                                    <label for="id" class="col-sm-3 text-right control-label col-form-label">User ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="sid" name="sid" placeholder="User ID Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id" class="col-sm-3 text-right control-label col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category"required>
                                            <option selected disabled>Select</option>

                                            <option value="academic">Academic</option>
                                            <option value="nonacademic">Non-academic</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="leave" class="col-sm-3 text-right control-label col-form-label">Leaves</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="leave"name="leave" placeholder="Leave days Here" required>
                                    </div>
                                </div>

                                {{--<div class="form-group row">--}}
                                    {{--<label for="bSalary" class="col-sm-3 text-right control-label col-form-label">Basic Salary</label>--}}
                                    {{--<div class="col-sm-9">--}}
                                        {{--<input type="text" class="form-control" id="bSalary"name="bSalary" placeholder="Salary Here" required>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <div class="form-group row">
                                    <label for="allowance" class="col-sm-3 text-right control-label col-form-label">allowance</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="allowance"name="allowance" placeholder="Allowance Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="bonus" class="col-sm-3 text-right control-label col-form-label">Bonus</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="bonus" name="bonus" placeholder="Bonus Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="deduction" class="col-sm-3 text-right control-label col-form-label">Deduction</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="deduction" name="deduction" placeholder="Deduction Here" required>
                                    </div>
                                </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                                {{--@foreach($netS as $net)--}}

                                {{--@endforeach--}}


                            </div>


                        </div>

                    </div>
                </form>


            </div>


                <div class="card-body card text-white bg-danger mb-3">
                    <h5 class="card-title m-b-0">Payroll Info</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="font-size: 12px">User ID</th>
                            <th scope="col" style="font-size: 12px">Category</th>
                            <th scope="col" style="font-size: 12px">Leave Days</th>
                            <th scope="col" style="font-size: 12px">Basic Salary</th>
                            <th scope="col" style="font-size: 12px">Allowances</th>
                            <th scope="col" style="font-size: 12px">Bonus</th>
                            <th scope="col" style="font-size: 12px">Deduction</th>
                            <th scope="col" style="font-size: 12px">Net Salary</th>
                            <th scope="col" style="font-size: 12px">PDF</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">


                        @if ($salary != null)
                        @foreach($salary as $value)
                            <tr>
                                <td>{{$value->sid}}</td>
                                <td>{{$value->category}}</td>
                                <td>{{$value->leave}}</td>
                                <td>{{$value->bSalary}}</td>
                                <td>{{$value->allowance}}</td>
                                <td>{{$value->bonus}}</td>
                                <td>{{$value->deduction}}</td>
                                <td>{{$value->net_salary}}</td>
                                <td><a href="{{action('salaryController@downloadPDF', $value->sid)}}">PDF</a></td>

                                <td style="font-size: 12px">

                                    <form action="{{action('salaryController@destroy', $value['id'])}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>


                            </tr>

                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>



    @include('layouts.adminLayouts.footer')

@endsection