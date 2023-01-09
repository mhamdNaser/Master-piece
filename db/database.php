<?php 
require_once('config.php');
/**
 * this is mysql class documnetation 
*/
class connection{

    public $conn = "";
    public function __construct(){
        $this->openConnection();
    }
    public function openConnection(){
        $conn = new mysqli(SERVER,USER,PASS,DBNAME);
        if($conn){
            return $this->conn = $conn;
        }else{
            die('cannot connect');
        }
    }

    
    public function performQuery($query){
        $result = mysqli_query($this->conn, $query); 
        return $result;
    }

    public function fetchAll($result){
        $row = array();
        while($rec = mysqli_fetch_assoc($result)){
            $row[] = $rec;
        }
        return $row;
    }
}