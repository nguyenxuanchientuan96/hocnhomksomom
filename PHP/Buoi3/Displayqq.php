<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Hiển thị thông tin cầu thủ có quê quán bắt đầu bằng Hà</title>
</head>
<body>
	<?php
		//kết nối với mysql trên máy
		$conn=mysql_connect("localhost","root","");
		if (!$conn){ 
			die("không kết nối được với database".mysql_error());
		}
		else{
			mysql_select_db("testphp",$conn); 
			mysql_query("SET NAMES'utf-8'"); 
			}
	?>
	<?php
		$sql = 'SELECT mact,hoten,namsinh,quequan,sodienthoai
			        FROM cauthu1
			        WHERE quequan LIKE "Ha%"';

		mysql_select_db('testphp');
			$mysql_query = mysql_query( $sql, $conn );


		if(! $mysql_query )
			{
			  die('Không thể lấy dữ liệu: ' . mysql_error());
			}

		while($row = mysql_fetch_array($mysql_query, MYSQL_ASSOC)) 
		{
			    echo "Mã cầu thủ :{$row['mact']}  <br> ".
			         "Họ Tên : {$row['hoten']} <br> ".
			         "Năm Sinh : {$row['namsinh']} <br> ".
			         "Quê Quán : {$row['quequan']} <br> ".
			         "Số điện thoại : {$row['sodienthoai']} <br> ".
			         "--------------------------------<br>";
			} 
			echo "Đây là tất cả dữ liệu cầu thủ có quê quán bắt đầu bằng chữ Hà mà bạn muốn tìm kiếm";
			mysql_close($conn);



	?>
	

</body>
</html>