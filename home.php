<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="./removeBanner.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
<style>
td
{
   border-bottom-style: solid;
  border-bottom-style: inset;
  border-bottom-color: #f5f5f5;
  border-bottom-width: 1px;
 
}
tr[data-href] {


}

tr[data-href]:hover {
background-color:#f5f5f5;
cursor: pointer;

}
table
{
        margin:10px;
}

table
{
        margin-top:30px;
}

}




</style>



<body style="font-family:Verdana;">
      <?php
      
      
   
      
      echo "<br><table>";
  
$search_value="a";
   
    $server ="localhost";
    $username ="id17275816_music1";
    $password ="!@#$1234Aameet";
   $con =mysqli_connect($server,$username,$password) or  die("connected failed".mysqli_connect_error);

$sql = "SELECT * FROM  `id17275816_music`.`music` ";
 $result = mysqli_query($con,$sql) or die("error");
        if(mysqli_num_rows($result)>0 )
        {
           
            while($row2=mysqli_fetch_assoc($result))
            {
                
            $nn=$row2['name'];
            $cj=$row2['id'];
            $nid=$row['language'];
             echo "
             
              <tr data-href='index.php?num=$cj&nn=$nn&&nid=$nid'><td>"; 
              
               ?>   <img src="<?php echo "upload/".$row2['image']; ?>" height="60px" width="60px" style="border-radius: 50%"> <?php
               
               echo "</td>";
               $c++;
                  
               
               echo "<td width='100%'>&nbsp;&nbsp;&nbsp;";
               echo $d5[$z]=$row2['name'];
              $z++;
                echo "</td> </tr>";
                }
      
      }
                  
               echo "<br>";
 ?>
 
 
   
   
  </div>


  <script>
  document.addEventListener("DOMContentLoaded", () => {const rows = 
  document.querySelectorAll("tr[data-href]");
          rows.forEach(row =>{row.addEventListener("click" , () =>{ window.location.href=row.dataset.href;});});  });
  </script>




</body>
</html>



