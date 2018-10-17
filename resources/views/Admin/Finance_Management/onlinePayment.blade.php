@extends('layouts.app')

@section('content')
    @include('layouts.FinanceLayouts.header')
    @include('layouts.FinanceLayouts.sideBar')




<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper"><!-- Wizard Starts -->


            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header">Online Payment</div>
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
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="admissionNO">Admission No#</label>
                                                <input type="text" class="form-control" id="admissionNo" name="AdmissionNo" onkeyup="loadadm()" >
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <br>
                                        </div>

                                        <div class="col-md-4">
                                            <br>
                                            <div id='approvebtn'></div>
                                        </div>



                                    </div>

                                    <div id="wizadform" class="icons-tab-steps wizard-circle" #f="ngForm" >
                                        <!-- Step 1 -->
                                        <h6>Basic Information</h6>
                                        <fieldset>

                                            <div class="row">

                                                <div class="col-md-8">

                                                    <div class="row">

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label >Admission No#</label>
                                                                <input type="text" class="form-control" id="admissionNo1" name="AdmissionNo" ReadOnly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="admname" name="Name" ReadOnly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="Grade">Gender</label>
                                                                <input type="text" class="form-control" id="admgender" name="Grade" ReadOnly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="DOB">DOB</label>
                                                                <input type="text" class="form-control" id="admDOB" name="carmodel" ReadOnly>
                                                            </div>
                                                        </div>
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<label for="lastName2">Section</label>--}}
                                                                {{--<input type="text" class="form-control" id="admsection" name="caryear" ReadOnly>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    </div>

                                        </fieldset>
                                        {{--<h6>Guidelines</h6>--}}
                                        {{--<fieldset>--}}
                                            {{--<div class="row">--}}

                                                {{--<div class="col-md-4">--}}

                                                    {{--<label for="eventName2">Guidelines to Submit the Application</label>--}}
                                                    {{--<br>--}}
                                                    {{--<button class="btn btn-sm btn-primary print-photo1">View</button>--}}
                                                    {{--<br>--}}

                                                    {{--<input type="hidden" name="column" value="assesmentnotice">--}}
                                                    {{--<input type="hidden" name="chasno" id="chassino1" value="">--}}
                                                    {{--<div class="preview1" id="preview1">--}}

                                                    {{--</div>--}}

                                                {{--</div>--}}

                                                {{--<div class="col-md-4">--}}

                                                    {{--<label for="paymentmethods">Payment Methods</label>--}}
                                                    {{--<br>--}}
                                                    {{--<button class="btn btn-sm btn-primary print-photo2">View</button>--}}
                                                    {{--<br>--}}
                                                    {{--<input type="hidden" name="column" value="exportcertificate">--}}
                                                    {{--<input type="hidden" name="" id="" value="">--}}
                                                    {{--<div class="preview2" id="preview2"></div>--}}

                                                {{--</div>--}}

                                                {{--<div class="col-md-4">--}}

                                                    {{--<label for="eventName2">Payment Process</label>--}}
                                                    {{--<br>--}}
                                                    {{--<button class="btn btn-sm btn-primary print-photo3">View</button>--}}
                                                    {{--<br>--}}
                                                    {{--<input type="hidden" name="column" value="auctionsheet">--}}
                                                    {{--<input type="hidden" name="chasno" id="chassino3" value="">--}}
                                                    {{--<div class="preview3" id="preview3"></div>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</fieldset>--}}
                                        <h6>Payments</h6>
                                        <fieldset >
                                            <div class="row"  >
                                                <div class="col-md-4">

                                                    <div class="card-block" id="cddiv1">
                                                        <ul class="nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="baseIcon-tab1" data-toggle="tab" aria-controls="tabIcon1" href="#tabIcon1" aria-expanded="true"><i class="fa fa-play"></i> Normal </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="baseIcon-tab2" data-toggle="tab" aria-controls="tabIcon2" href="#tabIcon2" aria-expanded="false"><i class="fa fa-flag"></i>Loan</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content px-1 pt-1">
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
                                                            <div role="tabpanel" class="tab-pane active" id="tabIcon1" aria-expanded="true" aria-labelledby="baseIcon-tab1">
                                                                <form method="post" action="{{url('payment')}}">
                                                                    {{csrf_field()}}
                                                                    <div class="form-group">
                                                                        <label for="creditcombo">Admission No</label>
                                                                        <input type="text" value="{{old('AdmissionNo')}}" class="form-control" id="Branch" name="AdmissionNo" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="creditcombo">Bank</label>
                                                                        <select class="custom-select form-control" id="creditcombo" name="Bank" >
                                                                            <option disabled selected>Select Bank</option>
                                                                            <option value="NTB">NTB</option>
                                                                            <option value="BOC">BOC</option>
                                                                            <option value="Sampath Bank">Sampath Bank</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="branch">Branch</label>
                                                                        <input type="text"  value="{{old('Branch')}}" class="form-control" id="Branch" name="Branch" >
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="amount">Amount</label>
                                                                        <input type="text"  value="{{old('Amount')}}"class="form-control" id="amount" name="Amount" >
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="deposit">Deposited Date</label>
                                                                        <input type="date"  value="{{old('DepositedDate')}}" class="form-control" id="datefield"  name="DepositedDate" >
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="remark">Remark</label>
                                                                        <input type="text"  value="{{old('Remark')}}"class="form-control" id="remark" name="Remark" >
                                                                    </div>

                                                                    <div class="form-group">
                                                                       <button class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" id="creditbtn" type="submit">Add</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                            <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2" aria-expanded="false">

                                                                <div class="form-group">
                                                                    <label for="optn">Option Type</label>
                                                                    <select class="custom-select form-control" id="optn" name="optn" >
                                                                        <option value="0">Select Option</option>
                                                                        <option value="Valivation">Valivation</option>
                                                                        <option value="Registration">Registration</option>
                                                                        <option value="Accesories">Accesories</option>
                                                                    </select>
                                                                </div>

                                                                    <div class="form-group">
                                                                    <label for="debitamount">Amount</label>
                                                                    <input type="text" class="form-control" id="debitamount" name="debitamount" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="debitnote">Note</label>
                                                                    <textarea name="debitnote" id="debitnote" rows="4" class="form-control" ></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <a class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" type="submit" >Add </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-8" >


                                                    <div class="row" matchheight="card">
                                                        {{--<div class="col-xl-4">--}}
                                                            {{--<div class="card bg-warning">--}}
                                                                {{--<div class="card-body">--}}
                                                                    {{--<div class="px-3 py-3">--}}
                                                                        {{--<div class="media">--}}
                                                                            {{--<div class="media-body white text-left">--}}
                                                                                {{--<span>Invoice Value</span>--}}
                                                                                {{--<h4 id="totaltxt"></h4>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        <div class="col-xl-4">
                                                            <div class="card bg-success">
                                                                <div class="card-body">
                                                                    <div class="px-3 py-3">
                                                                        <div class="media">
                                                                            <div class="media-body white text-left">
                                                                                <h3 class="font-large-1 mb-0">{{$Totpay}}</h3>
                                                                                <span>Total Payments</span>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4">
                                                            <div class="card bg-danger">
                                                                <div class="card-body">
                                                                    <div class="px-3 py-3">
                                                                        <div class="media">
                                                                            <div class="media-body white text-left">
                                                                                <h3 class="font-large-1 mb-0">{{$noid}}</h3>
                                                                                <span>No Of Payments</span>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <table class="table table-striped table-bordered zero-configuration" id="cddiv2" >

                                                        <thead>
                                                        <tr>
                                                            <th>Admission No</th>
                                                            <th>Amount</th>
                                                            <th>Bank</th>
                                                            <th>Deposited Date</th>
                                                            <th>Remarks</th>

                                                        </tr>
                                                        </thead>

                                                        <tbody id="paymentlisttable">
                                                        @foreach($payments as $payment)
                                                            <tr>
                                                                <td>{{$payment['AdmissionNo']}}</td>
                                                                <td>{{$payment['Amount']}}</td>
                                                                <td>{{$payment['Bank']}}</td>
                                                                <td>{{$payment['DepositedDate']}}</td>
                                                                <td>{{$payment['Remark']}}</td>

                                                            </tr>
                                                        @endforeach
                                                        </tbody>

                                                    </table>

                                                </div>

                                            </div>
                                        </fieldset>
                                        {{--<h6>Approval</h6>--}}
                                        {{--<fieldset>--}}
                                            {{--<div class="row">--}}

                                                {{--<div class="col-md-6">--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label for="eventLocation2">Approval</label>--}}
                                                        {{--<select class="custom-select form-control" id="approve" name="approve">--}}
                                                            {{--<option value="0">Not Approve</option>--}}
                                                            {{--<option value="1">Approve</option>--}}
                                                        {{--</select>--}}
                                                    {{--</div>--}}

                                                {{--</div>--}}

                                        {{--</fieldset>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Wizard Ends -->

        </div>
    </div>

    @include('layouts.adminLayouts.footer')

<script>

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("datefield").setAttribute("max", today);


    function loadadm(){

        var adm = document.getElementById("admissionNo").value;

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                //document.getElementById("a").innerHTML = this.responseText ;
                var a = this.responseText ;
                var array = a.split('^');
                document.getElementById("admissionNo1").value = array[0];
                document.getElementById("admname").value = array[1];
                document.getElementById("admgender").value = array[2];
                document.getElementById("admDOB").value = array[3];



            }
        };
        //xmlhttp.open("GET","DB/getdata.php?c="+col+"&t="+tbl+"&s="+str,true);
        xmlhttp.open("GET","app-assets/php/getdetail.php?c="+adm ,true);
        xmlhttp.send();
    }






</script>
@endsection