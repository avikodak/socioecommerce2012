<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>

            #loginBox{
                position: absolute;
                bottom: 0;
                right: 0;
                width:250px;
                height: auto;
                margin-right:0.5em;
                border: #000 solid thin;
            }
            #loginContent{
                position:relative;
                float: right;
                width: 49%;
                height: 600px;
                border: #000 solid thin;
                border-top-left-radius: 90%;
                margin-right:0.5em;
            }
            #registration{
                float: left;
                width: 49%;
                height: 600px;
                border-top-right-radius: 90%;
                border: #000 solid thin;
                margin-left:0.5em;
            }
            #container{
                margin: 0em auto;
                background-color: #fff;
                width:100%; 
                height:auto;
            }
            body{

                background-repeat: repeat;
            }
        </style>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '384618301573901',
                    status     : true, 
                    cookie     : true,
                    xfbml      : true,
                    oauth      : true
                });
                // listen for and handle auth.statusChange events
                FB.Event.subscribe('auth.statusChange', function(response) {
                    if (response.authResponse) {
                        // user has auth'd your app and is logged into Facebook
                        FB.api('/me', function(me){
                            
                            window.location.href="http://localhost:8888/ecommerce/src/home.php";
                        })
                        document.getElementById('auth-loggedout').style.display = 'none';
                        document.getElementById('auth-loggedin').style.display = 'block';
                    } else {
                        // user has not auth'd your app, or is not logged into Facebook
                        
                    }
                });

                // respond to clicks on the login and logout links
                
            };
            (function(d){
                var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
                js = d.createElement('script'); js.id = id; js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js";
                d.getElementsByTagName('head')[0].appendChild(js);
                document.getElementById("test1").innerHTML="LoggedIn";
            }(document));
         
            
         
        </script>
    </head>
    <body>
        <?php
        include "includes/header.php"
        ?>
        <div id="container">
            <div id="registration"></div>
            <div id="loginContent">
                <div id="loginBox">
                    <div>PLEASE LOGIN</div>
                    <div>
                        <form>
                            <table>
                                <tr>
                                    <td>Username</td>
                                    <td><input type="text" name="username" id="username"/></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="password" name="password" id="password"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" value="LOGIN" name="login"/></td>
                                </tr>
                            </table>
                        </form>
                        <table>
                            <tr>
                                <td>
                                    <div class="fb-login-button" scope="email,user_checkins">
                                        Login with Facebook
                                    </div>
                                </td>
                                <td></td>    
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
