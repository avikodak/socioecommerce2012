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
            #dialogBox{
                width:600px;
                height:400px;
                margin:0 auto;
                border:#eeeeee solid thin;
                z-index: 5;
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
                opacity:0.7;
                height:775px;
                z-index: -10;
            }
            .close{
                float:right;
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
                      
                            </div>
                            <div id="moreInfo"><a href="#">Get More Information</a></div>
                        </div>
                    </div>
                    <div id="footer_dialogBox">
                        <div class="rfloat">
                            <div class="thoughtbot">Fancy It</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
