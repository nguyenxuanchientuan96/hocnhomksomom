<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> DISPLAY COST</title>
</head>
<body>
	<?php
		$conn=mysql_connect("localhost","root","");
		if(!$conn){
			die("Không kết nối được với db".mysql_error());
		}
		else{
			mysql_select_db("chuadethi",$conn);
			mysql_query('SET NAMES "utf-8"');
		}
		$sql="SELECT * from dienthoai where gia between 2000000 and 5000000";
		$result=mysql_query($sql,$conn);
		if (!$result){
			die("Thất bại".mysql_error());
		}
		while ($row=mysql_fetch_array($result)){
			echo "Mã điện thoại:{$row['madt']} <br>".
				"Tên điện thoại:{$row['tendt']} <br>".
				"Hãng điện thoại:{$row['hangdt']} <br>".
				"Giá điện thoại:{$row['gia']} <br>".
				"---------------<br>";
		}
		echo "Tất cả những điện thoại có giá bé hơn 5 tr và lớp hơn 2tr";
	?>

</body>
</html>