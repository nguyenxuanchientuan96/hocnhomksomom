<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> SEARCH GENDER </title>
</head>
<body>
	
<?php
		//kết nối với mysql trên máy
		$conn=mysql_connect("localhost","root","");
		if (!$conn){ 
			die("không kết nối được với database".mysql_error());
		}
		else{
			mysql_select_db("chuadethi",$conn); 
			mysql_query("SET NAMES'utf-8'"); 
			}
	?>
	<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$gioitinh=$_POST['txtgioitinh'];
		$sql = "SELECT *
			        FROM sinhvien
			        WHERE gioitinh='".$gioitinh."'";
		mysql_select_db('chuadethi');
			$mysql_query = mysql_query( $sql, $conn );


		if(! $mysql_query )
			{
			  die('Không thể lấy dữ liệu: ' . mysql_error());
			}

		while($row = mysql_fetch_array($mysql_query, MYSQL_ASSOC)) 
		{
			    echo "Mã cầu thủ :{$row['masv']}  <br> ".
			         "Họ Tên : {$row['hoten']} <br> ".
			         "Năm Sinh : {$row['gioitinh']} <br> ".
			         "Quê Quán : {$row['quequan']} <br> ".
			       
			         "--------------------------------<br>";
			} 
			echo "Đây là tất cả dữ liệu sinh viên có giới tính là $gioitinh mà bạn muốn tìm kiếm";
			mysql_close($conn);

}

	?>

<center>
	<form method="POST" action="">
		<table border="1">
			<tr>
				<td colspan="2"> TÌM KIẾM THÔNG TIN </td>
			</tr>
			<tr> 
				<td> Giới tính cần tìm kiếm</td>
				<td><input type="text" name="txtgioitinh" placeholder="Viết không dấu"></td>
			</tr>
			<tr>
				<td colspan="2"><center> <input type="submit" name="submit" value="Tìm kiếm"></center></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>