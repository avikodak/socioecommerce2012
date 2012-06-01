<!Doctype>
<html>
    <head>
        <style>

            .uparrowdiv, .downarrowdiv, .leftarrowdiv, .rightarrowdiv{
                width:600px;
                min-height:40px; /*min height of DIV should be set to at least 2x the width of the arrow*/
                background: black;
                color:white;
                padding:5px;
                position:relative;
                word-wrap:break-word;
                -moz-border-radius:5px; /*add some nice CSS3 round corners*/
                -webkit-border-radius:5px;
                border-radius:5px;
                margin-bottom:2em;
            }

            .uparrowdiv:after{ /*arrow added to uparrowdiv DIV*/
                content:'';
                display:block;
                position:absolute;
                top:-20px; /*should be set to -border-width x 2 */
                left:30px;
                width:0;
                height:0;
                border-color: transparent transparent black transparent; /*border color should be same as div div background color*/
                border-style: solid;
                border-width: 10px;

            }

            .downarrowdiv:after{ /*arrow added to downarrowdiv DIV*/
                content:'';
                display:block;
                position:absolute;
                top:100%; /*should be set to 100% */
                left:30px;
                width:0;
                height:0;
                border-color: black transparent transparent transparent; /*border color should be same as div div background color*/
                border-style: solid;
                border-width: 10px;
            }

            .leftarrowdiv:after{ /*arrow added to leftarrowdiv DIV*/
                content:'';
                display:block;
                position:absolute;
                top:10px;
                left:-20px; /*should be set to -border-width x 2 */
                width:0;
                height:0;
                border-color: transparent black transparent transparent; /*border color should be same as div div background color*/
                border-style: solid;
                border-width: 10px;
            }

            .rightarrowdiv:after{ /*arrow added to rightarrowdiv DIV*/
                content:'';
                display:block;
                position:absolute;
                top:10px;
                left:100%; /*should be set to 100% */
                width:0;
                height:0;
                border-color: transparent transparent transparent black; /*border color should be same as div div background color*/
                border-style: solid;
                border-width: 10px;
            }

        </style>

    </head>
    <body>
    <div class="uparrowdiv">
        This is a test
    </div>

    <div class="downarrowdiv">
        This is a test
    </div>

    <div class="leftarrowdiv">
        This is a test
    </div>

    <div class="rightarrowdiv">
        This is a test
    </div>


</body>
</html>