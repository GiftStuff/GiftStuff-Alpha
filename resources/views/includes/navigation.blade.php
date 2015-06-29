<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">GiftStuff</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li{!! Request::is( 'home') ? ' class="active"' : '' !!}><a href="/home">Home</a></li>
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
                <li{!! Request::is( 'signup') ? ' class="active"' : '' !!}><a href="/signup"><span class="glyphicon glyphicon-user"></span> Sign-Up</a></li>
                <li{!! Request::is( 'login') ? ' class="active"' : '' !!}><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>