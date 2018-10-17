@extends('layouts.app')

@section('content')
    @include('layouts.AcademicLayouts.header')
    @include('layouts.AcademicLayouts.sideBar')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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

            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-orange text-center">
                            <a href="{{url('Aadmin/ClassS')}}">
                            <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Classes</h6></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <a href="{{url('Aadmin/SubjectS')}}">
                            <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                                <h6 class="text-white">Subjects</h6></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <a href="{{url('Aadmin/SectionS')}}">
                            <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <h6 class="text-white">Sections</h6></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <a href="{{url('Aadmin/ClassTeacherS')}}">
                            <h1 class="font-light text-white"><i class="mdi mdi-relative-scale "></i></h1>
                            <h6 class="text-white">Class Teachers</h6></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3" >
                    <div class="card card-hover" >
                        <div class="box bg-purple text-center">
                            <a href="{{url('Aadmin/SubjectTeacherS')}}">
                            <h1 class="font-light text-white" ><i class="mdi mdi-border-outside" ></i></h1>
                                <h6 class="text-white">Subject Teachers</h6></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <a href="{{url('Aadmin/SectionalHeadS')}}">
                            <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                <h6 class="text-white">Sectional Heads</h6></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->

            </div>



            {{--<div class="col-md-8">--}}
                {{--<h2>Calendar</h2>--}}
                {{--<div class="head">--}}
                    {{--<h4>September 2018</h4>--}}
                {{--</div>--}}
                {{--<div class="table">--}}
                    {{--<table>--}}
                        {{--<tr>--}}
                            {{--<th>Sun</th>--}}
                            {{--<th>Mon</th>--}}
                            {{--<th>Tue</th>--}}
                            {{--<th>Wed</th>--}}
                            {{--<th>Thu</th>--}}
                            {{--<th>Fri</th>--}}
                            {{--<th>Sat</th>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<th>30</th>--}}
                            {{--<th></th>--}}
                            {{--<th></th>--}}
                            {{--<th></th>--}}
                            {{--<th></th>--}}
                            {{--<th></th>--}}
                            {{--<th>1</th>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<th>2</th>--}}
                            {{--<th>3</th>--}}
                            {{--<th>4</th>--}}
                            {{--<th>5</th>--}}
                            {{--<th>6</th>--}}
                            {{--<th>7</th>--}}
                            {{--<th>8</th>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<th>9</th>--}}
                            {{--<th>10</th>--}}
                            {{--<th>11</th>--}}
                            {{--<th>12</th>--}}
                            {{--<th>13</th>--}}
                            {{--<th>14</th>--}}
                            {{--<th>15</th>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<th>16</th>--}}
                            {{--<th>17</th>--}}
                            {{--<th>18</th>--}}
                            {{--<th>19</th>--}}
                            {{--<th>20</th>--}}
                            {{--<th>21</th>--}}
                            {{--<th>22</th>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<th>23</th>--}}
                            {{--<th>24</th>--}}
                            {{--<th>25</th>--}}
                            {{--<th>26</th>--}}
                            {{--<th>27</th>--}}
                            {{--<th>28</th>--}}
                            {{--<th>29</th>--}}
                        {{--</tr>--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}
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
    </div>

    @include('layouts.adminLayouts.footer')
@endsection
