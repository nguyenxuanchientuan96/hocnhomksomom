<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> DISPLAY FOOTBALL</title>
</head>
<body>
	<?php
		$conn=mysql_connect("localhost","root","");
		if(!$conn){
			die("không kết nối được với db".mysql_error());
		}
		else{
			mysql_select_db("chuadethi",$conn);
			mysql_query('SET NAMES"utf-8"');
		}

		$sql="select * from cauthu1";
		$result=mysql_query($sql,$conn);
		if (!$result) {
			die("Thất bại".mysql_error());
		}
		while($row=mysql_fetch_array($result)){
			echo "Mã cầu thủ:<a href='update.php'>{$row['mact']} </a> <br>".
				"Họ tên:{$row['hoten']} <br>".
				"Quê Quán:{$row['quequan']} <br>".
				"Năm Sinh:{$row['namsinh']} <br>".
				"------------------ <br>";
			}
			echo "Đây là tất cả những người có trong db";
	?>

</body>
</html>