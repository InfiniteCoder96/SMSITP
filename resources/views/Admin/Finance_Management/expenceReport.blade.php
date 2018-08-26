@extends('layouts.app')

@section('content')
    @include('layouts.FinanceLayouts.header')
    @include('layouts.FinanceLayouts.sideBar')


    div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper"><!-- Wizard Starts -->


            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header">Expence Report</div>
                </div>
            </div>
            <section id="icon-tabs">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="card-block">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table class="table table-striped table-bordered zero-configuration" id="cddiv2" >
                                                <thead>
                                                <tr>
                                                    <th>Department</th>
                                                    <th>Paid Date</th>
                                                    <th>Expense</th>
                                                    <th>Paid Amount</th>
                                                    <th>Remark</th>
                                                    <th>Status</th>

                                                </tr>
                                                </thead>

                                                <tbody id="carlisttable">
                                                <td>HR Department</td>
                                                <td>2018.06.12</td>
                                                <td>Rs 150000.00</td>
                                                <td>Rs 150000.00</td>
                                                <td>HR</td>
                                                <td><a class="btn white btn-round btn-danger">Paid</a></td>
                                                </tbody>

                                                <tbody id="carlisttable">
                                                <td>Library Department</td>
                                                <td>2018.06.12</td>
                                                <td>Rs 150000.00</td>
                                                <td>Rs 150000.00</td>
                                                <td>HR</td>
                                                <td><a class="btn white btn-round btn-success">UnPaid</a></td>
                                                </tbody>

                                            </table>

                                        </div>
                                    </div>


                                </div>
                            </div>

    @include('layouts.adminLayouts.footer')

@endsection