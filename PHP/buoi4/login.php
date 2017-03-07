<!DOCTYPE html>
<html>
<head>
	<title> Login</title>
	<meta charset="utf-8"/>
</head>
<body>
<center>

	<?php
	//kết nối với db
		$conn=mysql_connect("localhost","root","");
		if (!$conn){
			die("không kết nối được với db".mysql_error());
		}
		else{
			mysql_select_db("testphp",$conn);
			mysql_query("SET NAMES'utf-8'");
		}

	?>
	<?php
	//khai báo 
		$username=$_POST['txtusername'];
		$password=$_POST['txtpassword'];

	?>
	<?php
	//thực hiện
		if(isset($_POST['submit'])){
			$sql="SELECT * FROM dangnhap where username='$username' and password='$password'";
			$result=mysql_query($sql);
			$count=mysql_num_rows($result);
			if ($count==0){
				echo '<script type="text/javascript"> alert("bạn không đăng nhập được");</script>';
			}
			else{
				echo '<script type="text/javascript"> alert("bạn đăng nhập thành công");</script>' ;
			}

		}
	?>


	


	<form action="" method="post">
		<table border="1" bgcolor="lightpink">
			<tr>
				<td colspan="2"> <center>FORM ĐĂNG NHẬP </center></td>
			</tr>
			<tr>
				<td> username </td>
				<td> <input type="text" name="txtusername"></td>
			</tr>
			<tr>
				<td> password </td>
				<td> <input type="text" name="txtpassword"></td>
			</tr>
			<tr>
				<td colspan="2"><center> <input type="submit" name="submit" value="Đăng nhập"> </center> </td>
			</tr>
		</table>
	</form>
	</center>

</body>
</html>