	<?php
    include_once 'include.php';
	session_start();
    $username = $_POST['username'];
    $user_password = $_POST['password'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email_id = $_POST['email_id'];
	$address = $_POST['address'];
	
    
    

    $sql = "INSERT INTO signup (username,user_password,first_name,last_name,email_id,address) VALUES ('$username', '$user_password', '$first_name', '$last_name', '$email_id', '$address');";
    mysqli_query($conn, $sql);
    header("Location: signin.php?signup=success");
	
?>
