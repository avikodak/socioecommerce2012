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
        <link type="text/css" href="../css/test.css" rel="Stylesheet" />
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
                        <?php
        //echo mt_rand(5, 15); Used For generating Random Values
        $arrayImages = array("testImages/avikodak.jpg", "testImages/88758483226201583_96f8bfca32f0.jpg", "testImages/300296455_09b4deb1342d.jpg", "testImages/299905435_323dbc5b0465.jpg", "testImages/98976892241054563_eb3f29bb1593.jpg", "testImages/98908283611383545_8164094d132e.jpg", "testImages/95348374760326651_e2af6c32041b.jpg", "testImages/91910627538247581_814c0fdc18f6.jpg", "testImages/88666549652555933_992ddb5918a8.jpg", "testImages/91675958989296883_685e59b261da.png");
        echo "<br/>";
        $arrayImageWithInfo = array();


for ($i = 0; $i < count($arrayImages); $i++) {
    if (strpos($arrayImages[$i], ".jpg") || strpos($arrayImages[$i], ".jpg")) {
        $image = imagecreatefromjpeg($arrayImages[$i]);
    }
    if (strpos($arrayImages[$i], ".png")) {
        $image = imagecreatefrompng($arrayImages[$i]);
    }
    $width = imagesx($image);
    $height = imagesy($image);
    $arrayImageWithInfo[$i] = array("url" => $arrayImages[$i], "width" => $width, "height" => $height);
}
foreach ($arrayImageWithInfo as $c => $key) {
    $sort_width[] = $key['width'];
    $sort_height[] = $key['height'];
}

array_multisort($sort_width,SORT_ASC,$sort_width,SORT_ASC,$arrayImageWithInfo);

        $arrayImageWithInfo = array();
        for ($i = 0; $i < count($arrayImages); $i++) {
            if (strpos($arrayImages[$i], ".jpg") || strpos($arrayImages[$i], ".jpg")) {
                $image = imagecreatefromjpeg($arrayImages[$i]);
            }
            if (strpos($arrayImages[$i], ".png")) {
                $image = imagecreatefrompng($arrayImages[$i]);
            }
            $width = imagesx($image);
            $height = imagesy($image);
            $arrayImageWithInfo[$i] = array("url" => $arrayImages[$i], "width" => $width, "height" => $height);
        }



        $rowCount = 2;
        $maxWidth = 580;
        ?><div class=partner><?php
        for ($i = 0; $i < count($arrayImageWithInfo);$rowCount--) :
            ?>

            <div class="imageRow">
                <?php for ($j = $i; $j-$i <= $rowCount && $j < count($arrayImageWithInfo); $j++) : $class = "image_" . ($maxWidth / $rowCount); ?>
                    <div class="image" style="width:<?php echo $maxWidth/($rowCount+1)."px"?>">
                        <img src="<?php echo $arrayImageWithInfo[$j]["url"]?>" width="<?php echo ($maxWidth/($rowCount+1)-32)."px"?>" height="310px"/>
                        <div class="imageContent">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        </div>
                    </div>
                <?php endfor;
                
                $i=$j;
                if (!$rowCount) {
                    $rowCount = 3;
                } ?>  

            </div>
<?php endfor; ?>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
