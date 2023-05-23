<?php
error_reporting(0);
session_start();
?>
<html>
<head>
    <title>Searching..</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
tr[data-href] {


}

tr[data-href]:hover {
background-color:#f5f5f5;
cursor: pointer;

}
tr
{
    
    width:80%;
    
}
/*div.ex1 {*/
/*  background-color: lightblue;*/
/*  width: 100%;*/
/*  height: 110px;*/
/*  overflow: scroll;*/
/*}*/

p{
    color:#fff;
}

a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a:active {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

</style>
<?php

 $search_value = $_POST["search"];
 
 if(!$search_value=="")
 {
	$server ="localhost";
    $username ="root";
    $password ="";
    
    $con =mysqli_connect($server,$username,$password) or  die("connected failed".mysqli_connect_error);

$sql = "SELECT * FROM  `id17275816_music`.`music` WHERE name LIKE '%{$search_value}%' OR singer LIKE '%{$search_value}%'";


$result = mysqli_query($con,$sql);
$output = "";
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
       
     ?>   
     
    <div>   
    <div class="ex1" >
    <table style="border-spacing: 15px;">
        <?php  $cj=$row['id']; 
           
           ?>
        	<tr onclick="window.location='index.php?num=<?php echo $cj ?> '">
            <td >
            <img  id="aaa" src=" <?php echo "upload/".$row['image']; ?>" alt="" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            </td>
            
            <td ><?php echo  $row['name'];    ?>
             <h1><?php echo  $row['singer'];    ?></h1></td>
           
          
            </tr>
        
    </table>
    </div>
    </div>
    <?php
    }
}
else{

    echo "Empty";
    
    }
 }
 else
 {
    //  echo "error";
 }



