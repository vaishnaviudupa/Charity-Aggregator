<?php
    include_once 'include.php';
	$email_id = $_POST['emailid'];
    $username = $_POST['username'];
	$d_address = $_POST['street_address'];
	$city = $_POST['cityname'];
	$phone_no = $_POST['phoneNumber'];
	$org_name = $_POST['organization'];
	$feedback = $_POST['suggestionsIf'];
    
    $sql = "INSERT INTO donor_details (email_id,username,d_address,city,phone_no,org_name,feedback) VALUES ('$email_id', '$username', '$d_address', '$city', '$phone_no', '$org_name', '$feedback');";
    mysqli_query($conn, $sql);
    header("Location: index.html?");
?>
