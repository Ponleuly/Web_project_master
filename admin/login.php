<?php
	session_start();
	include('config/connect.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($connect,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admin</title>
	<style type="text/css">
		body{
			background:#f2f2f2;
		}
				/*---------------- Dang Nhap--------------------*/
		.sign_in {
			font-size: 18px;
			font-family: 'Roboto Slab', serif;
			border: 2px solid #e74c3c;
			height: 300px;
			width: 30%;
			margin-left: 35%;
			margin-top: 10px;
			margin-bottom: 10px;
			border-radius: 10px;
		}
		.sign_in p{
			font-size: 16px;
			margin: 5px 20px;
		}
		.sign_in input{
			font-size:18px;
			margin: 5px 20px;
			border: 1px solid gray;
			border-radius: 3px;
			width: 89%;
		}
		.sign_in input[type=submit]{
			text-align: center;
			width: 90%;
			font-size: 18px;
			padding: 10px;
			border: 0;
			border-radius: 25px;
			background-color: #e74c3c;
			color: white;
			cursor: pointer;
		}
		.sign_in a{
			margin-left: 20px;
		}
		.sign_in a:hover {
			color: #e74c3c;
		}
		.sign_in input[type=submit]:hover{
			background-color: #1ed760;
			color: black;
		}
		.sign_in h3{
			text-align: center;
		}
	</style>
</head>
<body>
   <div class="sign_in">
		<h3>Đăng nhập Admin</h3>
        <form action="" method="POST">
            <table>
            <tr>
				<td><p>Tên Tài khoản</p></td>
			</tr>
			<tr>
				<td><input type="text" size="30" name="username" ></td>
			</tr>
			<tr>
				<td><p>Mật khẩu</p></td>
			</tr>
			<tr>
				<td><input type="password" size="30" name="password"></td>
			</tr>
            <tr>
				<td><input type="submit" name="dangnhap" value="ĐĂNG NHẬP​"></td>
			</tr>
            </table>
        </form>
   </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
