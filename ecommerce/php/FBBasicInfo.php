<?php
include_once 'IncludesPath.php';
include_once 'mysqlBaseClass.php';
include 'mysqlDBInfo.php';

class FBBasicInfo {

    private $profileArray;
    private $facebookUserId;
    private $name;
    private $firstName;
    private $lastName;
    private $link; //link to fb url
    private $username;
    private $bday;
    private $gender;
    private $email;
    private $timeZone;
    private $locale;
    private $verified;
    private $profilePicUrl;

    function __construct($profileArray, $userProfilePicArray) {
        $this->profileArray = $profileArray;
        $this->profilePicUrl = $userProfilePicArray["picture"];
        $this->init();
        $this->storeProfileInfoIntoDb();
    }

    private function init() {
        $this->facebookUserId = $this->profileArray["id"]?$this->profileArray["id"] : "NA";
        $this->name = isset($this->profileArray["name"]) ? $this->profileArray["name"] : "NA";
        $this->firstName = isset($this->profileArray["first_name"]) ? $this->profileArray["first_name"] : "NA";
        $this->lastName = isset($this->profileArray["last_name"]) ? $this->profileArray["last_name"] : "NA";
        $this->email = isset($this->profileArray["link"]) ? $this->profileArray["link"] : "NA";
        $this->gender = isset($this->profileArray["gender"]) ? $this->profileArray["gender"] : "NA";
        $this->bday = isset($this->profileArray["birthday"]) ? $this->profileArray["birthday"] : "NA";
        $this->link = isset($this->profileArray["link"]) ? $this->profileArray["link"] : "NA";
        $this->locale = isset($this->profileArray["locale"]) ? $this->profileArray["locale"] : "NA";
        $this->timeZone = isset($this->profileArray["timezone"]) ? $this->profileArray["timezone"] : "NA";
        $this->verified = isset($this->profileArray["verified"]) ? $this->profileArray["verified"] : "NA";
        $this->username = isset($this->profileArray["username"]) ? $this->profileArray["username"] : "NA";
        error_log("FaceBookUserIdInit ".$this->facebookUserId);
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getName() {
        return $this->name;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getLink() {
        return $this->link;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getBday() {
        return $this->bday;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTimeZone() {
        return $this->timeZone;
    }

    public function getLocale() {
        return $this->locale;
    }

    public function getVerified() {
        return $this->verified;
    }

    private function storeProfileInfoIntoDb() {
        $userStatus = $this->checkUserStatus($this->facebookUserId);
        error_log("USER STATUS " .$userStatus);
        if (!$userStatus) {
            $insertProfileInfo = "INSERT INTO "
                    . "userDetails" .
                    "(name,firstname,lastname,username,facebookuserid,locale,email,verified,type,facebookurl,bday,timezone,profilepicurl)
                             VALUES('$this->name','$this->firstName','$this->lastName','$this->username','$this->facebookUserId','$this->locale','$this->email','$this->verified','user','$this->link','$this->bday','$this->timeZone','$this->profilePicUrl')   
                            ";
            error_log($insertProfileInfo);
            self::executeSqlStatement($insertProfileInfo);  
            error_log("User $this->name  records have been inserted");
        }
    }

    public static function executeSqlStatement($sql) {
        $mysqlObject = new mysqlBaseClass("localhost", "localhost", "", "");
        if (!$mysqlObject) {
            error_log("Unsuccessful in establishing connection");
        }
        $con = $mysqlObject->getMysqlConnection();
        $db = mysql_selectdb("socioecommerce");
        $result = mysql_query($sql, $con);
        if (!$result) {
            error_log("Was not able to insert basic profile information into the table");
        }
        return $result;
    }

    private function checkUserStatus($facebookuserid) {
        error_log("FaceBookUserId ".$facebookuserid);
        $sqlCheckUserStatustatement = "SELECT 1 FROM userDetails WHERE facebookuserid=$facebookuserid";
        $result = self::executeSqlStatement($sqlCheckUserStatustatement);
        error_log("Total Number Of Rows".  mysql_num_rows($result));
        if (mysql_num_rows($result)) {
            return 1;
        } else {
            return 0;
        }
    }

}

?>

