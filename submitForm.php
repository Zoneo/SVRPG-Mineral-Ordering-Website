<?php
	$username = $_POST['username'];
	$mineral = $_POST['mineral'];
        $quantity = $_POST['quantity'];
	$msg = "Username: ".$username."\n"."Mineral: ".$mineral."\n"."Quantity: ".$quantity;
    	mail("/*EMAIL ADDRESS HERE*/", "New Mineral Order", $msg);

	header("Location: http://46.101.18.121/SVRPGOrder");
?>