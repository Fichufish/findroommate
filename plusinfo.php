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
	<h2>登錄資料</h2>
	每筆資料只能輸入一次，修改資料<a href="report.php">請點我</a>
	<br><br>
	<form method="POST" action="admin/addinfo.php">
		<select name="building">
			<option value="1" selected="selected">A</option>
			<option value="2">B</option>
			<option value="3">C</option>
			<option value="4">D</option>
			<option value="5">E</option>
		</select>棟
		<select name="floor">
			<option value="1" selected="selected">1</option>
<?php for($i=2; $i<10; $i++) { ?>		
			<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php } ?>
		</select>樓
		<select name="room">
			<option value="01" selected="selected">01</option>
<?php for($j=2; $j<10; $j++) { ?>		
			<option value="0<?php echo $j;?>">0<?php echo $j;?></option>
<?php }
	  for($k=10; $k<17; $k++) { ?>		
			<option value="<?php echo $k;?>"><?php echo $k;?></option>
<?php } ?>
		</select>號房
		<select name="bed">
			<option value="A" selected="selected">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
		</select>床位
		<br><br>
		姓名: <input type="text" name="name" size="10px" placeholder="飛丘魚">
		<br><br>
		FB連結(選填): <input type="text" name="link" size="30px" placeholder="https://www.facebook.com/fichufish">
		<br><br>
		<input type="submit" value="送出">
	</form>
	
<span style="color:red;">
<?php
	if($_GET['errMsg']==1) {
		echo "姓名欄位不可為空Owo";
	}else if($_GET['errMsg']==2) {
		echo "此床位已被搶先check in惹 (?";
	}else if($_GET['errMsg']==3) {
		echo "登錄成功";
	}
	
?>
</span>	
</div>

		</div>
	</div>
<?php include('templates/_footer.php'); ?>
</div>
</body>
</html>