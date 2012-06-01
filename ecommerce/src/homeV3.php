<?php
include '../php/IncludesPath.php';
include_once $FB_GLOBAL_DEFINES;
include $FB_PHP;
include $FB_COMMON_FUNCTION;
include $FBINTERESTS_Class;

$code = $_GET['code'];
$state = $_GET['state'];

global $userLoggedIn;

$config = array(
    'appId' => $appId,
    'secret' => $appSecret,
);

$facebook = new Facebook($config);

$userId = $facebook->getUser();


if (!$userId) {
    echo "<meta http-equiv='refresh' content='0;url=" . $LOGIN_PAGE_NO_USER_URL . "'>";
}


try {
    $userProfile = $facebook->api('/me', 'GET');

    $userProfilePicArray = $facebook->api('/me?fields=picture', 'GET');

    $userProfilePicUrl=$userProfilePicArray["picture"];

    $userName = $userProfile['name'];

    $userInterests = $facebook->api('/me/likes', 'GET');

    //$user = new FBInterests_Class();

    //$user->setDataArray($userInterests);

    //$user->getAllInterests();
    
    $logoutconfig = array('next' => $LOGIN_PAGE_NO_USER_URL);

    $logoutUrl = $facebook->getLogoutUrl($logoutconfig);
    
    
} catch (FacebookApiException $e) {
    error_log($e->getType());
    error_log($e->getMessage());
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SocioEcommerce</title>
        <link type="text/css" href="../css/common.css" rel="Stylesheet" />
        <link type="text/css" href="../css/homePage.css" rel="Stylesheet" />
        <link type="text/css" href="../scripts/jquery-ui-1.8.17.custom/css/ui-lightness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
        <script type="text/javascript" src="../scripts/jquery-ui-1.8.17.custom/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="../scripts/jquery-ui-1.8.17.custom/js/jquery-ui-1.8.17.custom.min.js"></script>
        <script type="text/javascript" src="../scripts/homePage.js"></script>
    </head>
    <body>
        <?php include "includes/header.php" ?>
        <div class="container">
            <div id="content">
                <div id="space">hidden</div>
                <div class="mainContent" style="position:relative">
                    <div class="images">
                        <div class="partner" id="sample">
                            <div class="parnterDP"><img src="testImages/avikodak.jpg"/></div>
                            <div class="imageRow">
                                <div class="image">
                                    <img src="testImages/97984519193236911_9887b6e140be.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="testImages/97984446707275179_08b6a957d27c.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="testImages/97863901906997349_09a176850007.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                            </div>
                            <div class="imageRow">
                                <div class="image">
                                    <img src="testImages/97984487257806253_5f7f4dbf9391.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="testImages/97878356762038571_bb0ef47a065b.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="testImages/97988853905757649_68044c789f1f.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="partner">
                            <div class="parnterDP"><img src="testImages/avikodak.jpg"/></div>
                            <div class="imageRow">
                                <div class="image">
                                    <img src="testImages/265219865525107307_6nARqSg4_b.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="testImages/97996667432736343_89e70f4e4127.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="testImages/97988874483013075_7cfa5aa1cdfe.jpg"/>
                                    <div class="imageContent">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a style="padding: 1.5em">
                    <div class="infiniteScrollBtn">
                        <div class="center fontColorWhite mediumSize">
                            Show More Posts
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </body>
</html>
