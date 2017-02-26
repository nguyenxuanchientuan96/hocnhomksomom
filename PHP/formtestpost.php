<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> In kết quả </title>
</head>
<body>
	<?php 
		$ten=$_POST['txtnguoidung'];
		$password=$_POST['txtpassword'];
		$gioitinh=$_POST['radio'];
		$quoctich=$_POST['quoctich'];



		echo "Tên người dùng là" . " " . $ten. "<br>";
		echo "Password người dùng" . " ".$password. "<br>";
		echo "Giói tính của người dùng" . " ".$gioitinh."<br>";
		echo "Quốc tịch" . " ".$quoctich . "<br>";
	?>

</body>
</html>