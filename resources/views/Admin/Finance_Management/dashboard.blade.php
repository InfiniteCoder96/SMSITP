@extends('layouts.app')

@section('content')
    @include('layouts.FinanceLayouts.header')
    @include('layouts.FinanceLayouts.sideBar')
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">

                <!--Statistics cards Starts-->

                <div class="page-breadcrumb">


                </div>

                <div class="row">

                    <div class="col-md-3 col-lg-12 col-xlg-6">
                        <div class="card card-hover">
                            <div class="box bg-dark text-center">

                                <h1 class="text-white">Finance Management </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-12 card-hover">
                        <div class="card gradient-blackberry">
                            <div class="card-body">
                                <div class="card-block pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">2156</h3>
                                            <span>Profit</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-pie-chart font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12 card-hover">
                        <div class="card gradient-ibiza-sunset">
                            <div class="card-body">
                                <div class="card-block pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">{{$total}}</h3>
                                            <span>Expences</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-bulb font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-12 card-hover">
                        <div class="card gradient-green-tea">
                            <div class="card-body">
                                <div class="card-block pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">6000</h3>
                                            <span>Approved Payment</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-graph font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12 card-hover">
                        <div class="card gradient-pomegranate">
                            <div class="card-body">
                                <div class="card-block pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">150</h3>
                                            <span>Disapproved Payment</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-wallet font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-12 col-xlg-6 card-hover">
                        <div class="card gradient-pomegranate">
                            <div class="card-body">
                                <div class="card-block pt-0 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0"></h3>
                                            <span>  Download Report </span>
                                        </div>
                                        {{--<div class="media-right white text-right">--}}
                                            {{--<i class="icon-wallet font-large-1"></i>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Statistics cards Ends-->

                <!--Line with Area Chart 1 Starts-->

                <!--Line with Area Chart 1 Ends-->

                {{--<div class="row match-height">--}}
                    {{--<div class="col-xl-4 col-lg-12 col-12">--}}
                        {{--<div class="card">--}}
                            {{--<div class="card-header">--}}
                                {{--<h4 class="card-title">Statistics</h4>--}}
                            {{--</div>--}}
                            {{--<div class="card-body">--}}

                                {{--<p class="font-medium-2 text-muted text-center pb-2">Last 6 Months profit</p>--}}
                                {{--<div id="Stack-bar-chart" class="height-300 Stackbarchart mb-2">--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xl-8 col-lg-12 col-12">--}}
                        {{--<div class="card">--}}
                            {{--<div class="card-header">--}}
                                {{--<h4 class="card-title">Expences Chart</h4>--}}
                            {{--</div>--}}
                            {{--<div class="card-body">--}}
                                {{--<table class="table table-responsive-sm text-center">--}}
                                    {{--<thead>--}}
                                    {{--<tr>--}}
                                        {{--<th>Department</th>--}}
                                        {{--<th>Amount</th>--}}
                                        {{--<th>Date</th>--}}
                                        {{--<th>Status</th>--}}
                                        {{--<th>Profit</th>--}}
                                        {{--<th>Delete</th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                    {{--<tr>--}}
                                        {{--<td><img class="media-object round-media height-50" src="../app-assets/img/elements/01.png" alt="Generic placeholder image" /></td>--}}
                                        {{--<td></td>--}}
                                        {{--<td>1</td>--}}
                                        {{--<td>--}}
                                            {{--<a class="btn white btn-round btn-primary">Active</a>--}}
                                        {{--</td>--}}
                                        {{--<td>$19.94</td>--}}
                                        {{--<td>--}}
                                            {{--<a class="danger" data-original-title="" title="">--}}
                                                {{--<i class="ft-x"></i>--}}
                                            {{--</a>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td><img class="media-object round-media height-50" src="../app-assets/img/elements/07.png" alt="Generic placeholder image" /></td>--}}
                                        {{--<td>Headphones</td>--}}
                                        {{--<td>2</td>--}}
                                        {{--<td>--}}
                                            {{--<a class="btn white btn-round btn-danger">Disabled</a>--}}
                                        {{--</td>--}}
                                        {{--<td>$99.00</td>--}}
                                        {{--<td>--}}
                                            {{--<a class="danger" data-original-title="" title="">--}}
                                                {{--<i class="ft-x"></i>--}}
                                            {{--</a>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td><img class="media-object round-media height-50" src="../app-assets/img/elements/11.png" alt="Generic placeholder image" /></td>--}}
                                        {{--<td>Camera</td>--}}
                                        {{--<td>1</td>--}}
                                        {{--<td>--}}
                                            {{--<a class="btn white btn-round btn-info">Paused</a>--}}
                                        {{--</td>--}}
                                        {{--<td>$299.00</td>--}}
                                        {{--<td>--}}
                                            {{--<a class="danger" data-original-title="" title="">--}}
                                                {{--<i class="ft-x"></i>--}}
                                            {{--</a>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td><img class="media-object round-media height-50" src="../app-assets/img/elements/14.png" alt="Generic placeholder image" /></td>--}}
                                        {{--<td>Beer</td>--}}
                                        {{--<td>2</td>--}}
                                        {{--<td>--}}
                                            {{--<a class="btn white btn-round btn-success">Active</a>--}}
                                        {{--</td>--}}
                                        {{--<td>$24.51</td>--}}
                                        {{--<td>--}}
                                            {{--<a class="danger" data-original-title="" title="">--}}
                                                {{--<i class="ft-x"></i>--}}
                                            {{--</a>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--</tbody>--}}
                                {{--</table>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="row match-height">--}}
                    {{--<div class="col-xl-8 col-lg-12 col-12">--}}
                        {{--<div class="card">--}}
                            {{--<div class="card-header">--}}
                                {{--<h4 class="card-title mb-0">Visit & Sales Statistics</h4>--}}
                            {{--</div>--}}
                            {{--<div class="card-body">--}}
                                {{--<div class="card-block">--}}
                                    {{--<div class="chart-info mb-2">--}}
                                        {{--<span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>--}}
                                        {{--<span class="text-uppercase"><i class="fa fa-circle deep-purple font-small-2 mr-1"></i> Visits</span>--}}
                                    {{--</div>--}}
                                    {{--<div id="line-area2" class="height-400 lineAreaDashboard">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xl-4 col-lg-12 col-12">--}}
                        {{--<div class="card gradient-blackberry">--}}
                            {{--<div class="card-body">--}}
                                {{--<div class="card-block">--}}
                                    {{--<h4 class="card-title white">Statistics</h4>--}}
                                    {{--<div class="p-2 text-center">--}}
                                        {{--<a class="white font-medium-1">Month</a>--}}
                                        {{--<a class="btn btn-raised btn-round bg-white mx-3 px-3">Week</a>--}}
                                        {{--<a class="white font-medium-1">Day</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="my-3 text-center white">--}}
                                        {{--<a class="font-large-2 d-block mb-1">$ 78.89 <span class="ft-arrow-up font-large-2"></span></a>--}}
                                        {{--<span class="font-medium-1">Week2   +15.44</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div id="lineChart" class="height-250 lineChart lineChartShadow">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="row match-height">--}}
                    {{--<div class="col-xl-4 col-lg-12">--}}
                        {{--<div class="card">--}}
                            {{--<div class="card-header">--}}
                                {{--<h4 class="card-title">Statistics</h4>--}}
                            {{--</div>--}}
                            {{--<div class="card-body">--}}

                                {{--<p class="font-medium-2 text-muted text-center">Hobbies</p>--}}
                                {{--<div id="bar-chart" class="height-250 BarChartShadow BarChart">--}}
                                {{--</div>--}}

                                {{--<div class="card-block">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col text-center">--}}
                                            {{--<span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>--}}
                                            {{--<span class="font-large-1 d-block mb-2">48</span>--}}
                                            {{--<span>Sport</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="col text-center">--}}
                                            {{--<span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>--}}
                                            {{--<span class="font-large-1 d-block mb-2">9</span>--}}
                                            {{--<span>Music</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="col text-center">--}}
                                            {{--<span class="gradient-blackberry d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>--}}
                                            {{--<span class="font-large-1 d-block mb-2">26</span>--}}
                                            {{--<span>Travel</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="col text-center">--}}
                                            {{--<span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>--}}
                                            {{--<span class="font-large-1 d-block mb-2">17</span>--}}
                                            {{--<span>News</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>


    @include('layouts.adminLayouts.footer')
@endsection
