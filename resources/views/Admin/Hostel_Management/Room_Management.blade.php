@extends('layouts.app')

@section('content')

    @include('layouts.TransportHostelLayouts.header-TA')
    @include('layouts.TransportHostelLayouts.sideBar-TA')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Room Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Room Management</li>
                                <li class="breadcrumb-item active" aria-current="page">Hostel Details</li>
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

                <div class="col-md-12">
                    <form class="form-horizontal" action="{{url('hostelRooms')}}" method="post">
                    {{csrf_field()}}


     <div class="card bg-dark text-white">
         <div class="card-header bg-danger text-white">
             <h5 class="card-title m-b-0">Hostel Details</h5>
         </div>



         <div class="card-body">
                 <div class="form-group row">
                     <label for="hostel_name" class="col-sm-3 text-right control-label col-form-label">Hostel Name</label>
                     <div class="col-sm-9">
                         <select class="select2 form-control Warden Name-select" id="hostel_name" name="hostel_name" style="width: 100%; height:36px;" required>
                             <option selected disabled>Hostel Name</option>
                             <option value="School JSS Hostel">School JSS Hostel</option>
                             <option value="School CDC Hostel">School CDC Hostel</option>
                             <option value="School STH Hostel">School STH Hostel</option>
                             <option value="School NEW Hostel">School NEW Hostel</option>
                         </select>
                     </div>
             </div>

             <div class="form-group row">
                 <label for="room_no" class="col-sm-3 text-right control-label col-form-label">Room No</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="room_no" name="room_no" placeholder="Room No Here" required>
                 </div>
             </div>

             <div class="form-group row">
                 <label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" name="description" id="description" placeholder="Description Here" required>
                 </div>
             </div>

             <div class="form-group row">
                 <label for="capacity" class="col-sm-3 text-right control-label col-form-label">Capacity</label>
                 <div class="col-sm-9">

                     <input type="text" class="form-control" name="capacity" id="capacity" placeholder="Capacity Here" required>
                 </div>
             </div>

     </div>


             {{--<div class="form-group row">--}}
                 {{--<label for="Facilities" class="col-sm-3 text-right control-label col-form-label">Facilities</label>--}}
             {{--</div>--}}

             {{--<div class="form-group row">--}}
                 {{--<label for="AC" class="col-sm-3 text-right control-label col-form-label">AC</label>--}}
                 {{--<input type="checkbox"  id="AC" name="AC" required>--}}
             {{--</div>--}}

             {{--<div class="form-group row">--}}
                 {{--<label for="AttachedBathroom" class="col-sm-3 text-right control-label col-form-label">Attached Bathroom</label>--}}
                 {{--<input type="checkbox"  id="AttachedBathroom" name="AttachedBathroom"  required>--}}
             {{--</div>--}}

             {{--<div class="form-group row">--}}
                 {{--<label for="CleaningServices" class="col-sm-3 text-right control-label col-form-label">Cleaning Services</label>--}}
                 {{--<input type="checkbox"  id="CleaningServices" name="CleaningServices" required>--}}
             {{--</div>--}}

             {{--<div class="form-group row">--}}
                 {{--<label for="Internet" class="col-sm-3 text-right control-label col-form-label">Internet</label>--}}
                 {{--<input type="checkbox"  id="Internet" name="Internet" required>--}}
             {{--</div>--}}

             {{--<div class="form-group row">--}}
                 {{--<label for="Cooking" class="col-sm-3 text-right control-label col-form-label">Cooking</label>--}}
                 {{--<input type="checkbox"  id="Cooking" name="Cooking"  required>--}}
             {{--</div>--}}

             {{--<div class="form-group row">--}}
                 {{--<label for="Library" class="col-sm-3 text-right control-label col-form-label">Library</label>--}}
                 {{--<input type="checkbox"  id="Library" name="Library"  required>--}}
             {{--</div>--}}

         </div>

         <div class="border-top">
                     <div class="card-body">
                         <button type="submit" class="btn btn-outline-success">Save</button>
                         <button type="reset" class="btn btn-outline-warning">Clear</button>
                         <button type="reset" class="btn btn-outline-warning">Delete</button>
                         <button type="reset" class="btn btn-outline-warning">Update</button>
                     </div>
         </div>
                </form>
             </div>


                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th>
                                        <label class="customcheckbox m-b-20">
                                            <input type="checkbox" id="mainCheckbox">

                                            <span class="checkmark"></span>
                                        </label>
                                    </th>
                                    <th scope="col" style="font-size: 12px">Hostel Name</th>
                                    <th scope="col" style="font-size: 12px">Room No</th>
                                    <th scope="col" style="font-size: 12px">description</th>
                                    <th scope="col" style="font-size: 12px">capacity</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                </tr>
                                </thead>
                                <tbody class="customtable">




                                @foreach($hostelRooms as $hostelRoom)
                                <tr>
                                    <th>
                                        <label class="customcheckbox">
                                            <input type="checkbox" class="listCheckbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>


                                    <td style="font-size: 12px">{{$hostelRoom['hostel_name']}}</td>
                                    <td style="font-size: 12px">{{$hostelRoom['room_no']}}</td>
                                    <td style="font-size: 12px">{{$hostelRoom['description']}}</td>
                                    <td style="font-size: 12px">{{$hostelRoom['capacity']}}</td>
                                    <td><a href="{{action('HostelRoomController@edit', $hostelRoom['id'])}}" class="btn btn-warning">Edit</a>

                                        <form action="{{action('HostelRoomController@destroy', $hostelRoom['id'])}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger" type="submit">Delete</button>
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
</div>

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

</div>





@include('layouts.AcademicLayouts.footer')

@endsection