<?php

function getAllFileNamesInDir($directoryName, $parentDir, $count) {
    $fileNames = array();
    $marker = 0;
    if ($handle = opendir($directoryName)) {
        /* This is the correct way to loop over the directory. */
        while (false !== ($entry = readdir($handle)) && $marker < $count) {

            if (strpos($entry, ".php") || $entry == "thumbnails" || is_dir($entry)) {
                continue;
            }
            if ($entry != ".DS_Store" && $entry != "." && $entry != "..") {

                $fileNames[] = $parentDir . "/" . $entry;
            }
            $marker++;
        }
        closedir($handle);
    }
    return $fileNames;
}

function getImagesInfo($arrayImages) {

    for ($i = 0; $i < count($arrayImages); $i++) {

        if (strpos($arrayImages[$i], ".jpeg") || strpos($arrayImages[$i], ".jpeg")) {

            $image = imagecreatefromjpeg($arrayImages[$i]);
        }
        if (strpos($arrayImages[$i], ".gif") || strpos($arrayImages[$i], ".gif")) {
            $image = imagecreatefromgif($arrayImages[$i]);
        }
        if (strpos($arrayImages[$i], ".jpg") || strpos($arrayImages[$i], ".jpg")) {

            $image = imagecreatefromjpeg($arrayImages[$i]);
        }

        if (strpos($arrayImages[$i], ".png")) {
            $image = imagecreatefrompng($arrayImages[$i]);
        }

        $width = imagesx($image);
        $height = imagesy($image);
        $arrayImageWithInfo[$i] = array("url" => $arrayImages[$i], "width" => $width, "height" => $height, "displayed" => "no");
    }
    return $arrayImageWithInfo;
}

function sortArray($arrayImageWithInfo) {
    foreach ($arrayImageWithInfo as $c => $key) {
        $sort_width[] = $key['width'];
        $sort_height[] = $key['height'];
    }
    array_multisort($sort_width, SORT_ASC, $sort_height, SORT_DESC, $arrayImageWithInfo);
    return $arrayImageWithInfo;
}

function getImageCountInARow($arrayImageWithInfo, $maxImagesInRow, $marker, $maxWidth) {
    $CountHeight = array();
    $urlArray = array();
    $count = 0;
    $width = 0;
    $emValue = 16;
    $maxHeight = 0;

    for ($i = $marker; $i < count($arrayImageWithInfo); $i++) {
        if (!strcasecmp($arrayImageWithInfo[$i]["displayed"], "no")) {
            if ($width + $arrayImageWithInfo[$i]["width"] + $emValue >= $maxWidth) {
                if ($width < (0.6 * $maxWidth)) {
                    continue;
                }
                $CountHeight[] = array("arrayImageWithInfo" => $arrayImageWithInfo, "count" => $count, "maxHeight" => $maxHeight, "totalWidth" => $width, "imagesInfo" => $imagesInfo);
                return $CountHeight;
            }
            $imagesInfo[] = array("url" => $arrayImageWithInfo[$i]["url"], "width" => $arrayImageWithInfo[$i]["width"], "height" => $arrayImageWithInfo[$i]["height"]);

            $arrayImageWithInfo[$i]["displayed"] = "yes";
            $arrayImageWithInfo[$i]["displayed"] = "yes";
            $width = $width + $arrayImageWithInfo[$i]["width"] + $emValue;
            if ($maxHeight < $arrayImageWithInfo[$i]["height"]) {
                $maxHeight = $arrayImageWithInfo[$i]["height"];
            }

            $count++;
            if ($i - $marker > $maxImagesInRow) {
                $CountHeight[] = array("arrayImageWithInfo" => $arrayImageWithInfo, "count" => $count, "maxHeight" => $maxHeight, "totalWidth" => $width, "imagesInfo" => $imagesInfo);
                return $CountHeight;
            }
        }
    }
    $CountHeight[] = array("arrayImageWithInfo" => $arrayImageWithInfo, "count" => $count, "maxHeight" => $maxHeight, "totalWidth" => $width, "imagesInfo" => $imagesInfo);
    return $CountHeight;
}

function getNextDisplayNoMarker($arrayImageWithInfo, $i) {

    for ($j = $i; $j < count($arrayImageWithInfo); $j++) {

        if (!strcasecmp($arrayImageWithInfo[$j]["displayed"], "no")) {
            return $j;
        }
    }
    return -1;
}

function getImagesDivForPartner($arrayImageWithInfo, $startCount, $rowCount, $maxWidth) {


    echo '<div class="partner">';
    $totalImages = 0;
    $maxImagesInRow = 2;
    $emValue = 16;

    for ($i = $startCount; $i < count($arrayImageWithInfo) && $i != -1;) {
        //echo "I value " . $i . "<br/>";
        $RowCountAndMaxHeightArray = getImageCountInARow($arrayImageWithInfo, 3, $i, $maxWidth);

        $arrayImageWithInfo = $RowCountAndMaxHeightArray[0]["arrayImageWithInfo"];
        $rowCount = $RowCountAndMaxHeightArray[0]["count"];
        $totalImages+=$rowCount;
        if ($rowCount == 0) {
            $i = getNextDisplayNoMarker($arrayImageWithInfo, $i + 1);
            continue;
        }
        $maxHeight = $RowCountAndMaxHeightArray[0]["maxHeight"];
        $totalWidth = $RowCountAndMaxHeightArray[0]["totalWidth"];
        $imagesInfo = $RowCountAndMaxHeightArray[0]["imagesInfo"];

        echo '<div class="imageRow">';
        echo '<div class="centerImages" style="width:' . $totalWidth . 'px">';
        for ($j = 0; $j < $rowCount; $j++) {
            //$width = ($maxWidth - (($rowCount*$emValue)/$rowCount));

            $imageUrl = $imagesInfo[$j]["url"];
            $imageHeight = $imagesInfo[$j]["height"];
            $height = $maxHeight;
            if ($imageHeight < $maxHeight) {
                $height = $imageHeight;
            }


            createDivForImage($imagesInfo[$j]["width"], $height, $maxHeight, $emValue, $imageUrl);
        }
        echo '</div>';
        echo '</div>';

        $i = getNextDisplayNoMarker($arrayImageWithInfo, $i + 1);
    }
    echo '</div>';
  //  echo "<br/>Total Images Displayed" . $totalImages;
}
?>
<?php

function createDivForImage($width, $height, $maxHeight, $emValue, $url) { ?>
    <div class="image" style="width:<?php echo $width . "px" ?>;height:<?php echo $maxHeight + (2 * $emValue) . "px" ?>">
        <div class="imageInfo imageModalBox" style="width:<?php echo $width . "px" ?>;height:<?php echo $maxHeight + (2 * $emValue) . "px" ?>" >
            <input type="hidden" name="uploadedBy" value="test"/>
            
            
        </div>
        <div class="imageSelector <?php echo "MaxHeight_" . $maxHeight ?>" style="z-index:-1;background-color: #FFFFFF;display:inline-block;height:<?php echo $maxHeight . "px" ?>;width:<?php echo $width . "px" ?>">
            <img alt="../src/BouncingLoader.gif" class="Imgcenter roundedBorderImage" src="<?php echo $url ?>" width="<?php echo $width . 'px' ?>" height="<?php echo $height . 'px' ?>"/>
        </div>
     <!--   <div class="imageContent" style="width:<?php //$width ."px"?>"> -->
        <div class="imageContent" >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
        </div>
       <div class="getInfoForPic thoughtbot" style="left:<? echo ($width-(2 * $emValue))/2 ."px"?>;top:<?php echo ($maxHeight-(2 * $emValue))/2 ."px" ?>">GetInfo</div>
    </div>

<?php } ?>