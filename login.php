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
	<h2>管理登入</h2>
	<form method="POST" action="connection/logincheck.php">
		帳號: <input type="text" name="account">
		<br><br>
		密碼: <input type="password" name="password">
		<br><br>
		<input type="submit" value="Login">
	</form>
<span style="color:red;">
<?php
	if($_GET['errMsg']==1) {
		echo "你4ㄅ4忘記輸入?";
	}else if($_GET['errMsg']==2) {
		echo "帳號or密碼錯誤";
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