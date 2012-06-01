<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../php/faceBookDefines.php';
session_start();
$code = $_REQUEST["code"];

if (empty($code)) {
    $_SESSION['state'] = md5(uniqid(rand(), TRUE)); //CSRF protection
    $dialog_url = "http://www.facebook.com/dialog/oauth?client_id="
            . $appId . "&redirect_uri=" . urlencode($redirectUrl) . "&state="
            . $_SESSION['state'];
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link type="text/css" href="../scripts/jquery-ui-1.8.17.custom/css/ui-lightness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
        <script type="text/javascript" src="../scripts/jquery-ui-1.8.17.custom/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="../scripts/jquery-ui-1.8.17.custom/js/jquery-ui-1.8.17.custom.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".fb-login-button").click(function(){
                    window.location.href= "<?php echo $dialog_url ?>";
                });
            });
        </script>
    </head>
    <body>
        <div id="loginBox" class="login">
            <table>
                <tr>
                    <td colspan="2"> Login </td>
                </tr>
                <tr>
                    <td><div><a id="auth-loginlink">
                                <div class="fb-login-button">
                                    Connect With Facebook
                                </div>
                            </a></div></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </body>
</html>
<!-- http://localhost:8888/ecommerce/src/homeV3.php?code=AQAgPKAGxegxu9EgMhuE-cHA7ZVRJL5DZ4ZwKexd32XfE0vR2I-pdXNXske9K0hCn_UTPAOFDe641tkEmrG224TmHQbhx-qb9HhVQewsivLixizA22n7SbQ1XuxDIqUf39n5Iw4tTzb1AklUey8MjzBFoTy56lIPwDjo1wonPtuKehrtdov3axR_ncMXAX6rFqk#_=_  -->