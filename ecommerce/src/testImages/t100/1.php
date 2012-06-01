<?php

function MoveFilesLessThanTheGivenSize($widthSize, $heightSize) {
    $fileNames = array();
    $dir = '/Applications/MAMP/htdocs/ecommerce/src/testImages/t100';
    $path = "";
    $count = 0;
    if ($handle = opendir($dir)) {
        /* This is the correct way to loop over the directory. */
        while ((false !== ($entry = readdir($handle)))) {

            if (strpos($entry, ".php") || strpos($entry, ".php")) {
                continue;
            }
            if ($entry != ".DS_Store" && $entry != "." && $entry != "..") {
                if (strpos($entry, ".jpeg") || strpos($entry, ".jpeg")) {
                    $image = imagecreatefromjpeg($entry);
                }
                if (strpos($entry, ".gif") || strpos($entry, ".gif")) {
                    $image = imagecreatefromgif($entry);
                }
                if (strpos($entry, ".jpg") || strpos($entry, ".jpg")) {
                    $image = imagecreatefromjpeg($entry);
                }

                if (strpos($entry, ".png")) {
                    $image = imagecreatefrompng($entry);
                }

                $width = imagesx($image);
                $height = imagesy($image);
                echo "SizeOFImage" . $width;
                if ($width >= $widthSize || $height >= $heightSize) {
                    $oldName = $entry;
                    $newName = "../" . $entry;
                    echo "OLD NAME :" . $oldName;
                    echo "NEW NAME :" . $newName;
                    echo "\n";
                    rename($oldName, $newName);
                }
            }
        }
        closedir($handle);
    }
}

function MoveGivenNumberOfFiles($filesToBeMoved,$folder) {
    $fileNames = array();
    $dir = '/Applications/MAMP/htdocs/ecommerce/src/testImages';
    $path = "";
    $count = 0;
    if ($handle = opendir($dir)) {
        /* This is the correct way to loop over the directory. */
        while ((false !== ($entry = readdir($handle))) && $count < $filesToBeMoved) {
            if (strpos($entry, ".php") || strpos($entry, ".php")) {
                continue;
            }
            if ($entry != ".DS_Store" && $entry != "." && $entry != "..") {
                $oldName = $entry;
                $newName = $folder."/" . $entry;
                echo "OLD NAME :" . $oldName . "\t";
                echo "NEW NAME :" . $newName;
                echo "\n";
                rename($oldName, $newName);
                $count++;
            }
        }
    }
    closedir($handle);
}


MoveFilesLessThanTheGivenSize(199,199);

?>
