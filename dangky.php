<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <style  type="text/css">
        .qq{
           /* margin:auto;*/
        }
        .wrapper {
            width: 1200px;
            margin: auto;

        }
        .header {
            height: 500px;
            border: 1px solid dashed;
        }
        .header img{
            float:left;
        }
        .imgHeader form {
            text-align: center;
            margin-left: 440px;
        }
        </style>
</head>
<body style="background-image: url('https://img.freepik.com/free-photo/snow-background-tree_79161-2.jpg?w=2000');">
    <a style="font-size: 20px;" class="nav-link active" data-bs-toggle="tab" href="http://localhost/sdlc/">Trang Chủ</a>
    <div class="qq">
    <div class="wrapper">
        <div class="header">
           <p style="font-size:60px;font-family:'Comic Sans MS';text-align:center;"><b>Music 2022</b></p>
            <div class="imgHeader">
<form method="POST"style="text-align: center;">
    <table>
        <tr>
            <td style="font-size:30px;font-family: 'Comic Sans MS';text-align: center;"><b>User_ID:<b> </td>
            <td><input type="text" name="userid"></td>
        </tr>
        <tr>
            <td style="font-size:30px;font-family: 'Comic Sans MS';"><b>Username:<b> </td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td style="font-size:30px;font-family: 'Comic Sans MS';"> <b>Password:<b> </td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
            <td> </td>
            <td><input type="submit" name="register" value="Register"></td>
        </tr>
    </table>
            </div>
        </div>
        </form>
    <?php 
    $connect =mysqli_connect('localhost','root','','tunesourcewedsite');
if($connect){
    echo "kết nối thành công";
}
else{
    echo "kết nối không thành công";
} 
   ////nêus click vào register thì mwois thực hiện
   if(isset($_POST['register'])){ 
    echo"ok";
    $user_id = $_POST['userid'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $sql ="INSERT INTO users VALUES('$user_id','$username','$password','null')";
    $result= mysqli_Query($connect,$sql);
    if($result){
       echo "<script> alert('Thêm mới thành công')</script>";
    }
    else{
        echo "thêm mới thất bại";
    }
   }
    ?>


</body>
</html>