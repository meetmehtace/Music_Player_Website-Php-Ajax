<?php
error_reporting(0);
session_start();
?>
<html>
<head>
<title>Access</title>
	 

	 <link rel="icon" href="icon.png" type="image/gif" sizes="22x22">

<style>

 body
{
	margin: 0;
	background-image: url(wp1.png);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
} 


input
{
    border: 2px solid rgb(20, 20, 20);
    border-radius: 15px;
    font-size: 25px;
    width: 75%;
    margin: 10px; 
    padding: 3px;
}

td,th
{
    padding:10px;
	text-align:center;
	border-collapse: collapse;
} 
th
{
	position: sticky;
	top:0;
    padding: 10px;
    background-color:#000100;
    color:white;
    z-index:9999;
    border-collapse: collapse;
    
}


table
{
  border-collapse: collapse; 
  color:black;
  radius: 25px;
}

</style>
</head>
<body>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="./removeBanner.js"></script>

<?php include 'd_header.php';?>


<style>

</style><br><br><br><br><br>
<center><h1>Music Access</h1><h3>
<table width="85%;">
<tr>
<th> Image </th>
<th> Name  </th> 
<th> Music  </th>
<th> Delete </th>
<th> Edit </th>
</tr>
<?php 
error_reporting(0);


	$server ="localhost";
    $username ="id17275816_music1";
    $password ="!@#$1234Aameet";
    $con =mysqli_connect($server,$username,$password) or  die("connected failed".mysqli_connect_error);



$sql="SELECT * FROM  `id17275816_music`.`music` ";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
        session_start();
     ?>   
	<tr style="background-color: rgba(255, 255, 255, 0.5); color:black;">
    <td> <img src=" <?php echo "upload/".$row['image']; ?>" alt="" height="100px" width="100px"> </td>
    <td > <?php echo  $row['name'];    ?></td>
    <td > 
        <audio controls>  
            <source src="<?php echo "upload/".$row['mpfile']; ?>" >
		</audio>  
	</td>
    <td>  <a href='pdf_d.php?id=<?php echo $row['id'];?>'>Delete</a></td>
    <td>  <a href='a_edit1.php?id=<?php echo $row['id'];?>'>Edit</a></td>
   </tr>
    <?php
    }
}
else{

    echo "Empty";
    
    }
?>
</tr>
</center>
<!-- table {
  border-spacing: 5px;
   
} -->



</table>
</body>
</html>