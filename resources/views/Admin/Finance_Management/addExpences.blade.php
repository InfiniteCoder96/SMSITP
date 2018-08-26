@extends('layouts.app')

@section('content')
    @include('layouts.FinanceLayouts.header')
    @include('layouts.FinanceLayouts.sideBar')




    <div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper"><!-- Wizard Starts -->


            <div class="row">
                <div class="col-sm-6">
                    <div class="content-header">Expences</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card gradient-blackberry">
                        <div class="card-body">
                            <div class="card-block pt-2 pb-0">
                                <div class="media">
                                    <div class="media-body white text-left">
                                        <h3 class="font-large-1 mb-0">2156</h3>
                                        <span>HR Expence</span>
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

                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card gradient-ibiza-sunset">
                        <div class="card-body">
                            <div class="card-block pt-2 pb-0">
                                <div class="media">
                                    <div class="media-body white text-left">
                                        <h3 class="font-large-1 mb-0">156</h3>
                                        <span>Library Expence</span>
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

                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card gradient-green-tea">
                        <div class="card-body">
                            <div class="card-block pt-2 pb-0">
                                <div class="media">
                                    <div class="media-body white text-left">
                                        <h3 class="font-large-1 mb-0">6000</h3>
                                        <span>Transportation Expence</span>
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
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card gradient-pomegranate">
                        <div class="card-body">
                            <div class="card-block pt-2 pb-0">
                                <div class="media">
                                    <div class="media-body white text-left">
                                        <h3 class="font-large-1 mb-0">150</h3>
                                        <span>Resource Expence</span>
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
            </div>
            <!--Statistics cards Ends-->

            <!--Line with Area Chart 1 Starts-->

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="creditcombo">Department</label>
                    <select class="custom-select form-control" id="creditcombo" name="creditcombo" >
                        <option value="0">Select Department</option>
                        <option value="Cash Payment">HR Department</option>
                        <option value="Cheque Payment">Library Department</option>
                        <option value="Vehicle Exchange">Transporation Department</option>
                        <option value="Vehicle Exchange">Hostel Department</option>
                        <option value="Vehicle Exchange">Resource Department</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="creditamount">Date</label>
                    <input type="text" class="form-control" id="creditamount" name="creditamount" >
                </div>

                <div class="form-group">
                    <label for="creditamount">Expence Amount</label>
                    <input type="text" class="form-control" id="creditamount" name="creditamount" >
                </div>

                <div class="form-group">
                    <label for="creditamount">Paid Amont</label>
                    <input type="text" class="form-control" id="creditamount" name="creditamount" >
                </div>

                <div class="form-group">
                    <label for="creditnote">Remark</label>
                    <textarea name="creditnote" id="creditnote" rows="4" class="form-control" ></textarea>
                </div>

                <div class="form-group">
                    <a class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" id="creditbtn" class="creditbtn" onClick="savecredit()" >Pay</a>
                    <a class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" id="creditbtn" class="creditbtn" onClick="savecredit()" >Cancel</a>
                </div>
            </div>
        </div>



    </div>

</div>
</div>
</div>
</div>


</div>
</div>
    @include('layouts.adminLayouts.footer')

@endsection