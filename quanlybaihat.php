<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<title></title>
</head>
<body style="background-image: url('https://img.freepik.com/free-photo/snow-background-tree_79161-2.jpg?w=2000');">
<table style="text-align: center;" border="1 solid black">
	<tr>
		<th>Song Id</th>
		<th>Song Name </th>
		<th>Price </th>
		<th>Images </th>
		<th>Genre Name </th>
		<th>Singer Name </th>
		<th>Action </th>
	 </tr>	 
	 	
		<tr>
			<?php 
	 	include("connect1.php");
	 	$sql = "SELECT * FROM song,singer,genre WHERE song.genre_id = genre.genre_id and song.singer_id = singer.singer_id";
		$result = mysqli_query($connect, $sql);
		while($row= mysqli_fetch_array($result)){
   			$song_id = $row['song_id'];
   			$song_name = $row['song_name'];
   			$song_price = $row['song_price'];
   			$song_img = $row['song_img'];
   			$genre_name = $row['genre_name'];
   			$singer_name = $row['singer_name'];
			?>
			<td> <?php echo $song_id ?></td>

			<td> <?php echo $song_name ?></td>
			<td> <?php echo $song_price ?></td>
			<td> <img src="img/<?php echo $song_img ?>" style ="width: 100px;"></td>
			<td> <?php echo $genre_name ?></td>
			<td> <?php echo $singer_name ?></td>
			<td> <a href="index.php?id=<?php echo $song_id ?>">Update Song </a></td>
			<td> <a href="?id=<?php echo $song_id ?>">Delete Song </a></td>
	 		</tr>
	 		<?php
	 		}
	 		?> 

	 
</table>
</table>
<?php 
if(isset($_GET["id"])){
	$id = $_GET["id"];
	$sql="DELETE FROM song where song_id = $id";
	$result=mysqli_query($connect,$sql);
	if($result) {
		echo "<script> alert ('Xóa thành công!')</script>";
	}
} else{
	echo"Lỗi";
}
?>

</body>
</html>