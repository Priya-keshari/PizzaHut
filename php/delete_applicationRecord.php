<?php

require_once('db.php');
error_reporting(0);

$id = $_GET['id'];
$query = "delete from addmission where id = '$id'";

$data = mysqli_query($conn,$query);


    header("Location: application_table.php");
    exit();



?>