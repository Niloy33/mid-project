<?php

	session_start();

	if(isset($_POST['submit'])){


		$email 		= $_POST['email'];

		$password 	= $_POST['password'];





		if(empty($email) || empty($password)){
			echo "null submission found!\n";


		}else{

			$connection = mysqli_connect('localhost', 'root', '', 'guardianregistration');
	        $result = mysqli_query($connection, "SELECT COUNT(email) FROM userinfo WHERE email='".$email."' AND password='".$password."'");
	        $data1 = mysqli_fetch_assoc($result);
	        //print_r($data1);echo "<br>";
	        if ($data1['COUNT(email)'] == 1)
	        {
	        	//echo "connection established";
	        	header('location: welcomeGuardian.php');

	        }



		}

	}else{
		echo "invalid request";
		header('location: login.php');
	}


	?>
