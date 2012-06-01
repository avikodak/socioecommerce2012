<!DOCTYPE html>
<?php
$maxImagesInRow = 3;
$maxWidth = 200;
$height = "200";
$arrayImages = array("testImages/avikodak.jpg", "testImages/88758483226201583_96f8bfca32f0.jpg", "testImages/300296455_09b4deb1342d.jpg", "testImages/299905435_323dbc5b0465.jpg", "testImages/98976892241054563_eb3f29bb1593.jpg", "testImages/98908283611383545_8164094d132e.jpg", "testImages/95348374760326651_e2af6c32041b.jpg", "testImages/91910627538247581_814c0fdc18f6.jpg", "testImages/88666549652555933_992ddb5918a8.jpg", "testImages/91675958989296883_685e59b261da.png");

$arrayImageWithInfo = array();


for ($i = 0; $i < count($arrayImages); $i++) {
    if (strpos($arrayImages[$i], ".jpg") || strpos($arrayImages[$i], ".jpg")) {
        $image = imagecreatefromjpeg($arrayImages[$i]);
    }
    if (strpos($arrayImages[$i], ".png")) {
        $image = imagecreatefrompng($arrayImages[$i]);
    }
    $width = imagesx($image);
    $height = imagesy($image);
    $arrayImageWithInfo[$i] = array("url" => $arrayImages[$i], "width" => $width, "height" => $height);
}


print_r($arrayImageWithInfo);

echo "<br/>";

foreach ($arrayImageWithInfo as $c => $key) {
    $sort_width[] = $key['width'];
    $sort_height[] = $key['height'];
}

array_multisort($sort_width,SORT_ASC,$sort_width,SORT_ASC,$arrayImageWithInfo);
print_r($arrayImageWithInfo);
$arrayImagesInRow = array();
?>
<div class="partner">
    <div class="parnterDP"><img src="testImages/2tattie_1335893407.jpg"/></div>

    <?php for ($i = 0; $i < count($arrayImages); $i = $j + 1) : ?><div class="imageRow" style="float:left"><?php
    for ($j = $i; $j - $i < $maxImagesInRow && $j < count($arrayImages); $j++):
            ?>

                <?php
                echo $i;
                $image = imagecreatefromjpeg($arrayImages[$j]);
                $width = imagesx($image);
                $height = imagesy($image);
                echo "width" . $width;
                echo "height" . $height;
                $widthImage = $maxWidth;
                if ($width < $maxWidth) {
                    $widthImage = $width;
                }
                if ($height < $maxheight) {

                    $heightImage = $height;
                }
                ?>
                <div class="image">
                    <img height="<?php echo $heightImage; ?>" src=<?php echo "\"" . $arrayImages[$j] . "\""; ?> width="<?php echo $widthImage ?>" />
                    <div class="imageContent">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    </div>
                </div>


            <?php endfor; ?></div><?php endfor;
        ?>





    ?>
</div>
<!--<div class="partner">
    <div class="parnterDP"><img src="testImages/2tattie_1335893407.jpg"/></div>
    <div class="imageRow" style="float:left">
        <div class="image">
            <img src="testImages/88758483226201583_96f8bfca32f0.jpg"/>
            <div class="imageContent">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            </div>
        </div>
        <div class="image">
            <img src="testImages/300296455_09b4deb1342d.jpg"/>
            <div class="imageContent">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            </div>
        </div>
        <div class="image">
            <img src="testImages/299905435_323dbc5b0465.jpg"/>
            <div class="imageContent">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            </div>
        </div> 
    </div>
    <div class="imageRow">
        <div class="image">
            <img src="testImages/98976892241054563_eb3f29bb1593.jpg"/>
            <div class="imageContent">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            </div>
        </div>
        <div class="image">
            <img src="testImages/98908283611383545_8164094d132e.jpg"/>
            <div class="imageContent">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            </div>
        </div>
        <div class="image">
            <img src="testImages/95348374760326651_e2af6c32041b.jpg"/>
            <div class="imageContent">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            </div>
        </div>
    </div>
</div
<div class="partner">
    <div class="parnterDP"><img src="testImages/grgreengirl_1337066636.jpg"/></div>
    <div class="imageRow">
        <div class="image">
            <img src="testImages/91910627538247581_814c0fdc18f6.jpg"/>
            <div class="imageContent">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            </div>
        </div>
        <div class="image">
            <img src="testImages/88666549652555933_992ddb5918a8.jpg"/>
            <div class="imageContent">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            </div>
        </div>
        <div class="image">
            <img src="testImages/91675958989296883_685e59b261da.jpg"/>
            <div class="imageContent">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            </div>
        </div>
    </div>
</div>-->




<?php

function cmp($a, $b) {
    if ($a[width] == $b[width]) {
        return ($a[height] < $b[height]) ? -1 : 1;
    }
    return ($a[width] < $b[width]) ? -1 : 1;
}

usort($arrayImageWithInfo, "cmp");
?>
