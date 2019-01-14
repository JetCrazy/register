<?php
session_start();
$current_url = $_SERVER['SERVER_NAME'] . '' . $_SERVER['REQUEST_URI'];
include("include/user.php"); 
?>

<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, inital-scale=1">
  <title>Title Page</title>

  <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
</head>

<body>
    <?php
    if (strpos($current_url, "activate.php") === false) {
         include("include/nav.php");
    }
 ?>