@extends('layouts.app')

@section('content')
    @include('layouts.FinanceLayouts.header')
    @include('layouts.FinanceLayouts.sideBar')




    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper"><!-- Wizard Starts -->

                <a href=" {{url('/approved/Report')}}"><button class="btn btn-warning btn-xs" style="float:right" type="submit">PDF</button></a>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content-header"> Approved Payment List</div>
                    </div>
                </div>
                <section id="icon-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- div class="card-header">
                                  <h4 class="card-title">Basic Information</h4>
                                </div -->
                                <div class="card-body">
                                    <div class="card-block">

                                        <div class="row">
                                            <div class="col-md-12">

                                                <table class="table table-striped table-bordered zero-configuration" id="cddiv2" >
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Admission No</th>
                                                        <th>Amount</th>
                                                        <th>Bank</th>
                                                        <th>Deposited Date</th>
                                                        <th>Remarks</th>

                                                    </tr>
                                                    </thead>

                                                    <tbody id="carlisttable">
                                                    @foreach($approvedPayments as $approvedPayment)
                                                        <tr>
                                                            <td>{{$approvedPayment['id']}}</td>
                                                            <td>{{$approvedPayment['AdmissionNo']}}</td>
                                                            <td>{{$approvedPayment['Amount']}}</td>
                                                            <td>{{$approvedPayment['Bank']}}</td>
                                                            <td>{{$approvedPayment['DepositedDate']}}</td>
                                                            <td>{{$approvedPayment['Remark']}}</td>
                                                            {{--<td>--}}

                                                                {{--<form action="{{action('pendingApprovalController@edit', $pendingApproval['id'])}}" method="post">--}}
                                                                    {{--{{csrf_field()}}--}}
                                                                    {{--<input name="_method" type="hidden" value="EDIT">--}}
                                                                    {{--<button class="btn btn-success btn-xs" type="submit">Approve</button>--}}
                                                                {{--</form>--}}

                                                                {{--<form action="{{action('pendingApprovalController@destroy', $pendingApproval['id'])}}"method="post">--}}
                                                                    {{--{{csrf_field()}}--}}
                                                                    {{--<input name="_method" type="hidden" value="DELETE">--}}
                                                                    {{--<button class="btn btn-warning btn-xs" type="submit">Disapprove</button>--}}
                                                                {{--</form>--}}

                                                            {{--</td>--}}
                                                        </tr>
                                                    @endforeach
                                                    </tbody>

                                                </table>

                                            </div>
                                        </div>


                                    </div>
                                </div>


                                @include('layouts.adminLayouts.footer')


                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection