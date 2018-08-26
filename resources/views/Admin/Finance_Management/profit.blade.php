@extends('layouts.app')

@section('content')
    @include('layouts.FinanceLayouts.header')
    @include('layouts.FinanceLayouts.sideBar')

    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Profit Report</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="table-responsive m-t-40" style="clear: both;">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Description</th>
                                <th class="text-right">Payment</th>
                                <th class="text-right">Expenses</th>
                                <th class="text-right">Profit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Library</td>
                                <td class="text-right">2 </td>
                                <td class="text-right"> $24 </td>
                                <td class="text-right"> $48 </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Hr</td>
                                <td class="text-right"> 3 </td>
                                <td class="text-right"> $500 </td>
                                <td class="text-right"> $1500 </td>
                            </tr>
                            <!-- <tr>
                                <td class="text-center">3</td>
                                <td>RC Cars</td>
                                <td class="text-right"> 20 </td>
                                <td class="text-right"> %600 </td>
                                <td class="text-right"> $12000 </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Down Coat</td>
                                <td class="text-right"> 60 </td>
                                <td class="text-right">$5 </td>
                                <td class="text-right"> $300 </td> -->
                            </tr>
                            </tbody>
                        </table>
                        <div class="pull-right m-t-30 text-right">
                            <p>Sub - Total amount: $13,848</p>
                            <p>vat (10%) : $138 </p>
                            <hr>
                            <h3><b>Total :</b> $13,986</h3>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    @include('layouts.adminLayouts.footer')

@endsection