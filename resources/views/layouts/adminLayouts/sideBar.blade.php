
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->

        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav" >
                <ul id="sidebarnav" class="p-t-30 " >
                    <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('admin/dashboard')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">User Management</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{url('/admin/manage-students')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Students </span></a></li>
                            <li class="sidebar-item"><a href="{{url('/admin/manage-teacher')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Teachers </span></a></li>
                            <li class="sidebar-item"><a href="{{url('/admin/manage-parents')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Parents </span></a></li>
                            <li class="sidebar-item"><a href="{{url('/admin/manage-staff')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Staff </span></a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>

        <!-- End Sidebar scroll-->
    </aside>


