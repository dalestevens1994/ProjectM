<!DOCTYPE html>
<html>
    <head>
        <title>ProjectM</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="/css/app.css" rel="stylesheet" type="text/css">

        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    </head>
    <body>

        <div class="container">
            <div class="loginWrapper">
                <div class="tab login">
                    <input id="login" name="loginTab" type="radio" checked>
                    <label for="login">Log In</label>
                    <div class="content">
                        <form class="formLogin" method="POST" role="form" action="{{ url('/login') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" value="{{ old('email') }}" class="username" placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </input>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" name="password" required id="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </input>
                            </div>

                            <div class="button">
                                <a href="#"><p>Forgot your password?</p></a>
                                <input href="#" class="submit" type="submit" value="Login">
                            </div>   

                        </form>
                    </div>    
                </div>

                <div class="tab signup">
                    <input id="signUp" name="loginTab" type="radio">
                    <label for="signUp">Sign Up</label> 
                    <div class="content">
                        <h2> New Account </h2>
                         <form class="formSignup" role="form" method="POST" action="{{ url('/register') }}">
                            {!! csrf_field() !!}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" required validate="string32" class="username" placeholder="Name" value="{{ old('name') }}"></input>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" required validate="string254" class="username" placeholder="Email" value="{{ old('email') }}"></input>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="password" required validate="password" placeholder="Password"></input>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input type="password" class="password" required validate="password" name="password_confirmation" placeholder="Confirm Password"></input>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="button">
                            <input href="{{ url('/home') }}" class="submit" type="submit" value="Create" />
                        </div>  
                            
                        </form>
     
                    </div> 
                </div>
            </div>
        </div>

    </body>
</html>
