    
    
    <!--aa navu chhe down-->
    
    
<html>
<head>
	<title>Search Bar using PHP</title>
	
	<style>
	    body{
	        background-color:#aaf;
	    }
	</style>
</head>
<body>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="./removeBanner.js"></script>


<h3><p style="right:0; top:0; position: fixed;"><a href="howto.php">How to ?</a></p></h3>

<center>
    <hr>
<p style="font-size: 8vw;">TO LISTEN OFFLINE</p>
</center>
<hr>

<center>
<form method="post">
<label>Search</label>
<input type="text" name="search" placeholder="Search Music"  onkeyup="myFunction()">
<input type="submit" name="submit">
	
</form>
</center>
</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=id17275816_music",'id17275816_music1','!@#$1234Aameet');



if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `music` WHERE name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<center>
		<table style="text-align:center; border-spacing: 30px;">
			<tr>
				<th>Name</th>
				<th>Image</th>
				<th>Music</th>
			</tr>
			<tr>
				<td><a href="index.php"><?php echo $row->name; ?></a></td>
				<td><a href="index.php"><img src=" <?php echo "upload/".$row->image; ?>" alt="" height="100px" width="150px"></a></td>
				<td><a href="index.php"><audio controls>
 				<source src="<?php echo "upload/".$row->mpfile; ?>" >
			</audio> </a></td>
			</tr>

		</table>
		</center>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>


<!--uper sudhi nava vada nu chhe-->