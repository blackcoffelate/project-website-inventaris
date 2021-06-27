<?php

$host   = "localhost";
$uname  = "root";
$pswd   = "";
$dbname = "p_tekno_inventaris";

$conn = new mysqli($host, $uname, $pswd, $dbname) or die("Failed to connect database".$conn->error);

?>
