<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bdd_app_aprun";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

