<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">GiftStuff</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li{!! Request::is( 'home') ? ' class="active"' : '' !!}><a href="/home"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Test<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/test/1">1</a></li>
                        <li><a href="/test/2">1</a></li>
                        <li><a href="/test/3">3</a></li>
                        <li><a href="/test/4">4</a></li>
                        <li><a href="/test/5">5</a></li>
                    </ul>
                </li>
                <li{!! Request::is( 'support') ? ' class="active"' : '' !!}><a href="/support">Support</a></li>
                <li{!! Request::is( 'about-us') ? ' class="active"' : '' !!}><a href="/about-us">About-Us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li class="{{ (Request::is('auth/login') ? 'active' : '') }}"><a href="{!! URL::to('auth/login') !!}"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
                <li class="{{ (Request::is('auth/register') ? 'active' : '') }}"><a href="{!! URL::to('auth/register') !!}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false"><i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }} <i
                            class="glyphicon glyphicon-menu-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        @if(Auth::check())
                        @if(Auth::user()->admin==1)
                        <li>
                            <a href="{!! URL::to('admin/dashboard') !!}"><i class="glyphicon glyphicon-user"></i> Dashboard</a>
                        </li>
                        @endif
                        <li role="presentation" class="divider"></li>
                        @endif
                        <li>
                            <a href="{!! URL::to('auth/logout') !!}"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>