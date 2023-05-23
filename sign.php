<?php error_reporting(0);  ?>
<html>
<head>
	<title>Sign Up</title>

	<link rel="icon" href="icon.png" type="image/gif" sizes="22x22">
</head>

<style>
 body
{
	margin: 0;
	background-image: url(wp.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;

} 

/*.con*/
/*{*/
/*	border-radius: 10px;*/
/*	box-shadow: 0 0 10px 0 #000;*/
/*    opacity: 0.8;*/
/*	background: #fff;*/
/*	border: 2px;*/
/*    padding-bottom:50;*/
/*    width:150%;*/
/*    text-align: center;*/
/*}*/

.con
{

    opacity: 1.0;
	border: 2px;
    width:25%;
    height:auto;
    text-align: center;
    background-color: rgba(0,0,0,.5);
    /*background-color: rgba(255, 255, 255, 0.8);*/
    color: #fff;
}


input
{
	width: 100%;
	height: 40px;
	border-radius: 10px;
	outline: none;
	border: 1px solid #999;
	padding: 20px;
	background: transparent;
	color:#fff;
} 


button
{
	padding: 10px 20px;
	border: none;
	background: #00203FFF;
	color: #fff;
	font-size: 14px;
	cursor: pointer;
	border-radius: 30px;
}
button:hover 
{
    color:black;
    background-color: #ADEFD1FF;
    border-style: solid;
    border-width: thin;
    border-color: #00203FFF;
}


a:link {
  color: #fff;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: #fff;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a:active {
  color: #fff;
  background-color: transparent;
  text-decoration: none;
}
::placeholder
{
    text-align:center;
}

</style>
	
	
<body>
    
<a href="index.php" style="left:5; top:5; position: fixed;"><img src="home.png" width="25" height="25"></a>

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="./removeBanner.js"></script>

    <center>
        <div class="con1">
<h1 style="font-size:45px;" >Sign Up</h1>
</div>
</center>
<center>
    <br><br>
<div class="con">

<form action="sign.php" method="post" enctype="multipart/form-data">

<br><br>
<h3> Name </h3>
<input type="text" name="name" required>
<br><br>
<h3> PHONE </h3>
<input type="text" name="file1" pattern="[7-9]{1}[0-9]{9}" required>
<br><br>
<h3> PASSWORD </h3>
<input type="text" name="file2" placeholder="CREATE  NEW  PASSWORD" pattern=".{6,}" title="Min 6 character" required>
<br><br>

<button name="submit" >Submit</button>
<br><br>
If you Already Have An Account 
<center><h2><a href="login.php">Login</a></h2></center>

</form>
</div>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
	$a=$_POST['file1'];
	$b=$_POST['file2'];
	$server ="localhost";
    $username ="root";
    $password ="";
$con =mysqli_connect($server,$username,$password) or  die("connected failed".mysqli_connect_error);
		 echo $sql= "INSERT INTO`id17275816_music`.`login`(`name`, `phone`, `password`)  VALUES ('$name','$a','$b');";
		if($con->query($sql)==true)
    {
         
          
           	echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
		
    }
   else
   {
             echo " <center><h3 style='color:red'>This Number is olreadey use</h3> </center>";
   }
	
}
?>
