<?php
require("connect.php");

$account = trim(htmlentities($_POST['account'], ENT_QUOTES));
$password = trim(htmlentities($_POST['password'], ENT_QUOTES));

if($account==NULL || $password==NULL) {
	header("location: ../login.php?errMsg=1");
}else {
	$sql = "SELECT * FROM members WHERE account='$account' AND password='$password'";
	$result = $connection->query($sql);
	$total = $result->rowCount();
	if($total==1) {
		session_start();
		$_SESSION['account']=$account;
		echo "<script>alert('登入成功');window.location.href='../admin/admin.php';</script>";
	}else {
		header("location: ../login.php?errMsg=2");
	}
}
?>