<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Chi tiết bài hát</title>
	<style type="text/css">
		.images-detail img {
		margin-top: 5%;
            width: 600px;
            height: 600px;
            align-items: center;
            border-radius: 100%;
            margin-bottom: 30px;
            animation: app-logo-spin infinite 20s linear;
            position:relative;
		}
		@keyframes app-logo-spin {
			from {
				transform: rotate(0deg);
			}
			to {
				transform: rotate(360deg);
			}
		}

	</style>

</head>
<body style="background-image: url('https://img.freepik.com/free-photo/snow-background-tree_79161-2.jpg?w=2000');">
	<a style="font-size: 20px;" class="nav-link active" data-bs-toggle="tab" href="http://localhost/sdlc/">Trang Chủ</a>
	<div class="container">
		<div class="row">
			<?php

			include('connect1.php');
			$id = $_GET["id"];
			$sql = "SELECT * FROM song,singer,genre WHERE song.genre_id = genre.genre_id and song.singer_id = singer.singer_id and song_id = {$id}";
			$result = mysqli_query($connect, $sql);
			while($row= mysqli_fetch_array($result)){
				$id = $row['song_id'];
				?>
			<div class="col-md-6 col-sm-6 col-xs-12 " style="float: right;">
				<div class="images-detail">
						<center>
						<div class="col-md-6">
							<img src="img/<?php echo $row['song_img'] ?>" style = "width: 700px;height: 700px;">
						</div> 
						</center>
					</div>
			</div>  
					<!-- cho ảnh quay tròn-->


				<div class="col-md-4 col-sm-6 col-xs-12" style="float: left;">
					<h2> Name of Music: <?php echo $row['song_name'];?> </h2>
					<p>Price: <?php echo $row['song_price'];?> </p>
					<audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="width: 250px;">
						<source src="Audio/<?php echo $row['song_audio'];?>" type="audio/mpeg">
						</audio>
						<script type="text/javascript">
							function MyAudio(event){
								if(event.currentTime>30){
									event.currentTime=0;
									event.pause();
									alert("Bạn phải trả phí để nghe cả bài")
								}
							}
						</script>
						<h5> Singer:<?php echo $row["singer_name"] ;?></h5>
						<h4> Genre:<?php echo $row["genre_name"]; ?></h4>
						<textarea cols="40" rows="10"><?php echo $row["song_lyric"];?></textarea>						
						<a href="addcart.php?id=<?php echo $id ;?>">  <button type="submit" name ="buy" class='btn btn-primary'><i class="fas fa-cart-plus"></i> Add to cart</button> </a>
						<!-- Khi click vào nút này có thể kiểm tra xem trong giỏ hàng đã có bài hát này chưa và kiểm tra đã đăng nhập chưa? -->
				</div>


					<?php
				}

				?>



				<!-- ảnh
				-->
			</div>
		</div>
	</body>
	</html>