
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

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="firstName2">Admission No#</label>
                                                <input type="text" class="form-control" id="chassisno" name="chassisno" onkeyup="ifchassisaved()" >
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
                                                                <input type="text" class="form-control" id="engineno" name="engineno" ReadOnly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="carmade">Name</label>
                                                                <input type="text" class="form-control" id="carmade" name="carmade" ReadOnly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="emailAddress3">Grade</label>
                                                                <input type="text" class="form-control" id="color" name="color" ReadOnly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastName2">Class</label>
                                                                <input type="text" class="form-control" id="carmodel" name="carmodel" ReadOnly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastName2">Section</label>
                                                                <input type="text" class="form-control" id="caryear" name="caryear" ReadOnly>
                                                            </div>
                                                        </div>
                                                    </div>

                                        </fieldset>
                                        <h6>Guidelines</h6>
                                        <fieldset>
                                            <div class="row">

                                                <div class="col-md-4">

                                                    <label for="eventName2">Guidelines to Submit the Application</label>
                                                    <br>
                                                    <button class="btn btn-sm btn-primary print-photo1">View</button>
                                                    <br>

                                                    <input type="hidden" name="column" value="assesmentnotice">
                                                    <input type="hidden" name="chasno" id="chassino1" value="">
                                                    <div class="preview1" id="preview1">

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <label for="eventName2">Payment Methods</label>
                                                    <br>
                                                    <button class="btn btn-sm btn-primary print-photo2">View</button>
                                                    <br>
                                                    <input type="hidden" name="column" value="exportcertificate">
                                                    <input type="hidden" name="chasno" id="chassino2" value="">
                                                    <div class="preview2" id="preview2"></div>

                                                </div>

                                                <div class="col-md-4">

                                                    <label for="eventName2">Payment Process</label>
                                                    <br>
                                                    <button class="btn btn-sm btn-primary print-photo3">View</button>
                                                    <br>
                                                    <input type="hidden" name="column" value="auctionsheet">
                                                    <input type="hidden" name="chasno" id="chassino3" value="">
                                                    <div class="preview3" id="preview3"></div>

                                                </div>
                                            </div>
                                        </fieldset>
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
                                                            <div role="tabpanel" class="tab-pane active" id="tabIcon1" aria-expanded="true" aria-labelledby="baseIcon-tab1">

                                                                <div class="form-group">
                                                                    <label for="creditcombo">Bank</label>
                                                                    <select class="custom-select form-control" id="creditcombo" name="creditcombo" >
                                                                        <option value="0">Select Bank</option>
                                                                        <option value="Cash Payment">NTB</option>
                                                                        <option value="Cheque Payment">BOC</option>
                                                                        <option value="Vehicle Exchange">Sampath Bank</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="creditamount">Branch</label>
                                                                    <input type="text" class="form-control" id="creditamount" name="creditamount" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="creditamount">Amount</label>
                                                                    <input type="text" class="form-control" id="creditamount" name="creditamount" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="creditamount">Deposited Date</label>
                                                                    <input type="text" class="form-control" id="creditamount" name="creditamount" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="creditnote">Remark</label>
                                                                    <textarea name="creditnote" id="creditnote" rows="4" class="form-control" ></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <a class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" id="creditbtn" class="creditbtn" onClick="savecredit()" >Add </a>
                                                                </div>

                                                            </div>

                                                            <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2" aria-expanded="false">

                                                                <div class="form-group">
                                                                    <label for="debitcombo">Option Type</label>
                                                                    <select class="custom-select form-control" id="debitcombo" name="debitcombo" >
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
                                                                    <a class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" id="debitbtn" class="debitbtn" onClick="savedebit()" >Add </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-8" >


                                                    <div class="row" matchheight="card">
                                                        <div class="col-xl-4">
                                                            <div class="card bg-warning">
                                                                <div class="card-body">
                                                                    <div class="px-3 py-3">
                                                                        <div class="media">
                                                                            <div class="media-body white text-left">
                                                                                <span>Invoice Value</span>
                                                                                <h4 id="totaltxt"></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="card bg-success">
                                                                <div class="card-body">
                                                                    <div class="px-3 py-3">
                                                                        <div class="media">
                                                                            <div class="media-body white text-left">
                                                                                <span>Total Payments</span>
                                                                                <h4 id="paytxt"></h4>
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
                                                                                <span>Balance</span>
                                                                                <h4 id="baltxt"></h4>
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
                                                            <th>Name</th>
                                                            <th>Amount</th>
                                                            <th>Bank</th>
                                                            <th>Remarks</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>

                                                        <tbody id="carlisttable">

                                                        </tbody>

                                                    </table>

                                                </div>

                                            </div>
                                        </fieldset>
                                        <h6>Approval</h6>
                                        <fieldset>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="eventLocation2">Approval</label>
                                                        <select class="custom-select form-control" id="approve" name="approve">
                                                            <option value="0">Not Approve</option>
                                                            <option value="1">Approve</option>
                                                        </select>
                                                    </div>

                                                </div>

                                        </fieldset>
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

