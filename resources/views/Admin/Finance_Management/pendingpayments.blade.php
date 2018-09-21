
@extends('layouts.app')

@section('content')
      @include('layouts.FinanceLayouts.header')
      @include('layouts.FinanceLayouts.sideBar')




<div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper"><!-- Wizard Starts -->


<div class="row">
    <div class="col-sm-12">
        <div class="content-header">Pending Payment List</div>
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
                                      <th>Status</th>
                                  </tr>
                              </thead>

                              <tbody id="paymentlisttable">
                              @foreach($pendingApprovals as $pendingApproval)
                                  <tr>
                                      <td>{{$pendingApproval['id']}}</td>
                                      <td>{{$pendingApproval['AdmissionNo']}}</td>
                                      <td>{{$pendingApproval['Amount']}}</td>
                                      <td>{{$pendingApproval['Bank']}}</td>
                                      <td>{{$pendingApproval['DepositedDate']}}</td>
                                      <td>{{$pendingApproval['Remark']}}</td>
                                      <td>

                                          <form action="{{url('approve')}}" method="get">
                                              {{csrf_field()}}
                                              <input name="id" type="hidden" value="{{$pendingApproval['id']}}">
                                              <button class="btn btn-success btn-xs" type="submit">Approve</button>
                                          </form>

                                          <form action="{{url('disapprove')}}"method="get">
                                              {{csrf_field()}}
                                              <input name="id" type="hidden" value="{{$pendingApproval['id']}}">
                                              <input name="_method" type="hidden" value="DELETE">
                                              <button class="btn btn-warning btn-xs" type="submit">Disapprove</button>
                                          </form>

                                      </td>
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