<!DOCTYPE html>
<html>
    <head>
        
        
        <style>
            #header{
                background-color: #000000;
                margin: 0 auto;
                margin-bottom: 1em;
                height: 44px;
                position: fixed;
                width:100%;
                z-index: 10;

            }
            #navigation{
                width: 50em;
                position: relative;
                margin: 0 auto;
                height: 100%;
                z-index: 1;
            }

            body{
                margin: 0px;
            }
            
            #site-name{
                float:left;
                width:auto;
                height: 100%;
            }
            #fb_root{
                width:auto;
                height: 100%;
                color: white;
                display: inline-block;
            }
          
            #user_dp{
                width: 70px;
                float:left;
            }
            #username{
                float:left;
                width:100px;
            }
            
        </style>
        
    </head>
    <body>
         <header id="header">
            <div id="navigation">
                <div id="site-name" style="color: white"><!--<img src="../images/sample.gif" />-->
                   
                </div>
                <div id="nav_buttons">
                    <?php include 'navigationBar.php';?>
                    
                </div>
            </div>
        </header>
    </body>
</html>
