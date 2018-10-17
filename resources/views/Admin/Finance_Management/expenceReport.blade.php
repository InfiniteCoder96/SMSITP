@extends('layouts.app')

@section('content')
    @include('layouts.FinanceLayouts.header')
    @include('layouts.FinanceLayouts.sideBar')


    <div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper"><!-- Wizard Starts -->

        <a href=" {{url('/Expence/Report')}}"><button class="btn btn-warning btn-xs" style="float:right" type="submit">PDF</button></a>
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header">Expence Report</div>
                </div>
            </div>
            <section id="icon-tabs">
                <div class="row">
                    <div class="col-12">
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
                        <div class="card">

                            <form action="{{url('/Expence/search')}}" method="get" role="search">
                                {{csrf_field()}}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="Name" id="Name" placeholder="search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">

                                        </button>
                                    </span>
                                </div>
                            </form>

                            @if($Results!=null)
                            <div class="card-body">
                                <div class="card-block">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table class="table table-striped table-bordered zero-configuration" id="cddiv2" >
                                                <thead>
                                                <tr>
                                                    <th>Expence Type</th>
                                                    <th>Name</th>
                                                    <th>ID</th>
                                                    <th>Amount</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>

                                                <tbody id="expencetable">
                                                @foreach($Results as $result)
                                                    <tr>
                                                        <td>{{$result['ExpenceType']}}</td>
                                                        <td>{{$result['Name']}}</td>
                                                        <td>{{$result['ID']}}</td>
                                                        <td>{{$result['Amount']}}</td>
                                                        <td>{{$result['Email']}}</td>

                                                        @if($result['Status'] == 'Paid' )
                                                            <td style="color: #0A9E67">{{$result['Status']}}</td>
                                                        @else
                                                            <td style="color: red">{{$result['Status']}}</td>
                                                        @endif
                                                        <td>{{$result['Date']}}</td>

                                                        <td><a href="{{action('ExpenceController@edit', $result['ID'])}}" class="btn btn-warning">Edit</a>
                                                            <form action="{{action('ExpenceController@destroy', $result['ID'])}}" method="post">
                                                                {{csrf_field()}}
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                            </form>
                                                        </td>
                                                </tbody>

                                                @endforeach

                                            </table>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            @endif
                            @if($Expences!=null)
                            <div class="card-body">
                                <div class="card-block">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table class="table table-striped table-bordered zero-configuration" id="cddiv2" >
                                                <thead>
                                                <tr>
                                                    <th>Expence Type</th>
                                                    <th>Name</th>
                                                    <th>ID</th>
                                                    <th>Amount</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>

                                                <tbody id="expencetable">
                                                @foreach($Expences as $expence)
                                                    <tr>
                                                        <td>{{$expence['ExpenceType']}}</td>
                                                        <td>{{$expence['Name']}}</td>
                                                        <td>{{$expence['ID']}}</td>
                                                        <td>{{$expence['Amount']}}</td>
                                                        <td>{{$expence['Email']}}</td>

                                                        @if($expence['Status'] == 'Paid' )
                                                            <td style="color: #0A9E67">{{$expence['Status']}}</td>
                                                        @else
                                                            <td style="color: red">{{$expence['Status']}}</td>
                                                        @endif
                                                        <td>{{$expence['Date']}}</td>

                                                        <td><a href="{{action('ExpenceController@edit', $expence['ID'])}}" class="btn btn-warning">Edit</a>
                                                            <form action="{{action('ExpenceController@destroy', $expence['ID'])}}" method="post">
                                                    {{csrf_field()}}
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                            </form>
                                                        </td>
                                                </tbody>

                                                @endforeach

                                            </table>

                                        </div>
                                    </div>


                                </div>
                            </div>
                                @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
    @include('layouts.adminLayouts.footer')

@endsection
