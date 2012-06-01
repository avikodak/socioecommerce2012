<?php
//require '../php/php-sdk/src/facebook.php';
//   
//$facebook = new Facebook(array(
//  'appId'  => '384618301573901',
//  'secret' => 'f5cacafb3e96ee43cd2b07de413880f5',
//  'cookie' => true,
//));
//
////2. retrieving session
//// See if there is a user from a cookie
//$user = $facebook->getUser();
////3. requesting 'me' to API
//$me = null;
//if ($user) {
//  try {
//    
//    $me = $facebook->api('/me');
//  } catch (FacebookApiException $e) {
//    error_log($e);
//  }
//}
//
////4. login or logout
//if ($me) {
//	$logoutUrl = $facebook->getLogoutUrl();
//} else {
//	$loginUrl = $facebook->getLoginUrl();
//}

?>
<!doctype html>
<!--<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>php-sdk</title>
  </head>
  <body>
    <?php if ($me): ?>
    <?php echo "Welcome, ".$me['first_name']. ".<br />"; ?>
    <a href="<?php echo $logoutUrl; ?>">
      <img src="http://static.ak.fbcdn.net/rsrc.php/z2Y31/hash/cxrz4k7j.gif">
    </a>
    <?php else: ?>
      <a href="<?php echo $loginUrl; ?>">
        <img src="http://static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif">
      </a>
    <?php endif ?>
  </body>
</html>-->

<!---->


<!-- <div id="loginBox" class="login">
            <table>
                <tr>
                    <td colspan="2"> Login </td>
                </tr>
                <tr>
                    <td><div><a href="#" id="auth-loginlink">
                                <div class="fb-login-button">
                                    Connect With Facebook
                                </div>
                            </a></div></td>
                    <td></td>
                </tr>
            </table>
        </div> -->
