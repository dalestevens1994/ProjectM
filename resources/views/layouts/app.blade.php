<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ProjectM</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>

    <link href="/css/app.css" rel="stylesheet" type="text/css">

</head>
<body id="app-layout">
    {{--<nav class="navbar navbar-default">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}

                {{--<!-- Collapsed Hamburger -->--}}
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                    {{--<span class="sr-only">Toggle Navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}

                {{--<!-- Branding Image -->--}}
                {{--<a class="navbar-brand" id="logo" href="{{ url('/home') }}">--}}
                    {{--ProjectM--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li><a href="{{ url('/') }}">Home</a></li>--}}
                    {{--<li class="dropdown">--}}
                        {{--<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="{{ url('CreateProject') }}">Create Project</a></li>--}}
                            {{--<li><a href="#">Manage Projects</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown">--}}
                        {{--<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clients <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="{{ route('clients.create') }}">Create Client</a></li>--}}
                            {{--<li><a href="{{ route('clients.index') }}">Manage Clients</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown">--}}
                        {{--<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#">Overview</a></li>--}}
                                {{--<li><a href="#">Edit Account</a></li>--}}
                            {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="{{ url('/UserGuide') }}">User Guide</a></li>--}}
                    {{--<li><a href="{{ url('/About') }}">About</a></li>--}}
                {{--</ul>--}}

                {{--<!-- Right Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@if (Auth::guest())--}}
                        {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                    {{--@else--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                {{--You are logged in as {{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--@endif--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}

    <div class="sidebar">
        <div class="burger-menu">
            <p>&#9776</p>
        </div>
        <div class="logo">
            <h1>ProjectM</h1>
        </div>
        <ul>
            <li><a href="{{ url('/') }}"><h3>DASHBOARD</h3></a></li>
            <li><span class="clickProjects"><h3>PROJECTS</h3></span>
                <ul class="dropdownProjects">
                    <li><a href="{{ route('projects.create') }}">Create Project</a></li>
                    <li><a href="{{ route('projects.index') }}">Manage Projects</a></li>
                </ul>
            </li>
            <li><span class="clickClients"><h3>CLIENTS</h3></span>
                <ul class="dropdownClients">
                    <li><a href="{{ route('clients.create') }}">Create Client</a></li>
                    <li><a href="{{ route('clients.index') }}">Manage Clients</a></li>
                </ul>
            </li>
            <li><span class="clickAccount"><h3>ACCOUNT</h3></span>
                <ul class="dropdownAccount">
                    <li><a href="#">Manage Account</a></li>
                    <li><a href="#">Edit Details</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/UserGuide') }}"><h3>USER GUIDE</h3></a></li>
            <li><a href="{{ url('/About') }}"><h3>ABOUT</h3></a></li>
        </ul>
        <div class="login">

        </div>
    </div>

    <div class="top-bar">
        <div id="user">
            <p>Hello {{ Auth::user()->name }}!</p>
        </div>
        <a href="{{ url('/logout') }}" class="buttons">Logout</a>
    </div>

    <div class="contentMain">

    @yield('content')

    </div>

            <!-- JQuery UI -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(document).ready(function(){
            $(".createClient").click(function(){
                $("#form").slideDown();
                $(".createClient").toggle();
            });

            $("#selectClient").change(function() {
                if ("#selectClient option:selected") {
                    $("#form").slideUp();
                    $(".createClient").toggle();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.sidebar > ul > li span').click(function(){
                $(this).siblings('ul').slideToggle();
            });

            $('.burger-menu').click(function(){
                $('.sidebar').toggleClass('animation');
            });
        });
    </script>

</body>
</html>
