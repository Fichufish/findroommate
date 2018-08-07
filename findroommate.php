<?php
include("connection/connect.php");
?>
<!doctype html>
<html>
<head>
<?php include('templates/_head.php'); ?>
</head>

<body>
<div id="wrapper">
	<div id="top_fixed">
<?php include('templates/_nav.php'); ?>
	</div>
	<div id="content">
		<div id="page">

<div class="box_1">
	<h2>找室友</h2>
	<form method="POST" action="">
		房號: <input type="text" name="room" maxlength="4" placeholder="ex: 1906">
		<input type="submit" value="　" style="background:url('images/search.png');">
	</form>
	<br>
<?php
if((trim(htmlentities($_POST['room'], ENT_QUOTES)))!=NULL) {
	$room = $_POST['room'];
	if(is_numeric($room)) {
		$sql = "SELECT * FROM roommates WHERE room LIKE ".$room." ORDER BY bed ASC";
		$result = $connection->query($sql);
		$total = $result->rowCount();
		if($total > 0) {
?>
	<table class="roomtable">
<?php
			while($rows=$result->fetch()) {
?>		<tr>
			<td><?php echo $rows['room']?></td>
			<td><?php echo $rows['bed']?>床位</td>
			<td><a href="<?php echo $rows['link']?>" target="_blank"><?php echo $rows['name']?></a></td>
		</tr>
<?php
			}
?>
		</table>
		<p><a href="report.php">資料有誤?點我回報</a></p>
<?php
		}else {
			echo "同學還沒check in~也可能是打錯房號啦ˊˇˋ";
		}
	}else {
		echo "同學還沒check in~也可能是打錯房號啦ˊˇˋ";
	}
}
?>
</div>

		</div>
	</div>
<?php include('templates/_footer.php'); ?>
</div>
</body>
</html>