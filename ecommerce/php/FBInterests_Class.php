<?php
/**
 * Description of FBInterests_Class
 *
 * @author kodakand
 */
class FBInterests_Class {

    
    private $dataArray;
    private $nextUrl;
    private $previousUrl;
    
    
    public function __construct($dataArray){
        $this->setDataArray($dataArray);
    }
    
    public function getDataArray() {
        
        return $this->dataArray;
    }

    public function setDataArray($dataArray) {
        $this->dataArray = $dataArray;
    }

    public function getNextUrl() {
        return $this->nextUrl;
    }

    public function setNextUrl($nextUrl) {
        $this->nextUrl = $nextUrl;
    }

    public function getPreviousUrl() {
        return $this->previousUrl;
    }

    public function setPreviousUrl($previousUrl) {
        $this->previousUrl = $previousUrl;
    }

    function getAllInterests() {
       
       $array = array_values($this->dataArray["data"]);
       
       $nextUrl = $this->dataArray["paging"]["next"];
       
       for($i=0;$i<count($array);$i++){
            echo $array[$i]["name"] ."::". $array[$i]["category"]."::".$array[$i]["id"]."::".$array[$i]["created_time"];
            echo "<br/>";
        }
        return $interestBasedOnCategory;
    }

    /**
     * @param type $categories
     * @return type interests array
     */
    function interestBasedOnCategory($categories) {
        $keys=  array_key_exists($categories, $search);
        
    }

}
?>
