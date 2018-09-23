<div class="modal" id="loginModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">

                {{--<h4 class="modal-title">Hello {{\Illuminate\Support\Facades\Auth::guard('admin')->user()->name}}</h4>--}}
                <h6></h6>
                <button class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Account</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"><i class="fa fa-power-off m-r-5 m-l-5"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>

        </div>
    </div>
</div>