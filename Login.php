<?php

if ($_SESSION)

if($_SERVER["REQUEST_METHOD"] == "POST")

$username = $_POST['username']; $password = $_POST['password']; 
if ($username ==='correct_username'&& $password === 'correct password') {// successful login - redirect to the personal page header ('location:personal_page.php');
 exit ('no location');}
 else{// invalid creditials - display an error message or redirect to a login error page header ('location:login_error.php'); exit('no location');}

print_r($_POST);

