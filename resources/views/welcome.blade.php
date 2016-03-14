<!DOCTYPE html>
<html>
    <head>
        <title>ProjectM</title>

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
                        <form class="formLogin" action="">
                            <input type="text" required validate="string32" class="username" placeholder="Username"></input>
                            <input type="password" required id="password" placeholder="Password"></input>
                        </form>
                        <div class="button">
                            <a href="#"><p>Forgot your password?</p></a>
                            <input class="submit" name"" type="submit" value="Login" />
                        </div>       
                    </div>    
                </div>

                <div class="tab signup">
                    <input id="signUp" name="loginTab" type="radio">
                    <label for="signUp">Sign Up</label> 
                    <div class="content">
                        <h2> New Account </h2>
                         <form class="formSignup" action="">
                            <input type="text" required validate="string32" class="username" placeholder="Username"></input>
                            <input type="password" required validate="password" placeholder="Confirm Password"></input>
                            <input type="password" required validate="password" placeholder="Password"></input>
                            <input type="text" required validate="string254" class="username" placeholder="Email"></input>
                        </form>
                        <div class="button">
                            <input class="submit" name"" type="submit" value="Create" />
                        </div>       
                    </div> 
                </div>
            </div>
        </div>

    </body>
</html>
