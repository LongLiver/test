<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style  type="text/css">
     .wrapper {
     	text-align: center;
     }
     .imgheader {
     	 text-align: center;
            margin-left: 770px;
     }
        </style>
</head>
<body style="background-image: url('https://img.freepik.com/free-photo/snow-background-tree_79161-2.jpg?w=2000');">
	<a style="font-size: 20px;" class="nav-link active" data-bs-toggle="tab" href="http://localhost/sdlc/">Trang Chủ</a>
	 <div class="qq">
    <div class="wrapper">
        <div class="header">
           <p style="font-size:60px;font-family:'Comic Sans MS';text-align:center;"><b>Music 2022</b></p>
            <div class="imgheader">
            	<form method="post" style="text-align: right;">
			<table >
				<tr >
					<td style="font-size:30px;font-family: 'Comic Sans MS';"><b>User name<b>:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td style="font-size:30px;font-family: 'Comic Sans MS';"> <b>Password<b>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
				<td></td>
				<td ><input type="submit" name="login" value="Login"></td>
			</tr>
			</table>
		</form>

            </div>
        </div>
	
<?php 

//Kết nối theo Mysqli procedural
$connect = mysqli_connect('localhost','root','','tunesourcewedsite');
if($connect){
echo "Kết nối thành công";
}
else{
echo"Kết nối thất bại";
}

if(isset($_POST['login'])){
	 $username= $_POST['username'];
	 $password =$_POST['password'];

	 // Truy vấn từ bảng user cột username = giá trị username nhập từ form và cột password = giá trị password nhập từ form
	 $sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";

	 // Thực thi truy vấn
	 $result = mysqli_query($connect, $sql);
	 // Trả về kết quả , chính là các dòng được truy vấn
	 $row = mysqli_num_rows($result);
     $row_users = mysqli_fetch_array($result);
	 // Nếu $row > 0 --> có trên 1 dòng trong CSDL trùng với dữ liệu nhập vào form -> đăng nhập thành công 
	 if($row>0){	
	 	//Lưu tên đăng nhập lại vào biến toàn cục $_SESSION
	 	$_SESSION['username'] = $username;
	 	$_SESSION['user_id'] = $row_users['user_id'];
      echo "<script> alert('Đăng nhập thành công')</script>";
      echo $_SESSION['username'];
      echo "<script>window.open('index.php','_self')</script>";
	 }
	 else{
	 	echo"<script>alert('Tên đăng nhập hoặc mật khẩu không đúng')</script>";
	 }
	}
?>
</body>
</html>