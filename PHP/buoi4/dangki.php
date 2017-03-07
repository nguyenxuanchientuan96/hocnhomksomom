<!DOCTYPE html>
<html>
<head>
	<title>Đăng kí</title>
	<meta charset="utf-8"/>
</head>
<body>	

	<?php
		$conn=mysql_connect("localhost","root","");
		if (!$conn){
			die("không kết nối được với database".mysql_error());
		}
		else {
			mysql_select_db("testphp",$conn);
			mysql_query("SET NAMES'utf-8'");
			}
	?>
	<?php
		$username=$_POST['txtusername'];
		$fullname=$_POST['txtfullname'];
		$password=$_POST['txtpassword'];
		$email=$_POST['txtemail'];
		$comment=$_POST['txtcomment'];
		$insert="INSERT INTO dangki VALUES('".$username."','".$fullname."','".$password."','".$email."', '".$comment."')";
		
			if(mysql_query($insert,$conn)){
				echo "thành công";
			}
			
			else{
				echo "k thành công";
			}
		

	?>
	


	<form action="" method="post">
		<table>
			<tr>
				<td colspan="2"> ĐĂNG KÍ</td>
			</tr>
			<tr>
				<td> username </td>
				<td> <input type="text" name="txtusername"> </td>
			</tr>
			<tr>
				<td> fullname </td>
				<td> <input type="text" name="txtfullname"> </td>
			</tr>
			<tr>
				<td> password </td>
				<td> <input type="text" name="txtpassword"> </td>
			</tr>
			<tr>
				<td> email </td>
				<td> <input type="text" name="txtemail"> </td>
			</tr>
			<tr>
				<td> comment </td>
				<td> <input type="text" name="txtcomment"> </td>
			</tr>
			<tr>
				
				<td> <input type="submit" name="submit" value="submit"> </td>
			</tr>
		</table>
	</form>

</body>
</html>