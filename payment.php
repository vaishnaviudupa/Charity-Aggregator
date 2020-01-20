<?php
    include_once 'include.php';
	echo 'vaish';
	$username = $_POST['owner'];
    $amt = $_POST['amt'];
	$card_no = $_POST['card_no'];
    /*$user_password = $_POST['password'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email_id = $_POST['email_id'];
	$address = $_POST['address'];*/
    
    $sql = "INSERT INTO pays (amt, card_no ,username) VALUES ('$amt', '$card_no', '$username');";
    mysqli_query($conn, $sql);
    header("Location: charity.php?signup=success");


/*$sql = "INSERT INTO pays (amt,user_password,first_name,last_name,email_id,address) VALUES ('$amt', '$user_password', '$first_name', '$last_name', '$email_id', '$address');";
    mysqli_query($conn, $sql);
    header("Location: signin.php?signup=success");
?>*/
?>
