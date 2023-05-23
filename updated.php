<html>
<body>
<head>
<style>

body
{
	
	background-image: url('pexels-splitshire-1587.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}



</style>
</head>


<center><h1>Hello</h1></center>
<br>


<?php
error_reporting(0);
session_start();







if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	$files= $_FILES['file'];

	
	$a=$filename=$files['name'];
	$fileerror=$files['error'];
	$filetmp=$files['tmp_name'];

	$fileext=explode('.',$filename);
	$filecheck= strtolower(end($fileext));
	
	$fileextstored = array('jpeg','jpg','png','mp3','ogg','mp4');
	
	if(in_array($filecheck,$fileextstored))
	{
	    date_default_timezone_set("Asia/Calcutta");
        $time2=date("d-m-Y");
        $time=date("h-i-A");


		$destinationfile='upload/'.$time2.$time.$filename;
        $a=$time2.$time.$filename;
		move_uploaded_file($filetmp,$destinationfile);
	}
}
if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	$files= $_FILES['file2'];

	
	$b=$filename=$files['name'];
	$fileerror=$files['error'];
	$filetmp=$files['tmp_name'];

	$fileext=explode('.',$filename);
	$filecheck= strtolower(end($fileext));
	
	$fileextstored = array('mp3','ogg','mp4','jpeg','jpg','png');
	
	if(in_array($filecheck,$fileextstored))
	{
		date_default_timezone_set("Asia/Calcutta");
        echo $time2=date("d-m-Y");
        echo $time=date("h-i-A");


		$destinationfile='upload/'.$time2.$time.$filename;
		$b=$time2.$time.$filename;
		move_uploaded_file($filetmp,$destinationfile);
	$server ="localhost";
    $username ="root";
    $password ="";
     echo $allservices=($_POST['txtvalue']);
          echo $allservices2=($_POST['txtvalue2']);
          echo $allservices3=($_POST['file3']);
$con =mysqli_connect($server,$username,$password) or  die("connected failed".mysqli_connect_error);
		 echo $sql= "INSERT INTO`id17275816_music`.`music`( `image`,`name`,`mpfile`,`language`,`year`,`singer`)  VALUES ('$a','$name','$b','$allservices','$allservices2','$allservices3');";
		if($con->query($sql)==true)
    {
         
         echo "<script type='text/javascript'> document.location = 'newsblogs.php'; </script>";
           	
		
    }
   else
   {
             echo " <center><h3 style='color:red'>This Number is olreadey use</h3> </center>";
   }
	}
}
?>


</tbody>

</html>