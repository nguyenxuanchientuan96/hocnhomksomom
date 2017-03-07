<!DOCTYPE html>
<html>
<head>
	<title> form hiển thị</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php

	//kết nối vs db
		$conn=mysql_connect("localhost","root","");
		if(!$conn){
			die("không kết nối được với db".mysql_error());
		}	
		else{
			mysql_select_db("testphp",$conn);
			mysql_query("SET NAMES 'utf-8'");
		}
	?>



	<?php
		$sql="SELECT username,fullname,password FROM user";
		$mysql_query=mysql_query($sql,$conn);
		if(!$mysql_query){
			die("không tồn tại".mysql_error());
		}
			while($row = mysql_fetch_array($mysql_query, MYSQL_ASSOC)) //mysql_fetch_array: lấy dữ liệu từ bảng in vào mảng
																		//Đưa ra một mảng với chỉ số của mảng là tên trường
			{
			    echo "Username :{$row['username']}  <br> ".
			         "Fullname : {$row['fullname']} <br> ".
			         "Password :{$row['password']} <br>".
			         "--------------------------------<br>";
			} 
			{
				echo "Đây là tất cả trong db";
			}
		
	?>

</body>
</html>