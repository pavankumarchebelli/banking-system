<?php 
$server="localhost:3309";
$username="root";
$password="";
$db="bankingsystem";
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("connection to this database failed due to " .mysqli_connect_error());
}
?>
