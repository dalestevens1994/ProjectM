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
    <link href="/assets/css/app.css" rel="stylesheet" type="text/css">
    <!-- JQuery -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-1.12.3.min.js') }}"></script>
    <!-- Bootstrap Multiselect -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap-multiselect.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/js/bootstrap.min.js') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}"/>
    <script type="text/javascript" src="{{ URL::asset('assets/css/bootstrap-multiselect.css') }}"></script>
</head>
<body id="app-layout">
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

            <li><a href="{{ route('profile.index', ['name' => Auth::user()->name ])}}"><h3>ACCOUNT</h3></a>
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

    <!-- JQuery -->
    {{--<script src="//code.jquery.com/jquery-1.10.2.js"></script>--}}
    <script type="text/javascript">
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('.sidebar > ul > li span').click(function(){
                $(this).siblings('ul').slideToggle();
            });

            $('.burger-menu').click(function(){
                $('.sidebar').toggleClass('animation');
            });
        });
    </script>
    <script type="text/javascript">
        // on page load...
        $(document).ready(function(){

            $('.progress-wrap').each(function(){
                console.log($(this).attr('id'));
                var getPercent = ($(this).data('progress-percent') / 100);
                var getProgressWrapWidth = $(this).width();
                var progressTotal = getPercent * getProgressWrapWidth;
                var animationLength = 1500;

                // on page load, animate percentage bar to data percentage length
                // .stop() used to prevent animation queueing

                $(this).find('.progress-bar').stop().animate({
                    width: progressTotal
                }, animationLength);

            })

        });

        // on browser resize...
        $(window).resize(function() {
            moveProgressBar();
        });

        // SIGNATURE PROGRESS
        function moveProgressBar(target) {

        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#user-multiple-selected').multiselect();
        });
    </script>

</body>
</html>
