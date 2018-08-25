@extends('layouts.app')

@section('content')

    @include('layouts.NonAcademicLayouts.header')
    @include('layouts.NonAcademicLayouts.sideBar')

    <div class="page-wrapper" style="background-image: url('/public/assets/images/big/auth-bg.jpg')">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">

                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">NON Academic management</li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                <bu
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
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">
                        <h6 class="text-white">Student </h6>

                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-secondary text-center">
                        <h1 class="font-light text-white"><i class=></i></h1>
                        <h6 class="text-white">Teachers-IN-Charge</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3" style="height = 40px">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class=></i></h1>
                        <h6 class="text-white">Coaches</h6>
                    </div>
                </div>
            </div>

            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-secondary text-center">
                        <h1 class="font-light text-white"><i class=""></i></h1>
                        <h6 class="text-white">Sports Categories</h6>
                    </div>
                </div>
            </div>

        </div>
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-3 ">

                    <div class="card card-hover ">
                        <div class="box bg-secondary text-center">
                            <h1 class="font-light text-white"><i class=""></i></h1>
                            <h6 class="text-white">Sports Events</h6>
                        </div>
                    </div>

                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class=""></i></h1>
                            <h6 class="text-white">Achievements</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-secondary text-center">
                            <h1 class="font-light text-white"><i class=""></i></h1>
                            <h6 class="text-white">Time Table</h6>
                        </div>
                    </div>
                </div>


                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="w-30px"></i></h1>
                            <h6 class="text-white">Noticeboard</h6>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="span12">
                        <table class="table-condensed table-bordered table-striped">
                            <thead>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>

                            <tr>
                                <th colspan="7">
                        <span class="btn-group">
                            <a class="btn"><i class="icon-chevron-left"></i></a>
                        	<a class="btn active">February 2012</a>
                        	<a class="btn"><i class="icon-chevron-right"></i></a>
                        </span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Su</th>
                                        <th>Mo</th>
                                        <th>Tu</th>
                                        <th>We</th>
                                        <th>Th</th>
                                        <th>Fr</th>
                                        <th>Sa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="muted">29</td>
                                        <td class="muted">30</td>
                                        <td class="muted">31</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td class="btn-primary"><strong>20</strong></td>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>27</td>
                                        <td>28</td>
                                        <td>29</td>
                                        <td class="muted">1</td>
                                        <td class="muted">2</td>
                                        <td class="muted">3</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                </div>


    @include('layouts.adminLayouts.footer')

@endsection