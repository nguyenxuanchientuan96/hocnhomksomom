<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> DISPLAY YEAR</title>
</head>
<body>
	<?php
		
		//kết nối
		$conn=mysql_connect("localhost","root","");
		if(!$conn){
			die("Không kết nối thành công với db".mysql_error());
		}
		else{
			mysql_select_db("chuadethi",$conn);
			mysql_query('SET NAMES"utf-8"');
		}


		$sql="SELECT * from nhanvien where namtuyendung<2000";
		mysql_select_db('chuadethi');
		
		$mysql_query=mysql_query( $sql, $conn);
		
		if(!$mysql_query){
			die ("Lỗi" .mysql_error());
		}
		while($row=mysql_fetch_array($mysql_query, MYSQL_ASSOC))
	{		echo "Mã nhân viên:{$row['manv']} <br>".
				"Họ tên:{$row['hoten']} <br>".
				"Giới tính:{$row['gioitinh']} <br>".
				"Quê QUán:{$row['quequan']} <br>".
				"Năm tuyển dụng:{$row['namtuyendung']} <br>".
				"-------------------------------- <br>";
		}
		echo "Đây là tất cả những người có năm tuyển dụng trước năm 2000 trong db";

		
	?>	
</body>
</html>