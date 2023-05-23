<?php
error_reporting(0);
session_start();

echo $_SESSION['update']=$_GET['id'];

echo "<script type='text/javascript'> document.location = 'a_edit.php'; </script>"

?>