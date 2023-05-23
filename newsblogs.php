<?php error_reporting(0);  ?>
<html>
<head>
	<title>NewsBlog</title>

	<link rel="icon" href="icon.png" type="image/gif" sizes="22x22">
</head>

<style>
 body
{
	margin: 0;
	background-image: url(j.jpeg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;


} 

.con
{
	/*border-radius: 10px;*/
	/*box-shadow: 0 0 10px 0 #000;*/
    opacity: 1.0;
	/*background: #C7CEEA;*/
	border: 2px;
    width:30%;
    height:auto;
    text-align: center;
    /*background-color: rgba(0,0,0,.5);*/
    background-color: rgba(255, 255, 255, 0.8);
    color: #101E33;
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
	/*color:#E84A5F;*/
	color: #101E33;
} 
select
{
	width: 100%;
	height: auto;
	border-radius: 10px;
	outline: none;
	border: 1px solid #999;
	padding: 20px;
	background: transparent;
	/*color:#E84A5F;*/
	color: #101E33;
} 
.select-selected {
  background-color: DodgerBlue;
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
    /*border-style: solid;*/
    /*border-width: thin;*/
    /*border-color: #00203FFF;*/
}

</style>
	
	
<body>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="./removeBanner.js"></script>

    

<center>
    <br><br>
<div class="con">

<form action="updated.php" method="post" enctype="multipart/form-data">

<br>
<h3><b> Song Name </b></h3>
<input type="text" name="name" id="name" required>
<br>
<h3><b> Song Image </b></h3>
<input type="file" name="file" id="file" >
<br>
<h3><b> Audio </b></h3>
<input type="file" name="file2" id="file2" >
<br>
<input type="hidden" id="txtvalue" name="txtvalue"/> <br>
<select id="services" onchange="sservices () ;" required>
<option><h3><b>Choose a Language</b></h3></option>
 <option >HINDI</option>
  <option >ENGLISH</option>
  <option >GUJARATI</option>
  <option >PANGABI</option>
</select>
<br><br>
<input type="hidden" id="txtvalue2" name="txtvalue2"/> <br>
<select id="services2" onchange="sservices2 () ;" required>
<option><h3>Choose a YEAR</h3></option>
  <option >1990</option>
   <option >2000</option>
  <option >2010</option>
  <option >2020</option>
</select>
<br>
<h3><b> Singer Name </b></h3>
<input type="text" name="file3">
<br>
<br>
<button name="submit" >Submit</button>
<br><br>

</form>
</div>
</center>
</body>

 <script>
    function sservices()
    {
        var d=document.getElementById("services");
        var displaytext=d.options[d.selectedIndex].text;
        document.getElementById("txtvalue").value=displaytext;
    }
</script>

<script>
    function sservices2()
    {
        var d=document.getElementById("services2");
        var displaytext=d.options[d.selectedIndex].text;
        document.getElementById("txtvalue2").value=displaytext;
    }
</script>
</html>