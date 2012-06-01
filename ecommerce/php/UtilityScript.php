<?php

function MoveFilesLessThanTheGivenSize($widthSize) {
    $fileNames = array();
    $dir = '/Applications/MAMP/htdocs/ecommerce/src/testImages';
    if ($handle = opendir($dir)) {
        /* This is the correct way to loop over the directory. */
        while (false !== ($entry = readdir($handle))) {
            
            if ($entry != ".DS_Store" && $entry != "." && $entry != "..") {
                if (strpos($entry, ".jpeg") || strpos($entry, ".jpeg")) {
                    $image = imagecreatefromjpeg("../src/testImages/".$entry);
                }
                if (strpos($entry, ".gif") || strpos($entry, ".gif")) {
                    $image = imagecreatefromgif("../src/testImages/".$entry);
                }
                if (strpos($entry, ".jpg") || strpos($entry, ".jpg")) {
                    $image = imagecreatefromjpeg("../src/testImages/".$entry);
                }

                if (strpos($entry, ".png")) {
                    $image = imagecreatefrompng("../src/testImages/".$entry);
                }
                
                    $width = imagesx($image);
                    echo "SizeOFImage".$width;
                    if ($widthSize < $width) {
                        $oldName =   $entry;
                        $newName = "thumbnails/" . $entry;
                        echo "OLD NAME :" . $oldName;
                        echo "NEW NAME :" . $newName;
                        echo "\n";
                        //rename($oldName,$newName);
                    }
                
            }
        }
        closedir($handle);
    }
    return $fileNames;
}

MoveFilesLessThanTheGivenSize(199);
?>
