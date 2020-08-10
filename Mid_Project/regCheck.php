<?php
session_start();

if (isset($_POST['submit'])){

$guardianName = $_POST['guardianName'];
$email       = $_POST['email'];
// $address = $_POST['address'];
$phoneNumber = $_POST['phoneNumber'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if(empty($guardianName) || empty($email) || empty($address) || empty($phoneNumber) || empty($password) || empty($confirmPassword)){
  echo "null submission!\n";
  if($password != $confirmPassword)
  {
    echo "password did not match!\n";
  }
  if (!is_numeric($phoneNumber)) {
    echo "invalid number!\n";

  }
  // if ((!strops($email, '@')) ||  ((!strops($email, '.'))){
  //   // code...
  // }

}
else {
  $connection = mysqli_connect('127.0.0.1:3306', 'root', '', 'guardianregistration');
  $result = mysqli_query($connection, "INSERT INTO userinfo (guardianName, email, address, phoneNumber, password, confirmPassword) VALUES ('".$guardianName."', '".$email."', '".$address."', '".$phoneNumber."', '".$password."', '".$confirmPassword."' )");

echo "successful connection";
 header('location: login.php');
}




// else{
//   echo "invalid";
//   header('location:registration.php');
// }

}



?>
