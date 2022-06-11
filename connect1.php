<?php 
$servername = "3.132.234.157";
$username = "longnd";
$password = "long123";
$database = "salah";
//Kết nối theo Mysqli procedural
$connect = mysqli_connect($servername,$username,$password,$database);
if($connect){
	echo "Kết nối thành công";
}
else{
	echo"Kết nối thất bại";
}

?>
