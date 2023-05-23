<?php

if(isset($_COOKIE["id"]))
{


    
    

                    setcookie("id","",time()-(86400 *30 *12),"/");
                    setcookie("phone","",time()-(86400 *30 *12),"/");
                    setcookie("name","",time()-(86400 *30 *12),"/");
                    setcookie("photo","",time()-(86400 *30 *12),"/");
                    setcookie("n_c","",time()-(86400 *30 *12),"/");
                    echo "<script>window.location.href='index.php';</script>";
                    exit;
                    
}
else
{
        
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<script src="./removeBanner.js"></script>

</head>
<body>
    

</body>
</html>