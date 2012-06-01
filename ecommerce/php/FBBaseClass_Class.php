<?php

include 'faceBookDefines.php';
include 'php-sdk/src/facebook.php';



class FBBaseClass {

    public $config;
    public $userId;
    public $facebook;
    public $userProfile;
    public $logoutconfig;
    public $code;
    public $state;
    public function __construct($code,$state) {
        echo $code;
        $this->code=$code;
        $this->state = $state;
        $this->config= array(
            'appId' => "384618301573901",
            'secret' => "f5cacafb3e96ee43cd2b07de413880f5",
        );
        $logoutconfig = array('next' => $LOGIN_PAGE_NO_USER_URL);

        try {
            $this->facebook = new Facebook($this->config);
            $accessToken= $this->facebook->getAccessToken();
            $this->facebook->setAccessToken($access_token);
            $this->userId = $this->facebook->getUser();
            echo $this->userId;
            $userProfile = $this->facebook->api('/me', 'GET');
            echo $userProfile["name"];
        } catch (FacebookApiException $e) {
            error_log($e->getType());
            error_log($e->getMessage());
        }
    }

    public function create()
    {
       
        
    }
    public function getUserObject() {
        try {
            $this->$userId = $this->$facebook->getUser();
        } catch (FacebookApiException $e) {
            error_log($e->getType());
            error_log($e->getMessage());
        }
        return $this->$userId;
    }

    public function getUserProfile() {
        try {
            $this->$userProfile = $this->$facebook->api('/me', 'GET');
        } catch (FacebookApiException $e) {
            error_log($e->getType());
            error_log($e->getMessage());
        }
        return $this->$userProfile;
    }

    public function getUserProfilePic() {
        try {
            $userProfilePicArray = $this->$facebook->api('/me?fields=picture', 'GET');
        } catch (FacebookApiException $e) {
            error_log($e->getType());
            error_log($e->getMessage());
        }
        $userProfilePicUrl = $userProfilePicArray["picture"];
        return $userProfilePicUrl;
    }

    public function getInterests() {
        try {
            $userInterests = $this->$facebook->api('/me/interests', 'GET');
        } catch (FacebookApiException $e) {
            error_log($e->getType());
            error_log($e->getMessage());
        }
        return $userInterests;
    }

    public function getLikes() {
        try {
            $likes = $this->facebook->api("/me/likes", 'GET');
        } catch (FacebookApiException $e) {
            error_log($e->getType());
            error_log($e->getMessage());
        }
        return $likes;
    }

    public function getLogoutUrl() {
        try {
            $logoutUrl = $this->facebook->getLogoutUrl($logoutconfig);
        } catch (FacebookApiException $e) {
            error_log($e->getType());
            error_log($e->getMessage());
        }
        return $logoutUrl;
    }

}

?>
