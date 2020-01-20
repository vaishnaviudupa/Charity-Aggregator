<?php
    include_once 'include.php';
    $username = $_POST['username'];
	$user_password = $_POST['password'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email_id = $_POST['email_id'];
	$address = $_POST['address'];
    
    if(isset($_POST['update'])) {
        $sql = "UPDATE signup SET
        username = '$username', 
        user_password = '$user_password',
		first_name = '$first_name',
		last_name = '$last_name',
        email_id = '$email_id',
        address = '$address' WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        session_start();
        $_SESSION['USER'] = $_POST['username'];
        header("location:charity.php?update=success");        
    } elseif (isset($_POST['delete'])) {
        $sql = "DELETE FROM signup WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        header("location:charity.php");
    } elseif (isset($_POST['logout'])) {
        session_start();
        session_destroy();
        header("location:charity.php?logout=success");        
    }
    
?>
