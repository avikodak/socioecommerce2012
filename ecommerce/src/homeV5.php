<?php
include '../php/IncludesPath.php';
include_once $FB_GLOBAL_DEFINES;
include $FB_PHP;
include $FB_COMMON_FUNCTION;
include $FBINTERESTS_Class;
include $FB_BASIC_INFO;
$code = $_GET['code'];
$state = $_GET['state'];

global $userLoggedIn;
global $logoutUrl;
$config = array(
    'appId' => $appId,
    'secret' => $appSecret,
);

$facebook = new Facebook($config);

$userId = $facebook->getUser();

$userId = "sample";
if (!$userId) {
    echo "<meta http-equiv='refresh' content='0;url=" . $LOGIN_PAGE_NO_USER_URL . "'>";
}


try {
    $userProfile = $facebook->api('/me', 'GET');
    
    $userProfilePicArray = $facebook->api('/me?fields=picture', 'GET');

    $userProfilePicUrl = $userProfilePicArray["picture"];

    $userName = $userProfile['name'];

    $userInterests = $facebook->api('/me/likes', 'GET');

    //$user = new FBInterests_Class();
    //$user->setDataArray($userInterests);
    //$user->getAllInterests();
    
    $FBBasicInfo = new FBBasicInfo($userProfile,$userProfilePicArray);
   
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
        <link type="text/css" href="../css/navigation.css" rel="Stylesheet" />
        <link type="text/css" href="../scripts/jquery-ui-1.8.17.custom/css/ui-lightness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
        <script type="text/javascript" src="../scripts/jquery-ui-1.8.17.custom/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="../scripts/jquery-ui-1.8.17.custom/js/jquery-ui-1.8.17.custom.min.js"></script>
        <script type="text/javascript" src="../scripts/homePage.js"></script>
        
        <style>
             .mainDialogContent{
                border:6px inset orange;
                display: inline-block;
               
            } 
            .imageInDialog{
                display: inline-block;
                display:inline-block;
                padding: 0.3em;
                border:6px double #545565;
            }
            .contentRelatedToImage{
                display:inline-block;
                border:#9a9ae6 solid thin;
                width :auto;
                position: relative;
                border-bottom-color: #966;
                border-top-color: #966;
            }
            .imageInfo{
                list-style-type: none;
                padding-left: 0px;

            }
            ul.imageInfo > li{
                text-align: left;
                
            }
            ul.sellerContact{
                list-style-type: none;
                padding-left: 0px;

            }
            #extraInformation{
                border-top-color: #e22626;
                border-top: #e22626 solid thin;
            }
            .wrapperForImageAndContent{
                display: inline-block;
                height:auto;
            }
            .commentsSection{
                list-style-type: none;
                padding: 0;
            }
            .comments{
                border: #000 solid thin;
            }
            
            
            /*BUTTON */
            .thoughtbot {
                -webkit-box-shadow:rgba(255, 115, 100, 0.398438) 0 0 0 1px inset, #333333 0 1px 3px;
                background-color:#EE432E;
                background-image:-webkit-linear-gradient(top, #EE432E 0%, #C63929 50%, #B51700 50%, #891100 100%);
                border:1px solid #951100;
                border-bottom-left-radius:5px;
                border-bottom-right-radius:5px;
                border-top-left-radius:5px;
                border-top-right-radius:5px;
                box-shadow:rgba(255, 115, 100, 0.398438) 0 0 0 1px inset, #333333 0 1px 3px;
                color:#FFFFFF;
                font-family:'helvetica neue', helvetica, arial, sans-serif;
                font-size:10px;
                font-style:normal;
                font-variant:normal;
                font-weight:bold;
                line-height:1;
                padding:5px 5px 8px 8px;
                text-align:center;
                text-shadow:rgba(0, 0, 0, 0.796875) 0 -1px 1px;

            }
            
            /*Modal Dialog Message*/
            .opacityDialogBox{
                display:none;
                
            }
              #dialogBox{
                width:600px;
                height:400px;
                margin:0 auto;
                border:#eeeeee solid thin;
                z-index: 12;
                background-color: white;
                position: fixed;
                left: 500px;
                top:100px;
                border-radius: 6px;
                -moz-border-radius: 6px;
                -webkit-border-radius: 6px;
            }
            #dialogBox p{
                margin: 0px;
            }

            #mainContentDialogBox{
                width: 100%;
                height: 100%;
                position: relative;
                overflow: hidden;

            }

            #header_dialogBox{
                width: auto;
                height: 10%;
                padding:1em;
                margin: 3px;
                border-bottom: #eeeeee solid thin;
            }

            #dialogContent{
                height: 60%;
            }
            #col1_dialogBox,#col2_dialogBox{
                width: 43%;
                height: 85%;
                display: inline-block;
                padding: 1em;
                margin: 3px 3px 3px 5px;
                float: left;
            }
            #col2_dialogBox{
                border: #eeeeee solid thin;;
            }

            #footer_dialogBox{

                width: auto;
                height: 10%;
                padding:1em;
                margin: 3px;

            }

            .clearfix{
                clear: both;
            }

            .rfloat{
                float: right;
            }


            
            .imageInDialogBox{
                width: 200px;
                margin: 0 auto;
            }

            .roundedBorderImage{
                border-radius: 6px;
                -moz-border-radius: 6px;
                -webkit-border-radius: 6px;
            }
            #checkBoxSection{
                height: 80%;
            }

            .labelsCheckBox{
                display: inline-block;
                padding-left: 10px;
                padding-top: 2px;
                margin-top: 1px;

            }
            #createNewList{
                border: #500 solid thin;
                height: 35px;
            }

            .noOutline{
                outline:none;
                border: none;
            }

            .width_100p{
                width: 95.5%;

            }
            .textBox_Dialog{
                display: inline-block;
                padding: 5px;
                margin:auto;
                height: 25px;
                line-height: 20px;

            }
            .mainHeading{
                color:#015B86; 
                font-size: large;

            }

            .subHeading{
                color:#494949;
                font-size: small;
            }

            #moreInfo  a {
                color:#015B86;
                text-decoration: none;

            }
            .opacity{
                background-color: #000000;
                position: fixed;
                left:0px;
                top:0px;
                right: 0px;
                opacity:1;
                height:775px;
                z-index: 11;
                
            }
            .close{
                float:right;
                cursor:pointer;
            }
        </style>
    </head>
    <body>
       <div class="opacityDialogBox">
            <div class="opacity"></div>
            <div id="dialogBox">
                <div id="mainContentDialogBox">
                    <header id="header_dialogBox">
                         <div class="close">Close</div>
                        <p class="mainHeading">
                            Lorem ipsum dolor sit amet
                        </p>
                        <p class="subHeading">Sub heading</p>
                        
                    </header>
                    <div id="dialogContent">
                        <div id="col1_dialogBox">
                            <div class="imageInDialogBox">
                                <img class="roundedBorderImage" width="200px" height="200px" src="../src/images/gadgets/100203243933533965_94a81cdf6b9c.jpg" alt="../src/BouncingLoader.gif">
                            </div>
                            <div id="moreInfo"><a href="#">Get More Information</a></div>
                        </div>
                        <div id="col2_dialogBox">
                            <div id="checkBoxSection">
                                <form>
                                    <div><input type="checkbox" name="categories" /><div class="labelsCheckBox">Autos</div></div>
                                    <div><input type="checkbox" name="categories" /><div class="labelsCheckBox">Sports</div></div>
                                    <div><input type="checkbox" name="categories" /><div class="labelsCheckBox">Fashion</div></div>
                                    <div><input type="checkbox" name="categories" /><div class="labelsCheckBox">Food</div></div>
                                </form>
                            </div>
                            <div id="createNewList">
                                <form>
                                    <div id="createCategory"><input type="text" name="categories" placeholder=" + Add New Category" class="noOutline width_100p textBox_Dialog"/></div>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="footer_dialogBox">
                        <div class="rfloat">
                            <div class="thoughtbot">Fancy It</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <?php
        include "includes/header.php";
        include_once '../php/homePagePhp.php';
        
        ?>
        <div class="container">
            <div id="content">
                <div id="space">hidden</div>
                <div class="mainContent" style="position:relative">
                    <?php
                    $arrayImages = getAllFileNamesInDir('/Applications/MAMP/htdocs/ecommerce/src/testImages', 'testImages', 100);

                    $arrayImageWithInfo = array();

                    $arrayImageWithInfo = getImagesInfo($arrayImages);

                    //Test ImagesInRow
                    //$arrayImageWithInfo = sortArray($arrayImageWithInfo);

                    $maxImagesInRow = 3;

                    $rowCount = 2;

                    $maxWidth = 730;

                    getImagesDivForPartner($arrayImageWithInfo, 0, $rowCount, $maxWidth);
                    ?>
                </div>
            </div>

            <?php
            include "includes/footer.php";
            ?>
        </div>

    </body>
</html>
