// Load the SDK Asynchronously
(function(d){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement('script');
    js.id = id;
    js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    ref.parentNode.insertBefore(js, ref);
}(document));

// Init the SDK upon load
window.fbAsyncInit = function() {
    FB.Flash.hasMinVersion = function () {
        return false;
    };
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
          //  alert(response.authResponse.accessToken);
            FB.api('/me', function(response) {
                document.getElementById("fb_root").style.display='inline-block';
                document.getElementById("user_dp").innerHTML = '<img src="https://graph.facebook.com/' 
                + response.id + '/picture">' ;
                document.getElementById("username").innerHTML=response.name;
                document.getElementById("loginBox").style.display = 'none';
                
            });
                       
                        
                        
        } else {
            // user has not auth'd your app, or is not logged into Facebook
            document.getElementById("fb_root").style.display='none';
            document.getElementById("loginBox").style.display = 'block';
                        
                        
        }
    });
                
    document.getElementById('auth-loginlink').addEventListener('click', function(){
        FB.login(function(response) {
                        
            }, {
                scope: 'email,user_likes,user_checkins,read_requests,read_mailbox,user_status,user_interests'
            });

    });
    document.getElementById('auth-logoutlink').addEventListener('click', function(){
        FB.logout();
    }); 
} 