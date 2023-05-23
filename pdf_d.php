<?php
        echo $stu=$_GET['id'];
        error_reporting(0);

	$server ="localhost";
    $username ="id17275816_music1";
    $password ="!@#$1234Aameet";
    $con =mysqli_connect($server,$username,$password) or  die("connected failed".mysqli_connect_error);



if(!$con)
{
    die ("connected failed".mysqli_connect_error);
}
else
{
   // echo "connected";
} 
$sql="DELETE  FROM `id17275816_music`.`music` WHERE id='{$stu}'";
if($con->query($sql)===true)
    {
        echo "<script type='text/javascript'> document.location = 'access.php'; </script>";
    }
    else
    {
        echo "error".$con->error;
    }  
?>