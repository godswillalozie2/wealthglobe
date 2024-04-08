<?php


session_start("generate_coupon");
$_session;

if ($_server["request_method"] === "POST") {
  $email=$_POST["email"];

//Generate a coupon code (Example:8 characters alphanumeric) $couponcode = substr(str_shuffle("0123456789 abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);

//Save the coupon code in a database or send it via email to the user
//You can also add additional logic like inserting into a customers table if you wish to track usage

//Don't Display the coupon code to the user 

Echo "Your coupon code to be sent to you by a vendor";}

?>

