<?php
require("../connection/connect.php");
    $building = $_POST['building'];
    $floor = $_POST['floor'];
    $room = $_POST['room'];
    $bed = $_POST['bed'];
    $name = strip_tags($_POST['name']);
    $link = strip_tags($_POST['link']);
	
	$str = $building.$floor.$room;
	$num = intval($str);

	if($name==NULL){
		header("location: ../plusinfo.php?errMsg=1");
	}else {
		$sql = "SELECT * FROM roommates WHERE room='$num' AND bed='$bed'";
		$result = $connection->query($sql);
		$total = $result->rowCount();
		if($total>0) {
			header("location: ../plusinfo.php?errMsg=2");
		}else {
			$connection->exec("INSERT INTO roommates values(NULL,'$num','$bed','$name','$link')");
			header("location: ../plusinfo.php?errMsg=3");
		}
	}
?>