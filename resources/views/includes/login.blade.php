<script type="text/javascript">
    angular.module('Login', ['ui.bootstrap']);
</script>

@if (Auth::guest())
<li ng-app="Login" class="dropdown" dropdown>


    <a href="" class="dropdown-toggle" dropdown-toggle><i class="glyphicon glyphicon-log-in"></i> Login</a>
    <ul class="dropdown-menu" dropdown-menu>
        <li>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" />
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" /> Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </li>
    </ul>


</li>
<li class="{{ (Request::is('auth/register') ? 'active' : '')}}"><a href="{!! URL::to('auth/register') !!}">Register</a></li>

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