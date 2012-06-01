<?php

class mysqlBaseClass {
    private $host;
    private $username;
    private $password;
    private $port;
   
    function __construct($host, $username, $password, $port) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;
    }
    
    public function getMysqlConnection(){
        $con = mysql_connect('localhost','root','root');
        if(!$con){
            error_log("Cannot connect to the mysql database");
        }
        return $con;
    }
    
    

}

?>
