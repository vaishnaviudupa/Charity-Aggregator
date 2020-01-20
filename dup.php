<?php
    include_once 'include.php';
    session_start();
	$username = $_POST['delete'];
	"DELETE FROM `signup` WHERE `signup`.`username` = \'vaishnavi\'";
?>
