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
            .rectangle-list a{
                position: relative;
                display: block;
                padding: .4em .4em .4em .8em;
                margin: .5em 0 .5em 2.5em;
                background: #ddd;
                color: #444;
                text-decoration: none;
                transition: all .3s ease-out;
            }

            .rectangle-list a:hover{
                background: #eee;
            }       

            .rectangle-list a:before{
                content: counter(li);
                counter-increment: li;
                position: absolute;
                left: -2.5em;
                top: 50%;
                margin-top: -1em;
                background: #fa8072;
                height: 2em;
                width: 2em;
                line-height: 2em;
                text-align: center;
                font-weight: bold;
            }

            .rectangle-list a:after{
                position: absolute;
                content: '';
                border: .5em solid transparent;
                left: -1em;
                top: 50%;
                margin-top: -.5em;
                transition: all .3s ease-out;
            }

            .rectangle-list a:hover:after{
                left: -.5em;
                border-left-color: #fa8072;
            }
            .css-arrow-multicolor {
                border-color: red green blue orange;
                border-style:solid;
                border-width:20px;
                width:0;
                height:0;
            }
            .chat-bubble {
                background-color:#EDEDED;
                border:2px solid #666666;
                font-size:35px;
                line-height:1.3em;
                margin:10px auto;
                padding:10px;
                position:relative;
                text-align:center;
                width:300px;
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
                bottom:-42px;
                left:30px;
            }
            .chat-bubble-arrow {
                border-color: #EDEDED transparent transparent transparent;
                border-style: solid;
                border-width: 10px;
                height:0;
                width:0;
                position:absolute;
                bottom:-19px;
                left:30px;
            }
        </style>
    </head>
    <body>
        <div class="chat-bubble">
            Buongiorno!
            <div class="chat-bubble-arrow-border"></div>
            <div class="chat-bubble-arrow"></div>
        </div>
        <div class="css-arrow-multicolor">

        </div>
        <ol class="rectangle-list">
            <li><a href="">List item</a></li>
            <li><a href="">List item</a></li>
            <li><a href="">List item</a>
                <ol>
                    <li><a href="">List sub item</a></li>
                    <li><a href="">List sub item</a></li>
                    <li><a href="">List sub item</a></li>
                </ol>
            </li>
            <li><a href="">List item</a></li>
            <li><a href="">List item</a></li>
        </ol>
    </body>
</html>
