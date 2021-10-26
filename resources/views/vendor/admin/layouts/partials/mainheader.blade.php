<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        
    </div>
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="{{asset('portfolios/assets/img/thumb.jpg')}}" alt="">
                    </span>
                    <span class="user-name">{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="dw dw-logout"></i> Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <div class="github-link">
            <a href="https://github.com/taufikhdyt17" target="_blank"><img src="{{asset('admin/vendors/images/github.svg')}}" alt=""></a>
        </div>
    </div>
</div>