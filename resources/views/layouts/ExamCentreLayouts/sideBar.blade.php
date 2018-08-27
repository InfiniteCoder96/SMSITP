//sidebar.blade.php

<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/ECadmin/dashboard')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/ECadmin/questionBank')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Question Bank</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Results</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{url('/ECadmin/publishResults')}}" class="sidebar-link"><i class=" mdi-border-color"></i><span class="hide-menu"> Publish Results </span></a></li>
                        <li class="sidebar-item"><a href="{{url('/ECadmin/viewResults')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> View Results </span></a></li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>