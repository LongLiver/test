<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
</head>
<style>
	.carousel-inner .item img{
		margin: auto;
        width: 900px;
        height: 600px;
    }
    .wrapper{
        background-color:snow;
        font-size: 16px;
    }
    .header{
        font-size: 60px;
        font-family: 'Comic Sans MS';
        text-align: center;
    }
    .footer{
        text-align: center;
    }
    .headers{
        background-color: skyblue;
        text-align: center;
        font-family: 'Comic Sans MS'; 
        font-size: 30px;
    }
    .col-md-3 {
        font-family: 'Comic Sans MS'; 
        font-size: 20px;
        text-align: center;

    }
</style>
<body style="background-image: url('https://img.freepik.com/free-photo/snow-background-tree_79161-2.jpg?w=2000');">
  <div class="header">                
     <p><b>Music 2022</b></p>                        
 </div>
 <div class="wrapper">
   <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#home">Trang Chủ</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu1">Thể Loại</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu2">Top 100 bài hát Việt Nam được yêu thích 2022</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu3">Ca Sỹ</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu4">Nhạc Châu Á</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu6">Vinahouse là dòng nhạc bất diệt</a>
    </li>
    <li class="nav-item">
        <form>    
            <input type="hidden" name="thamso" value="tim_kiem" >
            <input type="text" name="tu_khoa" value="" style="margin-top:10px;margin-bottom:10px;" >
            <input type="submit" value="Tìm kiếm" >
        </form>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="http://localhost/sdlc/dangnhap.php" target="blank">Đăng nhập</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="http://localhost/sdlc/dangky.php" target="blank">Đăng ký</a>
    </li>
</ul>
</div>
<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse". data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>	
	</div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
          <img src="https://i.ytimg.com/vi/fsi1YSKYFdo/maxresdefault.jpg" width ="1000px" height="500px"  alt="Los Angeles" alt="Los Angeles">
      </div>

      <div class="item">
          <img src="https://static.tuoitre.vn/tto/i/s626/2016/12/12/lac-troi-teasing-artwork-ngang-logo-1481512811.jpg" width ="1000px" height="500px" alt="Chicagog" alt="Chicago">
      </div>

      <div class="item">
          <img src="https://ss-images.saostar.vn/2020/03/02/7083971/ba1.jpg" width ="1000px" height="500px" alt="Chicagog" alt="New York">
      </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
</a>
</div>
</nav>
<div class="headers">                
    <p>Bài hát nổi bật</p>                        
</div>
<!--
<div class="col-md-3 col-sm-6 col-12">
  <p>Lạc trôi - Sơn Tùng MTP</p>
  <div class="card card-product mb-3">
    <img style="width:300px;height:160px;" class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYkEtZaTC9iTWugIqpxRZc6KmemK2O1gosYg&usqp=CAU">
    <div class="card-body">
        <h5 class="card-title"></h5>
        <h5 class="card-title"></h5>

    </div>
</div>
-->
</div>




<?php
$connect =mysqli_connect('3.132.234.157','longnd','long123','salah');
if(!$connect){
    echo "Failure Connect";
}
$sql ="SELECT * FROM song";
$result = mysqli_query($connect,$sql);
?>
<div class="row">
<?php 
while($row = mysqli_fetch_array($result)) 
{
                        //lấy ra từng dòng dl truy vấn được và hiển thị
                        //$row['Product_ID'];
                        //$row['Product_Name'];
                        //$row['Product_Price'];
                        //$row['Product_Image'];
    ?>    
    <div class="col-md-3">           
        <h3><?php echo $row['song_name'] ?></h3>
        <img src="img/<?php echo $row['song_img'] ?>" width="350px" height="200px" />
        <p style="color:red;"><b>Price: <?php echo $row['song_price'] ?></b></p>                
        <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
            <source src="Audio/<?php echo $row['song_audio'] ?>" type="audio/mpeg">
            </audio>          
            <script type="text/javascript">
                function MyAudio(event){
                    if(event.currentTime>10){
                        event.currentTime=0;
                        event.pause();
                        alert("Bạn phải trả phí để nghe cả bài")
                    }
                }
            </script>
            <a href='chitietbaihat.php? id=<?php echo $row['song_id'] ;?>' class='btn btn-primary'>Details</a>   
            </div>        
            <?php
        }
        ?>

    
</div>

    <div class="footer">

    <div class="footercontent">
        <p style="font-family: 'Comic Sans MS'; font-size: 30px;"><b>Đăng ký ngay bằng Email và số điện thoại , bạn sẽ có cơ hội nhận được những phần quà của chúng tôi </b></p>
        <input type="text" name="" placeholder="Email của bạn *" style="background-color:skyblue; border-color: darkred;border-top: none;border-left: none;border-right: none;width: 300px;">
        <select style="background-color:skyblue;color: black;border-left: none;border-right: none;border-top: none;border-bottom: 2px solid darkred;width: 300px;">
            <option>Chọn quê quán *</option>
            <option>Hà Nội</option>
            <option>Sài Gòn</option>
            <option>Hải Phòng</option>
            <option>Đà Nẵng</option>
            <option>Thanh Hóa</option>
            <option>Cần Thơ</option>
            <option>Cà Mau</option>
        </select>
        <p style="font-family:'Comic Sans MS';font-size: 18px;">Hãy nhanh tay nào !!</p>
        <input type="submit" name="" style="background-color:red;color: rgb(255, 228, 225);border: none; width: 150px;height: 60px;">
    </div>
</div>
</body>
</html>