<!DOCTYPE html>
<html>
<head>
	<title>doi mk</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$conn = mysql_connect("localhost","root","");
	if(!$conn){
		die ("Không kết nối được với db".mysql_error());
	}
	else{
		mysql_select_db("chuadethi",$conn);
		mysql_query("SET NAMES'utf-8'");
	}

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$username =$_POST["txtuser"];
		$password =$_POST["txtpass"];
		$newpass =$_POST["txtnewpass"];
		$repass=$_POST["txtrepass"];

		if($newpass==$repass){
			$sql=mysql_num_rows(mysql_query("SELECT username,password FROM user where username ='".$username."' and password='".$password."'"));
			if($sql>=1){
				if(mysql_query("UPDATE user set password='".$newpass."' where username ='".$username."'")){
					echo "Đổi mật khẩu thành công";
				}
				else{
					echo "Chưa thành công";
				}
			}
			else{
				echo "Tên người dùng hoặc pass k đúng";
			}
		}
		else{
			echo "K trùng";
		}
	}
?>
	<form method ="post" action ="">
		<table border ="1" align ="center">
		<tr>
			<td>
				username
			</td>
			<td>
				<input type="text" name="txtuser">
			</td>
		</tr>
		<tr>
			<td>
				password
			</td>
			<td>
				<input type="text" name="txtpass">
			</td>
		</tr>
		<tr>
			<td>
				new password
			</td>
			<td>
				<input type="text" name="txtnewpass">
			</td>

		</tr>
		<tr>
			<td>
				re-pass
			</td>
			<td>
				<input type="text" name="txtrepass">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="submit" name="doimk" value ="Change">
			<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
		</table>
	</form>

</body>
</html>