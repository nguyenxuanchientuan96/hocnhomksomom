<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> DISPLAYQQ </title>
</head>
<body>
	<?php
		$conn=mysql_connect("localhost","root","");
		if(!$conn){
			die("Không kết nối được với db".mysql_error());
		}
		else{
			mysql_select_db("chuadethi",$conn);
			mysql_query('SET NAMES"utf-8"');
		}
		$sql="SELECT * from cauthu where quequan like 'Ha%'";
		$result=mysql_query($sql,$conn);
		if(!$result){
			die("Bạn không hiển thị thành công".mysql_error());
		}
		while ($row=mysql_fetch_array($result)) {
			echo "Mã cầu thủ:{$row['mact']} <br>".
			"Họ tên:{$row['hoten']} <br>".
			"Năm Sinh:{$row['namsinh']} <br>".
			"Quê quán:{$row['quequan']} <br>".
			"Số điện thoại:{$row['sodienthoai']} <br>".
			"-------------------------------- <br/>";
		}
			echo "Đây là tất cả cầu thủ có tên quê quán bắt đầu bằng chữ Hà có trong DB";
	?>
</body>
</html>