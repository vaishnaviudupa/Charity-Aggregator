<?php
    include_once 'include.php';
	//echo 'vaish';
    session_start();
	//echo 'vaishnavi';
    $username = $_POST['username'];
    $user_password = $_POST['user_password'];
	//echo 'HI';
	$sql = "SELECT username, user_password FROM signup WHERE username = '$username' AND user_password = '$user_password'";
    //echo 'Ehdnd';
	$result = mysqli_query($conn, $sql);
    echo 'hello';
	if(mysqli_fetch_assoc($result)) {
		//echo 'rachna';
		//$_SESSION['USER'] = $_POST['username'];
		//echo 'laksh';
		header("location:charity.php?username=".$username);
		//echo 'ji';	
    }
	else {
        header("location:signin.php?Invalid= Please Enter Correct Username and Password");
    }
	
?>
