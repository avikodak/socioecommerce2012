<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            .mainDialogContent{
                border: #000000 solid thin;
                display: inline-block;
            } 
            .imageInDialog{
                display: inline-block;
                border: #000000 solid thin;
            }
            .contentRelatedToImage{
                display:inline-block;
                width :auto;
                border: #000000 solid thin;
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
        </style>
    </head>
    <body>
        <div id="dialog-form" title="Create new user">
            <div class="mainDialogContent">
                <div>
                    <div class="imageInDialog">
                        sample
                    </div>
                    <div class="contentRelatedToImage">
                        <div>
                            <ul class="imageInfo">
                                <li><a href="#">Add to my favourites</a></li>
                                <li><a href="#">Recommend Someone</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="sellerContact">
                                <li><a href="#">Ask Seller to contact back</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div id="extraInformation">
                    <div class="prevComments">

                    </div>
                    <div id="commentSection">
                        <input type="text" placeholder="Enter Your Comment Here" />
                    </div>
                    <div id="recommendInfo">
                        <!-- Infinite ScrollView -->
                    </div>
                    <div id="recentlyAdded"> 
                        <!-- infinite ScrollView -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
