@extends('layouts.app')

@section('content')
    @include('layouts.FinanceLayouts.header')
    @include('layouts.FinanceLayouts.sideBar')




    <div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper"><!-- Wizard Starts -->


            <div class="row">
                <div class="col-sm-6">
                    <div class="content-header">Add New Expence</div>
                </div>
            </div>
            {{--<div class="row">--}}
                {{--<div class="col-xl-3 col-lg-6 col-md-6 col-12">--}}
                    {{--<div class="card gradient-blackberry">--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="card-block pt-2 pb-0">--}}
                                {{--<div class="media">--}}
                                    {{--<div class="media-body white text-left">--}}
                                        {{--<h3 class="font-large-1 mb-0">2156</h3>--}}
                                        {{--<span>HR Expence</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-right white text-right">--}}
                                        {{--<i class="icon-pie-chart font-large-1"></i>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-xl-3 col-lg-6 col-md-6 col-12">--}}
                    {{--<div class="card gradient-ibiza-sunset">--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="card-block pt-2 pb-0">--}}
                                {{--<div class="media">--}}
                                    {{--<div class="media-body white text-left">--}}
                                        {{--<h3 class="font-large-1 mb-0">156</h3>--}}
                                        {{--<span>Library Expence</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-right white text-right">--}}
                                        {{--<i class="icon-bulb font-large-1"></i>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-xl-3 col-lg-6 col-md-6 col-12">--}}
                    {{--<div class="card gradient-green-tea">--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="card-block pt-2 pb-0">--}}
                                {{--<div class="media">--}}
                                    {{--<div class="media-body white text-left">--}}
                                        {{--<h3 class="font-large-1 mb-0">6000</h3>--}}
                                        {{--<span>Transportation Expence</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-right white text-right">--}}
                                        {{--<i class="icon-graph font-large-1"></i>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xl-3 col-lg-6 col-md-6 col-12">--}}
                    {{--<div class="card gradient-pomegranate">--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="card-block pt-2 pb-0">--}}
                                {{--<div class="media">--}}
                                    {{--<div class="media-body white text-left">--}}
                                        {{--<h3 class="font-large-1 mb-0">150</h3>--}}
                                        {{--<span>Resource Expence</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-right white text-right">--}}
                                        {{--<i class="icon-wallet font-large-1"></i>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!--Statistics cards Ends-->

            <!--Line with Area Chart 1 Starts-->

            <div class="col-sm-6">
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
                <form method="post" action="{{url('Expence')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="ExpenceType">Expence Type</label>
                        <input type="text" value="{{old('ExpenceType')}}" class="form-control" id="ExpenceType" name="ExpenceType" >
                    </div>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" value="{{old('Name')}}" class="form-control" id="Name" name="Name" >
                        {{--<select class="custom-select form-control" id="creditcombo" name="Bank" >--}}
                            {{--<option disabled selected>Select Bank</option>--}}
                            {{--<option value="NTB">NTB</option>--}}
                            {{--<option value="BOC">BOC</option>--}}
                            {{--<option value="Sampath Bank">Sampath Bank</option>--}}
                        {{--</select>--}}
                    </div>

                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text"  value="{{old('ID')}}" class="form-control" id="ID" name="ID" >
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text"  value="{{old('Amount')}}"class="form-control" id="amount" name="Amount" >
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email"  value="{{old('Email')}}" class="form-control" id="email" name="Email" >
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="custom-select form-control" id="status" name="Status" >
                        <option value="0" disabled selected>Select Status</option>
                        <option value="Paid">Paid</option>
                        <option value="Due">Due</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date"  value="{{old('Date')}}" class="form-control" id="date" name="Date" >
                    </div>

                    <div class="form-group">
                        <button class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" id="creditbtn" type="submit">Add</button>
                        <button class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" id="creditbtn" type="reset">Reset</button>
                    </div>
                </form>
                {{--<form method="post" action="{{url('expence')}}">--}}
                    {{--{{csrf_field()}}--}}
                {{--<div class="form-group">--}}
                    {{--<label for="addexpence">Expence Type</label>--}}
                    {{--<input type="text" class="form-control" id="extype" name="ExpenceType" >--}}
                    {{--<select class="custom-select form-control" id="expenceType" name="Type" >--}}
                        {{--<option value="0">Select Department</option>--}}
                        {{--<option value="Cash Payment">HR Department</option>--}}
                        {{--<option value="Cheque Payment">Library Department</option>--}}
                        {{--<option value="Vehicle Exchange">Transporation Department</option>--}}
                        {{--<option value="Vehicle Exchange">Hostel Department</option>--}}
                        {{--<option value="Vehicle Exchange">Resource Department</option>--}}
                    {{--</select>--}}
                {{--</div>--}}


                {{--<div class="form-group">--}}
                    {{--<label for="addexpence">Name</label>--}}
                    {{--<input type="text" class="form-control" id="extype" name="Name" >--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label for="addexpence">ID</label>--}}
                    {{--<input type="text" class="form-control" id="extype" name="ID" >--}}
                {{--</div>--}}



                {{--<div class="form-group">--}}
                    {{--<label for="addexpence"> Amount</label>--}}
                    {{--<input type="text" class="form-control" id="extype" name="Amount" >--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label for="addexpence">Email</label>--}}
                    {{--<input type="email" class="form-control" id="extype" name="Email" >--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label for="addexpence">Status</label>--}}

                    {{--<select class="custom-select form-control" id="expenceType" name="Type" >--}}
                    {{--<option value="0" disabled selected>Select Status</option>--}}
                        {{--<option value="1">Paid</option>--}}
                        {{--<option value="2">Due</option>--}}
                    {{--</select>--}}

                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="addexpence">Date</label>--}}
                    {{--<input type="date" class="form-control" id="extype" name="Date" >--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<a class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" id="creditbtn" type="submit" >Save</a>--}}
                    {{--<a class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" id="creditbtn" onClick="savecredit()" type="reset">Reset</a>--}}
                {{--</div>--}}
                {{--</form>--}}
            </div>

        </div>



    </div>
    </div>

    @include('layouts.adminLayouts.footer')

@endsection