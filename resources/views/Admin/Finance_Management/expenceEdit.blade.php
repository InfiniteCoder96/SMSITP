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
                    <form method="post" action="{{action('ExpenceController@update',$ID)}}">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="form-group">
                            <label for="ExpenceType">Expence Type</label>
                            <input type="text" value="{{$expence->ExpenceType}}" class="form-control" id="ExpenceType" name="ExpenceType" >
                        </div>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" value="{{$expence->Name}}" class="form-control" id="Name" name="Name" >
                        </div>

                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text"  value="{{$expence->ID}}" class="form-control" id="ID" name="ID" >
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text"  value="{{$expence->Amount}}"class="form-control" id="amount" name="Amount" >
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email"  value="{{$expence->Email}}" class="form-control" id="email" name="Email" >
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="custom-select form-control" id="status" name="Status" >
                                <option value="0" disabled selected>Select Status</option>
                                <option value="Paid" <?php if ($expence->Status=="Paid") echo 'Selected="Selected"';?>>Paid</option>
                                <option value="Due" <?php if ($expence->Status=="Due") echo 'Selected="Selected"';?>>Due</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date"  value="{{$expence->Date}}" class="form-control" id="date" name="Date" >
                        </div>

                        <div class="form-group">
                            <button class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" id="creditbtn" type="submit">Add</button>
                            <button class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover" id="creditbtn" type="reset">Reset</button>
                        </div>
                    </form>
                </div>

            </div>



        </div>
    </div>

    @include('layouts.adminLayouts.footer')

@endsection
