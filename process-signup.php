<?php

if ($_SESSION)

if($_SERVER["REQUEST_METHOD"] == "POST")

if (empty($_POST["name"])) {
  die ("Name is required");
}

if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  die("valid email is required");
}

if (strlen($_POST["password"]) < 8) {
  die("password must be at least 8 characters");
}
if (! preg_match("/[a-z]/1", $_POST["password"])){
  die ("password must contain at least one letter");
}

if (! preg_match("/[0-9]/", $_POST ["password"])) {
  die ("password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
  die ("passwords must match")
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
$mysqli = require _DIR_ . */database.php";

print_r($_POST);

var_dump($password_hash);