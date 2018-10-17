<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/FMadmin/dashboard')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Finance Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/payment')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Online Payment</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/pendingApproval')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Pending Approval</span></a></li>
                {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/FMadmin/paymentOverview')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Payment OverView</span></a></li>--}}
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/pending_approvals')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Approved Payments</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/disapproved_payment')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Disapproved Payments</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Expences</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{url('/FMadmin/addExpences')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu">Add Expences </span></a></li>
                        <li class="sidebar-item"><a href="{{url('/Expence')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu">Expences Report </span></a></li>

                    </ul>
                </li>
                {{--<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Accounts</span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse  first-level">--}}
                        {{--<li class="sidebar-item"><a href="{{url('/FMadmin/profit')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu">Profit </span></a></li>--}}
            {{--</ul>--}}
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>