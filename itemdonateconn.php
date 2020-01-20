<?php
    include_once 'include.php';
	
    $username = $_POST['username'];
	$street_address = $_POST['street_address'];
	$p_no = $_POST['phoneNumber'];
	$categories = $_POST['itemname'];
	$quantity = $_POST['quantity'];
	$description = $_POST['description'];
	$name = $_POST['organization'];
	
	$sql = "INSERT INTO donate_item (username,street_address,p_no,categories,quantity,description,name) VALUES ('$username', '$street_address', '$p_no', '$categories', '$quantity', '$description', '$name');";
    mysqli_query($conn, $sql);
    header("Location: charity.php?details=success");
?>
