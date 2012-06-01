<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

/*
a.button {
   display: -moz-inline-stack;
   display: inline-block;
   width: 99px;
   height: 38px;
   background: url("http://dabuttonfactory.com/b.jpeg?t=SignIn&f=Calibri-Bold&ts=24&tc=ffffff00&tshs=1&tshc=22222200&it=jpeg&c=5&bgt=gradient&bgc=cc4677&ebgc=87226f&hp=20&vp=11") no-repeat;
   line-height: 38px;
   vertical-align: text-middle;
   text-align: center;
   color: #ffffff;
   font-family: Calibri;
   font-size: 24px;
   font-weight: bold;
   font-style: normal;
   text-shadow: #222222 1px 1px 0;
}
a.button > span {
   display: -moz-inline-block;
}

LOGO

<a href="http://cooltext.com"><img src="http://images.cooltext.com/2621342.gif" width="304" height="66" alt="SocioEcommerce
" /></a>
<br />Image by <a href="http://cooltext.com">Cool Text: Free Graphics Generator</a> - <a href="http://cooltext.com/Logo-Design?LogoID=678154617">Edit Image</a>
*/


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script>
       /*     
                // Load the SDK Asynchronously
                (function(d){
                    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
                    if (d.getElementById(id)) {return;}
                    js = d.createElement('script'); js.id = id; js.async = true;
                    js.src = "//connect.facebook.net/en_US/all.js";
                    ref.parentNode.insertBefore(js, ref);
                }(document));

                // Init the SDK upon load
                window.fbAsyncInit = function() {
                    FB.init({
                        appId      : '384618301573901', // App ID
                        // channelUrl : '//'+window.location.hostname+'/channel', // Path to your Channel File
                        status     : true, // check login status
                        cookie     : true, // enable cookies to allow the server to access the session
                        xfbml      : true  // parse XFBML
                    });

                    // listen for and handle auth.statusChange events
                    FB.Event.subscribe('auth.statusChange', function(response) {
                        if (response.authResponse) {
                            // user has auth'd your app and is logged into Facebook
                            FB.api('/me', function(me){
                                if (me.name) {
                                    
                                   //window.location.href="http://localhost:8888/ecommerce/src/home.php" ;
                                }
                            })
                            
                        } else {
                            // user has not auth'd your app, or is not logged into Facebook
                            window.location.href="http://localhost:8888/ecommerce/src/login.php";
                        }
                    });

                    // respond to clicks on the login and logout links
                   
                } 
            */
            window.fbAsyncInit = function() {
                FB.init({ appId: '384618301573901', 
                    status: true, 
                    cookie: true,
                    xfbml: true,
                    oauth: true});

                function updateButton(response) {
                    var button = document.getElementById('fb-auth');
		
                    if (response.authResponse) {
                        //user is already logged in and connected
                        var userInfo = document.getElementById('user-info');
                        FB.api('/me', function(response) {
                            userInfo.innerHTML = '<img src="https://graph.facebook.com/' 
                                + response.id + '/picture">' + response.name;
                            button.innerHTML = 'Logout';
                        });
                        button.onclick = function() {
                            FB.logout(function(response) {
                                var userInfo = document.getElementById('user-info');
                                userInfo.innerHTML="";
                            });
                        };
                    } else {
                        //user is not connected to your app or logged out
                        button.innerHTML = 'Login';
                        button.onclick = function() {
                            FB.login(function(response) {
                                if (response.authResponse) {
                                    FB.api('/me', function(response) {
                                        var userInfo = document.getElementById('user-info');
                                        userInfo.innerHTML = 
                                            '<img src="https://graph.facebook.com/' 
                                            + response.id + '/picture" style="margin-right:5px"/>' 
                                            + response.name;
                                    });	   
                                } else {
                                    //user cancelled login or did not grant authorization
                                }
                            }, {scope:'email'});  	
                        }
                    }
                }

                // run once with current status and whenever the status changes
                FB.getLoginStatus(updateButton);
                FB.Event.subscribe('auth.statusChange', updateButton);	
            };
	
            (function() {
                var e = document.createElement('script'); e.async = true;
                e.src = document.location.protocol 
                    + '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());
        </script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
