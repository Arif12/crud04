<?php
$presentaddress= $_POST['paddress'];
$permanentaddress=$_POST['peaddress'];

$link= mysqli_connect("localhost","root","lict@2","contact");

$query = "INSERT INTO `contact`.`users` (
`id` ,
`present_address`,`permanent_address`
)
VALUES ('NULL','$presentaddress','$permanentaddress');";

mysqli_query($link, $query);
header('location:list.php');
 ?>
<a href="create.html"> Another entry </a>