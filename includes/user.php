<?php
//error_reporting(E_ALL);
require "db.php";

class User extends DB {
	
	function __construct(){
		parent::__construct();
		
	}
	
// user registration
	 
	function Registere($username, $email,$password) {
		// escape string
		mysqli_real_escape_string($this->db, $username);
		mysqli_real_escape_string($this->db, $password);
		mysqli_real_escape_string($this->db, $email);
		
		$sql ="select * from user  where username = '$username' and password ='$password'";
		$date = date('y-m-d');

		$query = $this->result($sql);
		
		if($query->num_rows >0){
			echo "{$username}"." is already taken";
		}
		else{
			// registered user to data base
			$sql = "insert into user values(null ,'$username', '$email','$password','$date')";
			$insert = $this->result($sql);
			if ($insert) {
				// emailuser credentials

				$Name = "Da Duder"; //senders name
				$email = "yvens47@gmail.com"; //senders e-mail adress
				$recipient = $email; //recipient
				$mail_body = "Thank you for registering with Below is your username and password <br>".
				'username'. $username ."<br>". " Password: ".$password; //mail body
				$subject = "Subject for reviever"; //subject
				$header = "From: Jean ". " <" . $email . ">\r\n"; //optional headerfields
				
				if(mail($recipient, $subject, $mail_body, $header)){
					
					 //mail command :)
					echo "Registered Successfully";
				}
				
				
			}
		}	
		
		
}
function login($username, $password) {
	
}


}




?>