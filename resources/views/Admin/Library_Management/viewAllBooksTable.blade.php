@extends('layouts.app')

@section('content')

    @include('layouts.LibraryLayouts.header')
    @include('layouts.LibraryLayouts.sideBar')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <?php $books = null ?>
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">View All Books</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View All Books</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->



        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">


                <div class="col-md-12">
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
                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-cyan text-white">

                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="font-size: 12px">Book ID</th>
                                    <th scope="col" style="font-size: 12px">ISBN</th>
                                    <th scope="col" style="font-size: 12px">Book Name</th>
                                    <th scope="col" style="font-size: 12px">Author</th>
                                    <th scope="col" style="font-size: 12px">Barcode</th>
                                    <th scope="col" style="font-size: 12px">Action</th>
                                </tr>
                                </thead>
                                <tbody class="customtable">
                                @foreach($boooks as $book)
                                    <tr>
                                        <td>{{$book['id']}}</td>
                                        <td>{{$book['isbn']}}</td>
                                        <td>{{$book['bookname']}}</td>
                                        <td>{{$book['authorname']}}</td>
                                        <td>{{$book['barcode']}}</td>

                                        <td style="font-size: 12px">
                                            <a  ><button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editBookModal"

                                                         data-id="{{$book['id']}}"
                                                         data-isbn="{{$book['isbn']}}"
                                                         data-bookname="{{$book['bookname']}}"
                                                         data-authorname="{{$book['authorname']}}"
                                                         data-barcode="{{$book['barcode']}}"

                                                         type="button">Edit</button></a>


                                        <button type="button" class="btn btn-danger btn-xs">Delete</button>
                                    </td>
                                </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

        </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->


    @include('layouts.adminLayouts.footer')

    {{--@if($books == null)--}}
        @include('layouts.LibraryLayouts.editBookModal')
    {{--@endif--}}



@endsection
