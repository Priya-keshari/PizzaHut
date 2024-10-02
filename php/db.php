<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "pizza";
$table = "contact";

$conn = mysqli_connect($host,$user,$pass,$db);

if($conn){
    echo "";
}
else{
    echo "db not connected";
}


?>