@extends('layouts.app')

@section('content')

    @include('layouts.AcademicLayouts.header')
    @include('layouts.AcademicLayouts.sideBar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Search</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="Page">Search Class</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">

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
                <div class="row">

                <div class="col-md-4">



                    <form class="form-horizontal" method="get" action="{{url('Aadmin/search')}}" >

                        {{csrf_field()}}

                        <div class="card bg-dark text-white">
                            <div class="card-header bg-orange">
                                <h5 class="card-title m-b-0 ">Search</h5>
                            </div>
                            <div class="card-body">
                                    <div class="form-group row">
                                        <label for="ID" class="col-sm-3 text-right control-label col-form-label">ID</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="ID" placeholder="ID Here" name="ID" required>
                                        </div>
                                    </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="Submit" class="btn btn-outline-success">Search</button>
                                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-md-8">
                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-orange">
                            <h5 class="card-title m-b-0">Classes</h5>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="font-size: 12px">Class ID</th>
                                    <th scope="col" style="font-size: 12px">Class Name</th>
                                    <th scope="col" style="font-size: 12px">No of Students</th>
                                    <th scope="col" style="font-size: 12px">Venue</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                </tr>
                                </thead>
                                <tbody class="customtable">

                         @if($Results!=null)
                                @foreach($Results as $result)
                                        <tr>

                                    <td style="font-size: 12px">{{$result['ClassID']}}</td>
                                    <td style="font-size: 12px">{{$result['ClassName']}}</td>
                                    <td style="font-size: 12px">{{$result['NoOfStudents']}}</td>
                                    <td style="font-size: 12px">{{$result['Venue']}}</td>
                                    <td style="font-size: 12px">
                                            <a href="{{action('ClassController@edit', $result['id'])}}" class="btn btn-dark">Edit</a>

                                        <form action="{{action('ClassController@destroy', $result['id'])}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-dark" type="Submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                @endforeach
                            @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->


            </div>

        </div>



    </div>
    @include('layouts.adminLayouts.footer')

@endsection

