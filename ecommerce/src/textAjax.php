<?php

include '../php/homePagePhp.php';

$arrayImages = getAllFileNamesInDir('/Applications/MAMP/htdocs/ecommerce/src/images/t4_100', 'images/t4_100', 10);

$arrayImageWithInfo = array();

$arrayImageWithInfo = getImagesInfo($arrayImages);

$rowCount = 2;

$maxWidth = 730;

getImagesDivForPartner($arrayImageWithInfo, 0, $rowCount, $maxWidth);

?>