<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['website'];
$message=$_REQUEST['message'];
$msg="Name:".$name."<br/>Email:".$email."<br/>Phone:".$phone."<br/>Message:".$message;
mail("info@mungipapackersmovers.com","A new enquiry from website",$msg);
header("Location: ".$_SERVER['HTTP_REFERER']);
?>