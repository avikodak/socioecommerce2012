<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
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
        </style>

    </head>
    <body>
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
    </body>
</html>
