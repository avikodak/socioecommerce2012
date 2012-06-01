<?php
class FbPerson extends FBBaseClass{
    
    
    
    private $FbBaseClass = "FBBaseClass";
    
    private $userObject;
    private $accessKey;
    private $profileArray;
    private $userId;
    private $name;
    private $firstName;
    private $lastName;
    private $link; //link to fb url
    private $username;
    private $bday;
    private $hometownArray;
    private $hometown;
    private $hometownId;
    private $locationArray;
    private $locationId;
    private $location;
    //more than one company
    private $workArray;
    private $companyId;
    private $company;
    private $companyLocationArray;
    private $companyLocationId;
    private $companyLocation;
    private $designationArray;
    private $designationId;
    private $designation;
    private $startDate;
    private $favTeamsArray;
    private $teamId;
    private $team;
    private $favorite_athletes;
    private $favoriteAthletesId;
    private $favoriteAthletesName;
    private $educationArray;
    private $educationId;
    private $nameOfInstitution;
    private $yearArray;
    private $yearId;
    private $year;
    private $type; //High School
    private $gender;
    private $email;
    private $timeZone;
    private $locale;
    private $verified;
    private $updatedTime;
    private $profilePicture;
    
    public function __construct($accessKey) {
        
        parent::__construct();
        $this->userObject=  $this->getUserObject();
        $this->setAccessKey($accessKey);
        
    }
    public function getProfilePicture() {
       $this->profilePicture ;
       return $this->profilePicture;
    }

    public function setProfilePicture($profilePicture) {
        $this->profilePicture = $profilePicture;
    }

    public function getProfileArray() {
          
        return $this->profileArray;
    }

    public function setProfileArray($profileArray) {
        $this->profileArray = $profileArray;
    }

        public function getAccessKey() {
        return $this->accessKey;
    }

    public function setAccessKey($accessKey) {
        $this->accessKey = $accessKey;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getLink() {
        return $this->link;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getBday() {
        return $this->bday;
    }

    public function setBday($bday) {
        $this->bday = $bday;
    }

    public function getHometownArray() {
        return $this->hometownArray;
    }

    public function setHometownArray($hometownArray) {
        $this->hometownArray = $hometownArray;
    }

    public function getHometown() {
        return $this->hometown;
    }

    public function setHometown($hometown) {
        $this->hometown = $hometown;
    }

    public function getHometownId() {
        return $this->hometownId;
    }

    public function setHometownId($hometownId) {
        $this->hometownId = $hometownId;
    }

    public function getLocationArray() {
        return $this->locationArray;
    }

    public function setLocationArray($locationArray) {
        $this->locationArray = $locationArray;
    }

    public function getLocationId() {
        return $this->locationId;
    }

    public function setLocationId($locationId) {
        $this->locationId = $locationId;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function getWorkArray() {
        return $this->workArray;
    }

    public function setWorkArray($workArray) {
        $this->workArray = $workArray;
    }

    public function getCompanyId() {
        return $this->companyId;
    }

    public function setCompanyId($companyId) {
        $this->companyId = $companyId;
    }

    public function getCompany() {
        return $this->company;
    }

    public function setCompany($company) {
        $this->company = $company;
    }

    public function getCompanyLocationArray() {
        return $this->companyLocationArray;
    }

    public function setCompanyLocationArray($companyLocationArray) {
        $this->companyLocationArray = $companyLocationArray;
    }

    public function getCompanyLocationId() {
        return $this->companyLocationId;
    }

    public function setCompanyLocationId($companyLocationId) {
        $this->companyLocationId = $companyLocationId;
    }

    public function getCompanyLocation() {
        return $this->companyLocation;
    }

    public function setCompanyLocation($companyLocation) {
        $this->companyLocation = $companyLocation;
    }

    public function getDesignationArray() {
        return $this->designationArray;
    }

    public function setDesignationArray($designationArray) {
        $this->designationArray = $designationArray;
    }

    public function getDesignationId() {
        return $this->designationId;
    }

    public function setDesignationId($designationId) {
        $this->designationId = $designationId;
    }

    public function getDesignation() {
        return $this->designation;
    }

    public function setDesignation($designation) {
        $this->designation = $designation;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function setStartDate($startDate) {
        $this->startDate = $startDate;
    }

    public function getFavTeamsArray() {
        return $this->favTeamsArray;
    }

    public function setFavTeamsArray($favTeamsArray) {
        $this->favTeamsArray = $favTeamsArray;
    }

    public function getTeamId() {
        return $this->teamId;
    }

    public function setTeamId($teamId) {
        $this->teamId = $teamId;
    }

    public function getTeam() {
        return $this->team;
    }

    public function setTeam($team) {
        $this->team = $team;
    }

    public function getFavorite_athletes() {
        return $this->favorite_athletes;
    }

    public function setFavorite_athletes($favorite_athletes) {
        $this->favorite_athletes = $favorite_athletes;
    }

    public function getFavoriteAthletesId() {
        return $this->favoriteAthletesId;
    }

    public function setFavoriteAthletesId($favoriteAthletesId) {
        $this->favoriteAthletesId = $favoriteAthletesId;
    }

    public function getFavoriteAthletesName() {
        return $this->favoriteAthletesName;
    }

    public function setFavoriteAthletesName($favoriteAthletesName) {
        $this->favoriteAthletesName = $favoriteAthletesName;
    }

    public function getEducationArray() {
        return $this->educationArray;
    }

    public function setEducationArray($educationArray) {
        $this->educationArray = $educationArray;
    }

    public function getEducationId() {
        return $this->educationId;
    }

    public function setEducationId($educationId) {
        $this->educationId = $educationId;
    }

    public function getNameOfInstitution() {
        return $this->nameOfInstitution;
    }

    public function setNameOfInstitution($nameOfInstitution) {
        $this->nameOfInstitution = $nameOfInstitution;
    }

    public function getYearArray() {
        return $this->yearArray;
    }

    public function setYearArray($yearArray) {
        $this->yearArray = $yearArray;
    }

    public function getYearId() {
        return $this->yearId;
    }

    public function setYearId($yearId) {
        $this->yearId = $yearId;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTimeZone() {
        return $this->timeZone;
    }

    public function setTimeZone($timeZone) {
        $this->timeZone = $timeZone;
    }

    public function getLocale() {
        return $this->locale;
    }

    public function setLocale($locale) {
        $this->locale = $locale;
    }

    public function getVerified() {
        return $this->verified;
    }

    public function setVerified($verified) {
        $this->verified = $verified;
    }

    public function getUpdatedTime() {
        return $this->updatedTime;
    }

    public function setUpdatedTime($updatedTime) {
        $this->updatedTime = $updatedTime;
    }

    public function toArray()
    {
        
    }
    
    
}

?>
