<<<<<<< HEAD
<?php
require("../connection/connect.php");
    $building = $_POST['building'];
    $floor = $_POST['floor'];
    $room = $_POST['room'];
    $bed = $_POST['bed'];
    $name = trim(htmlentities($_POST['name'], ENT_QUOTES);
    $link = trim(htmlentities($_POST['link'], ENT_QUOTES);
	
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
=======
<?php
require("../connection/connect.php");
    $building = $_POST['building'];
    $floor = $_POST['floor'];
    $room = $_POST['room'];
    $bed = $_POST['bed'];
    $name = $_POST['name'];
    $link = $_POST['link'];
	
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
>>>>>>> 22dad2852579d21e87c9ff74f25f760422b935b7
?>