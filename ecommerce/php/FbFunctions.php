<?php
include_once 'IncludesPath.php';
include_once $FB_PHP;
include_once $FB_GLOBAL_DEFINES;


/**
 *  Has the related configuration informtaion to the 
 *  get the specific logout url
 *  @return logout url 
 */
function getLogoutUrl() {
    $logoutconfig = array('next' => $LOGIN_PAGE_NO_USER_URL);

    $logoutUrl = $facebook->getLogoutUrl($logoutconfig);
    
    return $logoutUrl;
}

?>
