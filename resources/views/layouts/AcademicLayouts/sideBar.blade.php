<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/Aadmin/Dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/Aadmin/searchAllV')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Search All</span></a></li>

                <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/Aadmin/searchTeacherS')}}" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Report</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Class Management</span></a>

                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{url('/Aadmin/ClassS')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Add New Class </span></a></li>
                        <li class="sidebar-item"><a href="{{url('/Aadmin/ClassTeacherS')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Assign Class Teachers </span></a></li>
                        {{--<li class="sidebar-item"><a href="{{url('/Aadmin/searchV')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Search Classes </span></a></li>--}}
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Subject Management</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{url('Aadmin/SubjectS')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Add New Subject </span></a></li>
                        <li class="sidebar-item"><a href="{{url('Aadmin/SubjectTeacherS')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Assign Subject Teachers </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa fa-table"></i><span class="hide-menu">Section Management</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{url('/Aadmin/SectionS')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Add New Sections </span></a></li>
                        <li class="sidebar-item"><a href="{{url('/Aadmin/SectionalHeadS')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Assign Sectional Heads </span></a></li>
                    </ul>
                </li>

                {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('subjectTeacher')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Subject Teachers</span></a></li>--}}
                {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('classTeacher')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Class Teachers</span></a></li>--}}
                {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('sectionalHead')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Sectional Heads</span></a></li>--}}


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>