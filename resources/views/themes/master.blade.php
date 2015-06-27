<html>
    <head>
        <title>Gift Stuff - @yield('title')</title>
	@include('includes/meta')
	@include('includes/styles')
	@include('includes/scripts')
    </head>
    <body>
	@include('includes/header')
        <div>
            @yield('content')
        </div>
	@include('includes/footer')
    </body>
</html>