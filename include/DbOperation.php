<?php
 
class DbOperation
{
    private $con;
 
    function __construct()
    {
        require_once dirname(__FILE__) . '/DbConnect.php';
        $db = new DbConnect();
        $this->con = $db->connect();
    }
 
   
 
    //Method to get all the assignments of a particular student
    public function getTrata($pacientid){
        $stmt = $this->con->prepare("SELECT * FROM prescriptions WHERE person_id=?");
        $stmt->bind_param("i",$pacientid);
        $stmt->execute();
        $assignments = $stmt->get_result();
        $stmt->close();
        return $assignments;
    }
    public function getEstu($pacientid){
        $stmt = $this->con->prepare("SELECT * FROM studies WHERE person_id=?");
        $stmt->bind_param("i",$pacientid);
        $stmt->execute();
        $assignments = $stmt->get_result();
        $stmt->close();
        return $assignments;
    }
       public function getIndi($pacientid){
        $stmt = $this->con->prepare("SELECT * FROM indications WHERE person_id=?");
        $stmt->bind_param("i",$pacientid);
        $stmt->execute();
        $assignments = $stmt->get_result();
        $stmt->close();
        return $assignments;
    }
    
      public function getCita($pacientid){
        $stmt = $this->con->prepare("SELECT * FROM citations WHERE person_id=?");
        $stmt->bind_param("i",$pacientid);
        $stmt->execute();
        $assignments = $stmt->get_result();
        $stmt->close();
        return $assignments;
    }
     public function getDiag($pacientid){
        $stmt = $this->con->prepare("SELECT * FROM diagnostics WHERE person_id=?");
        $stmt->bind_param("i",$pacientid);
        $stmt->execute();
        $assignments = $stmt->get_result();
        $stmt->close();
        return $assignments;
    }
   public function getallAssig(){
        $stmt = $this->con->prepare("SELECT * FROM treatments ");
        $stmt->execute();
        $assignments = $stmt->get_result();
        $stmt->close();
        return $assignments;
    }
    //Method to get student details
    public function getpaciente($id){
        $stmt = $this->con->prepare("SELECT * FROM people WHERE id=?");
        $stmt->bind_param("s",$id);
        $stmt->execute();
        $student = $stmt->get_result();
        $stmt->close();
        return $student;
    }
 
 
    //Checking the student is valid or not by api key
    public function isValid($api_key) {
        $stmt = $this->con->prepare("SELECT id from people WHERE token= ?");
        $stmt->bind_param("s", $api_key);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }
 
    //Method to generate a unique api key every time
    private function generateApiKey(){
        return md5(uniqid(rand(), true));
    }
}