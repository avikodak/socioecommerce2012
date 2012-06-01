<?php
include_once '../php/homePagePhp.php';
$imageInfo = $_POST['imageInfo'];

$category = $_POST['category'];

//$height=445;
//$width="620";
//$url="images/gadgets/100035999593144255_54e2606a511b.jpg";

$imageHeight="445";
$url = $_GET['url'];

list($width, $height, $type, $attr)  = getimagesize($url);


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
        <style>

            .container{
                width:1096px;
            }
            #column1{
                display:inline-block;
                width:70%;
                border-right-color: slategray;
                border-right: slategray solid thin;
                padding:1em;
                margin: 0.5em;
            }
            #column2{
                float: right;
                width:20%;
            }
            .mainContent{
                width:97%;
            }
            #itemImage{
                width:100%;
                margin: 0 auto;
            }
            .commentsList{
                list-style: none;
                padding: 0px;
            }
            #itemRelatedLinks{
                list-style: none;
                padding: 0px;
            }


            .infoSection a{
                font-size:large;
                color:#015b86;
                display: block;

                margin: 3px 0 3px 0;
                height:28px;
            }


            .addFav{
                background: url("../images/sprite_t1.png") no-repeat top left; 
                background-position: 0 -1409px; width: 24px; height: 24px;
                padding-left:28px; 
            } 
            .like{
                background: url("../images/sprite_t1.png") no-repeat top left; 
                background-position: 0 -1776px; width: 24px; height: 24px;
                padding-left:28px; 
            } 
            .reco{
                background: url("../images/sprite_t1.png") no-repeat top left; 
                background-position: -74px -1554px; width: 24px; height: 24px;
                padding-left:28px; 
            }

            .call{
                background: url("../images/sprite_t1.png") no-repeat top left;
                background-position: 0 -1041px; width: 24px; height: 24px;
                padding-left:28px; 
            }

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


            /*start Comment Section */
            .commentslist{
                list-style: none;
                position: relative;
                padding-left: 50px;
            }
            .profileInfo,.comment{
                text-align: left;
            }
            .profileInfo{
                color: #015B86;

            }

            .profilePic{
                position: absolute;
                left: -50px;
                top:15px;

            }

            .chat-bubble {
                background-color:#EDEDED;
                border:2px solid #666666;
                margin-bottom: 1em;
                min-height: 20px;
                height: auto;
                padding:10px;
                position:relative;
                text-align:center;
                width:400px;
                -moz-border-radius:10px;
                -webkit-border-radius:10px;
                -moz-box-shadow:0 0 5px #888888;
                -webkit-box-shadow:0 0 5px #888888;
            }
            .chat-bubble-arrow-border {
                border-color: transparent #666666 transparent transparent;
                border-style: solid;
                border-width: 10px;
                height:0;
                width:0;
                position:absolute;
                top:19px;
                left:-22px;
            }
            .chat-bubble-arrow {
                border-color: transparent #EDEDED transparent transparent;
                border-style: solid;
                border-width: 10px;

                height:0;
                width:0;
                position:absolute;
                top:19px;
                left:-19px;
            }

            .chat-bubble p.username{
                margin-bottom: 5px;
            }
            .chat-bubble p{
                margin: 0px;
                word-wrap:break-word;
            }
            /*End Comment Section */
            
            .mainContent{
               position: relative;
               
            }
            
            .centerImage{
                margin: 0 auto;
            }
           
        </style>
    </head>
    <body>
        <?php
        include "includes/header.php";
        ?>
        <div class="container">
            <div id="content">
                <div id="space">hidden</div>
                <div class="mainContent" style="position:relative">

                    <div id="column1">
                        <div id="itemImage" style="height:<?php echo $height . "px" ?>">
                            <div class="centerImage" style="width:<?php echo $width . "px" ?>"><img src="<?php echo $url ?>" width="<?php echo $width . "px" ?>" height="<?php echo $height . "px" ?>" /></div>
                        </div>
                        <div id="commentsSection">
                            <ul class="commentslist">
                                <li class="chat-bubble">
                                    <div class="profileInfo"><span class="profilePic"><img src="../src/images/thumbnails/avikodak.jpg" width="30px" height="30px"/></span><p class="username">Username</p></div>
                                    <div class="comment"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></div>
                                    <div class="chat-bubble-arrow-border"></div>
                                    <div class="chat-bubble-arrow"></div>
                                </li>
                                <li class="chat-bubble">
                                    <div class="profileInfo"><span class="profilePic"><img src="../src/images/thumbnails/avikodak.jpg" width="30px" height="30px"/></span><p class="username">Username</p></div>
                                    <div class="comment"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></div>
                                    <div class="chat-bubble-arrow-border"></div>
                                    <div class="chat-bubble-arrow"></div>
                                </li>
                                <li class="chat-bubble">
                                    <div class="profileInfo"><span class="profilePic"><img src="../src/images/thumbnails/avikodak.jpg" width="30px" height="30px"/></span><p class="username">Username</p></div>
                                    <div class="comment"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></div>
                                    <div class="chat-bubble-arrow-border"></div>
                                    <div class="chat-bubble-arrow"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="trendingItems">

                        </div>
                        <div class="relatedContents">

                        </div>
                    </div>
                    <div id="column2">
                        <div class="infoSection">
                            <ul id="itemRelatedLinks">
                                <li><a class="itemlinks"><span class="addFav"></span>Add To Favourites</a></li>
                                <li><a class="itemlinks"><span class="like"></span>Like</a></li>    
                                <li><a class="itemlinks"><span class="reco"></span>Recommend Someone</a></li>    
                            </ul>
                        </div>
                        <div class="userInfo">
                            <a class="getInfoForItem thoughtbot"><span class="call"></span>Ask Seller To Contact Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
