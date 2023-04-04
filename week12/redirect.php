<?php 
session_start();

?>

<!DOCTYPE html>
<html>


<body>

<?php

include ("db_connection.php");

$uid=($_POST['userid']);
$pwd=($_POST['password']);


		$sql="SELECT * FROM users_tab where userid='$uid' AND password='$pwd'";
		$result=$connect->query($sql);
		$row = $result->fetch_assoc(); 
 
      if($row['role']==='S')  //Students
      {

        $_SESSION['userid']=$uid;
        $_SESSION['password']=$pwd;
		$_SESSION['role'] = "S";
        header('location: ./student/index.php');
		 
     }
	 elseif($row['role']==='F')  //Faculty
      {

        $_SESSION['userid']=$uid;
        $_SESSION['password']=$pwd;
		$_SESSION['role'] = "F";
         header('location: ./faculty/index.php');
		 
     }
	 elseif($row['role']==='A')  //Admin
      {

        $_SESSION['userid']=$uid;
        $_SESSION['password']=$pwd;
		$_SESSION['role'] = "A";
         header('location: ./admin/index.php');
		 
     }

     
	 else
	 {
		   header('location: login-error.php');
	 }
 

//-------------------------------Login Failed---------------------
     


?>




</html>