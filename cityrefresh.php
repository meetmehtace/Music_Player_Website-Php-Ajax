<?php echo "demo";?>
<html>
<head>
<style>
input
{
	background: transparent;
}
.container {
  position: relative;
  
}

.bottomleft {
 
  bottom: 2px;
  left:16%;
  width:68%;
  background-color:#F4B41A;

}

img { 
  opacity: 0.7;
  border: 1px solid black;
}

img:hover
{
	box-shadow: 0px 0px 15px black;
}
.column {
  float: center;
  width: 22.33%;
  padding: 50px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;

}


</style>
</head>
</html>

<?php
session_start();
error_reporting(0);

 $paper2=$_SESSION['paper2'];

$date=date("Y/m/d");

    $emps= json_decode($_POST['emps'],true);
    foreach($emps as $emps2)
    {
    $_SESSION['start']=$emps2[name];
    print_r($emps2[name]);
    
    }
	foreach($emps as $emps3)
    {
    $_SESSION['addr']=$emps3[addr];
    print_r($emps3[addr]);
    
    }
    //echo "<br>".$_SESSION['start'];
    $addr=$_SESSION['addr'];

    $find=$_SESSION['start'];
    
 
    	$server ="localhost";
    $username ="id17275816_music1";
    $password ="!@#$1234Aameet";
	$con =mysqli_connect($server,$username,$password,"id17275816_music") or  die("connected failed".mysqli_connect_error);
   echo $sql="SELECT * FROM `id17275816_music`.`music`Where name='{$addr}'";
    $result = mysqli_query($con,$sql) or die("error");
    if(mysqli_num_rows($result)>0 )
    {
       
echo"<div class='row'>";
        while($row=mysqli_fetch_assoc($result))
        {  ?>
	
  <div class="column" >
	<div class="container">
           <b><a href="<?php echo $row['pdf']; ?>"> <?php echo $row['name']; ?>  </a></b>
		   
	</div>
	</div>

	   <?php
		}
		echo"</div>";
    }
    else
    {
         echo "<br><h3>ePaper Not Available</h3>";
    }
           
?>