<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
.sprite-accept{ background-position: 0 0; width: 16px; height: 16px; } 
.sprite-accept_page{ background-position: 0 -66px; width: 16px; height: 16px; } 
.sprite-add{ background-position: 0 -132px; width: 16px; height: 16px; } 
.sprite-add_page{ background-position: 0 -198px; width: 16px; height: 16px; } 
.sprite-add_to_folder{ background-position: 0 -264px; width: 16px; height: 16px; } 
.sprite-attachment{ background-position: 0 -330px; width: 16px; height: 16px; } 
.sprite-back{ background-position: 0 -396px; width: 16px; height: 16px; } 
.sprite-block{ background-position: 0 -462px; width: 16px; height: 16px; } 
.sprite-calendar{ background-position: 0 -528px; width: 16px; height: 16px; } 
.sprite-calendar_empty{ background-position: 0 -594px; width: 16px; height: 16px; } 
.sprite-chart{ background-position: 0 -660px; width: 16px; height: 16px; } 
.sprite-chart_pie{ background-position: 0 -726px; width: 16px; height: 16px; } 
.sprite-clock{ background-position: 0 -792px; width: 16px; height: 16px; } 
.sprite-comment{ background-position: 0 -858px; width: 16px; height: 16px; } 
.sprite-comments{ background-position: 0 -924px; width: 16px; height: 16px; } 
.sprite-delete{ background-position: 0 -990px; width: 16px; height: 16px; } 
.sprite-delete_folder{ background-position: 0 -1056px; width: 16px; height: 16px; } 
.sprite-delete_page{ background-position: 0 -1122px; width: 16px; height: 16px; } 
.sprite-download{ background-position: 0 -1188px; width: 16px; height: 16px; } 
.sprite-favorite{ background-position: 0 -1254px; width: 16px; height: 16px; } 
.sprite-folder{ background-position: 0 -1320px; width: 16px; height: 16px; } 
.sprite-folder_accept{ background-position: 0 -1386px; width: 16px; height: 16px; } 
.sprite-folder_full{ background-position: 0 -1452px; width: 16px; height: 16px; } 
.sprite-full_page{ background-position: 0 -1518px; width: 16px; height: 16px; } 
.sprite-heart{ background-position: 0 -1584px; width: 16px; height: 16px; } 
.sprite-help{ background-position: 0 -1650px; width: 16px; height: 16px; } 
.sprite-info{ background-position: 0 -1716px; width: 16px; height: 16px; } 
.sprite-lock{ background-position: 0 -1782px; width: 16px; height: 16px; } 
.sprite-mail{ background-position: 0 -1848px; width: 16px; height: 16px; } 
.sprite-mail_lock{ background-position: 0 -1914px; width: 16px; height: 16px; } 
.sprite-mail_receive{ background-position: -66px 0; width: 16px; height: 16px; } 
.sprite-mail_search{ background-position: -66px -66px; width: 16px; height: 16px; } 
.sprite-mail_send{ background-position: -66px -132px; width: 16px; height: 16px; } 
.sprite-new_page{ background-position: -66px -198px; width: 16px; height: 16px; } 
.sprite-next{ background-position: -66px -264px; width: 16px; height: 16px; } 
.sprite-page_process{ background-position: -66px -330px; width: 16px; height: 16px; } 
.sprite-process{ background-position: -66px -396px; width: 16px; height: 16px; } 
.sprite-promotion{ background-position: -66px -462px; width: 16px; height: 16px; } 
.sprite-protection{ background-position: -66px -528px; width: 16px; height: 16px; } 
.sprite-refresh{ background-position: -66px -594px; width: 16px; height: 16px; } 
.sprite-rss{ background-position: -66px -660px; width: 16px; height: 16px; } 
.sprite-search{ background-position: -66px -726px; width: 16px; height: 16px; } 
.sprite-search_page{ background-position: -66px -792px; width: 16px; height: 16px; } 
.sprite-tag_blue{ background-position: -66px -858px; width: 16px; height: 16px; } 
.sprite-tag_green{ background-position: -66px -924px; width: 16px; height: 16px; } 
.sprite-text_page{ background-position: -66px -990px; width: 16px; height: 16px; } 
.sprite-unlock{ background-position: -66px -1056px; width: 16px; height: 16px; } 
.sprite-user{ background-position: -66px -1122px; width: 16px; height: 16px; } 
.sprite-users{ background-position: -66px -1188px; width: 16px; height: 16px; } 
.sprite-warning{ background-position: -66px -1254px; width: 16px; height: 16px; } 

#container li {
    background: url(csg-4fc4ad2d0afaf.png) no-repeat top left;
}





========================

<?php
if($_FILES["path"]["type"] == "image/gif"
||  $_FILES_["path"]["type"] == "image/jpeg"
||  $$_FILES["path"]["type"] == "application/zip"  // problem in specifying the mime type here...
 && $_FILES["path"]["size"] < 100000) { // the limit is around 100 kb
 if($_FILES["path"]["error"] > 0)
   echo "An error has occured!".$_FILES["path"]["error"]."<br/ >";

else
	echo "Upload: " . $_FILES["path"]["name"] . "<br />";
	echo "Type: " . $_FILES["path"]["type"] . "<br />";
	echo "Size: " . ($_FILES["path"]["size"] / 1024) . " Kb<br />";
	echo "Stored in: " . $_FILES["path"]["tmp_name"];

	echo '<script language = "javascript">
		  alert("The file has been successfully uploaded!"); 
		  </script>';

  if (file_exists("upload/" . $_FILES["path"]["name"])) //checks if the file already exists in the directory
	  {
	  echo $_FILES["path"]["name"] . " already exists. ";
	  }
	else
	  {
	  move_uploaded_file($_FILES["path"]["tmp_name"], 
	  "upload/" . $_FILES["path"]["name"]);
	  echo "Stored in: " . "upload/" . $_FILES["path"]["name"];
	  }
}
else // in case the above criteria was not met
  echo '<script language = "javascript">alert("Sorry, you cannot upload this type of file!");</script>';
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>File Upload test</title>
		<style type="text/CSS">
		feildset{width : 20%; color:orange};
		</style>
	</head>
	<body>

	<center>
		<form method = "post" name = "upload" action = "upload.php" enctype="multipart/form-data">
		<feildset>
		<label id = "title" name = "title">Enter the path to the file you want to upload!</label>
		<br>
		<br>
		<label id="fileUpload">Upload:</label>
		<input type = "file" name = "path" id = "path" size = "30">
		<input type = "submit" name = "submit" value = "Upload!">
		</feildset>
		</form>
	  </center>
	</body>
</html>

<?php
$stmt = $dbh->prepare("INSERT INTO REGISTRY (name, value) VALUES (?, ?)");
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $value);

// insert one row
$name = 'one';
$value = 1;
$stmt->execute();

// insert another row with different values
$name = 'two';
$value = 2;
$stmt->execute();
?>


include_once("./JPEG.php");
include_once("./JFIF.php");

$image_header = get_jpeg_header_data("./myImage.jpg");
$image_info = get_JFIF($image_header);

print( "XDensity:" . $image_info['XDensity'] . "<br />");
print( "YDensity:" . $image_info['YDensity'] . "<br />");
