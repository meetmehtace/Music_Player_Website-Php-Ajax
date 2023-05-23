<?php error_reporting(0);  ?>
<html>
<head>
	<title>Login</title>
<link rel="stylesheet" href="style.css">
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

.lcon
{

    opacity: 1.0;
	border: 2px;
    width:40%;
    height:70%;
    text-align: center;
    background-color: rgba(0,0,0,.5);
    /*background-color: rgba(255, 255, 255, 0.8);*/
    color: #fff;
}


input
{
	width: 100%;
	height: auto;
	border-radius: 10px;
	outline: none;
	border: 1px solid #999;
	padding: 20px;
	background: transparent;
	color:#fff;
	left:-100;
	font-size:40px;
} 


button
{
	padding: 10px 20px;
	border: none;
	background: #00203FFF;
	color: #fff;
	font-size: 30px;
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


</style>
	
	
<body>
    
<a href="index.php" style="left:5; top:5; position: fixed;"><img src="home.png" width="25" height="25"></a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="./removeBanner.js"></script>

<center>
<div class="con1">
<h1 style="font-size:45px; " ><div class="loginphp">Login</div></h1>
</div>
</center>


<center>
    
<div class="main0">

    <form action="login.php" method="post" enctype="multipart/form-data">
    
    <br><br>
    <h3> Phone </h3>
    <input type="text" name="name" pattern="[7-9]{1}[0-9]{9}" required>
    <br><br>
    <h3> Password </h3>
    <input type="password" name="file2" pattern=".{6,}" tilte="min character"  required>
    <br><br>
    
    <button name="submit" >Submit</button>
    <br><br><br>
    If you Don't Have An Accont 
    <center><h2><a href="sign.php">Sign-Up</a></h2></center>
    
    
    </form>
</div>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
        {
error_reporting(0);


	$server ="localhost";
    $username ="root";
    $password ="";
    $con =mysqli_connect($server,$username,$password) or  die("connected failed".mysqli_connect_error);

$id=$_POST['name'];
$pa2=$_POST['file2'];
$sql="SELECT * FROM  `id17275816_music`.`login` WHERE Phone='{$id}'AND Password = '{$pa2}' ";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
        
    
   echo "hello";
                    setcookie("Id",$row['Id'],time()+(86400 *30 *12),"/");
                    setcookie("name",$row['name'],time()+(86400 *30 *12),"/");
        
                  echo $_COOKIE["Id"];
echo $_COOKIE["name"];
echo "hello";
                
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
   
    
   
   
    }
}
else{
  echo '<script>alert("Wrong ID or Password Try Again!!")</script>';
 
    echo "Empty";
    
    }

}

?>