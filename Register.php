<?php 
require 'includes/user.php';
	$users = new User();	

;?>

<?php
if (isset($_POST['register'])) {
	$email = $_POST['email'];
	$username =  $_POST['username'];
	$password =sha1($_POST['pep']);
	
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			if(!empty($username)){
				if (empty($password)) {
					echo  "password cannot be empty";
					exit();
				}
				else 

				{
					if (strlen($password)>=8){
						// process form
						// process fomr
						
						$users->Registere($username, $email, $password);
					}
					else{
						echo "password must have eight characters or more";
						exit();
					}
				
				}
				
				
			}
		else{
				echo"username cannot be empty";
				exit();
			}
			
			
		
	}
	else {
		echo "Please enter a valid email";
		exit();
	}
	
	
}
?>