<html>
<head>
	<title>Upload</title>


<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
<link rel="stylesheet" href="style.css">
<style>
body
{
	background-image: url(istockphoto-1068438600-640x640.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	cursor: cell;
	
}



</style>
</head>

<body>

<br><br><br>


<center><h1>Music Player</h1></center>
<br>
<hr>
<br>
<br>
<br>
<table style="float:left; width:75%; margin-left: 35px;">
<thead>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
</thead>

<?php
	error_reporting(0);
	$con=mysqli_connect("localhost","root","","music") or  die("connected failed".mysqli_connect_error);

	$sql="SELECT * FROM music ORDER BY id DESC";
	$result=mysqli_query($con,$sql) or die("error");
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			<tr>
			<td> <b style="text-shadow: 1px 1px 1px #000000"> <font	color="red" > <?php echo $row['id']; ?> </font> </b> </td> 
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td> <b> <?php echo $row['name']; ?> </b> </td>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td>
			<audio controls>
 				<source src="<?php echo $row['mpfile']; ?>" type="audio/ogg/mp3/mp4">
			</audio>
			</td>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td> <img src="<?php echo $row['image']; ?>" style="border-radius: 4%" height="100px" width="150px"></td>
			
			</tr>
			<tr>
			
			<td><hr></td>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td><hr></td>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td><hr></td>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			
		
		</tr>
			
			<?php
			
		}
	}
?>

		

<script>
function goBack() 
{
  window.history.back();
}
</script>
		
		


</body>
</html>