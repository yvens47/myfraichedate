<?php
class DB {
   public  $db;
   public $host ='localhost';
   public $user = "root";
   public  $password = 'root';
   public $database = "Fraichesdate";
    
	 function __construct(){
	 	$this->db = new mysqli($this->host, $this->user,  $this->password, $this->database)or die("could not connect");
	 	
	 	if(!$this->db)
	 		echo "Unable to Connect to DB";
	 	else 
	 		return $this->db;
	 
	 }
	
	 function result($sql){
	 	$result = $this->db->query($sql)or die("could not connect");
	 	return $result;
	 }
	
}


?>