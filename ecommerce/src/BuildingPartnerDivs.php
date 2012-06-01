<?php

class BuildingPartnerDivs {

    private $arrayOfImagesWithUrls;
    private $arrayOfImagesWithInfo;

    

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
            $this->$arrayImageWithInfo[$i] = array("url" => $arrayImages[$i], "width" => $width, "height" => $height, "displayed" => "no");
        }
        return $this->$arrayImageWithInfo;
    }

}

?>
