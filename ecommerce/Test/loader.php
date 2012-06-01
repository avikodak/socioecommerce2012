<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script><html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#txt").ajaxStart(function(){
    $("#wait").css("display","block");
  });
  $("#txt").ajaxComplete(function(){
    $("#wait").css("display","none");
  });
  $("button").click(function(){
    $("#txt").load("demo_ajax_load.asp");
  });
});
</script>
</head>
<body>

<div id="txt"><h2>Let AJAX change this text</h2></div>
<button>Change Content</button>
<div id="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='demo_wait.gif' width="64" height="64" /><br />Loading..</div>
</body>
</html></script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
