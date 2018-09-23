<nav class="navbar bg-dark fixed-bottom text-white">
    <a class="navbar-brand">Powered By:<img src="{{asset('assets/images/logos.png')}}"></a>
    <p class="copy">Copyright 2018 St. John College. Designed by <a href="http://www.vandelaydesign.com/" title="Designed by Vandelay Design" target="_blank"><strong>Yakku</strong></a>. All rights reserved.</p>
    @if(Auth::guard('admin')->check())
        <p>Hello <Text style="color: gold">{{Auth::guard('admin')->user()->name}}</Text><br>
            Logged In As: <a href="{{url('/admin/dashboard')}}">{{Auth::guard('admin')->user()->role}}</a></p>

        {{--<a href="{{ url('logout_user') }}"--}}
        {{--onclick="event.preventDefault();--}}
        {{--document.getElementById('logout-form').submit();"><i class="fa fa-power-off m-r-5 m-l-5"></i>--}}
        {{--{{ __('Logout') }}--}}
        {{--</a></p>--}}

    @else
        <form class="form-inline" action="{{route('login')}}" method="post">
            {{ csrf_field() }}
            <input class="form-control mr-sm-2" type="email" placeholder="Email" aria-label="Email" name="email">
            <input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password" name="password">
            <button class="btn btn-outline-success btn-sm" type="submit">Login</button>
        </form>
    @endif
</nav>