<?php
require("connect.php");

session_start();
$account=$_SESSION['account'];

$sql = "SELECT * FROM members WHERE account='$account'";
$result = $connection->query($sql);
$row = $result->fetch();
	
$name = $row['name'];
if(!isset($account)){
	header("location: ../login.php");
}
?>