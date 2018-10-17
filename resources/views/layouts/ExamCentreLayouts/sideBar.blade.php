<aside class="left-sidebar" data-sidebarbg="skin5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/ECadmin/dashboard')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Dashboard</span></a></li>

                <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/QBank')}}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Question Bank</span></a></li>

                <li class="sidebar-item active"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-trophy"></i><span class="hide-menu">Results</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item active"><a href="{{url('/ECadmin/resultsHome')}}" class="sidebar-link"><i class="mdi mdi-pencil"></i><span class="hide-menu"> Add Results  </span></a></li>

                        <li class="sidebar-item active"><a href="{{url('/results_search')}}" class="sidebar-link"><i class="fa fa-group"></i><span class="hide-menu"> View Results </span></a></li>

                        <li class="sidebar-item active"><a href="{{url('/searchBySId')}}" class="sidebar-link"><i class="fa fa-file-text-o"></i><span class="hide-menu"> Students Results </span></a></li>
                  </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>