<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
	<title>Other City</title>
	
<style>

 body
{
	margin: 0;
	background-image: url(istockphoto-1068438600-640x640.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	cursor: cell;
} 
.dark-mode 
{
  
  background-image: url(dark1.jpg);
  color: black;
}

input
{
	width: 17%;
	height: 40px;
	border-radius: 30px;
	outline: none;
	border: 1px solid #999;
	padding: 20px;
	background: transparent;
}
select
{
	width: 17%;
	height: 40px;
	border-radius: 30px;
	outline: none;
	border: 1px solid #999;
	padding: 5px;
	background: transparent;
}


.fix
{
	position: fixed;
    left: 0;
    top: 0; width:100%;
}

.buttonfix
{
	position: fixed;
}

    ::-webkit-calendar-picker-indicator{
        margin-left: -15px;
    }
option
{
	text-align: center;
}
	
</style>

</head>

<body>
<center>
<div class="fix">
<?php include 'header.php'; ?>
</div>

<br><br><br>
<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none;"> </button></div>
<br><br>



<div id="click">


            <p id="demo2"></p>
     <br>
		    
Select the City of ePaper  <br>

<br><select name="city" id="myinput" onkeyup="searchFun()" style="text-align: center" > 
		
				<option value="" disabled selected style="margin-left:10%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Choose a city</option>
				<option value="Ahmedabad" id="myinput" onkeyup="searchFun()" style="text-align: center">Ahmedabad</option>
				<option value="Vadodara" id="myinput" onkeyup="searchFun()" style="text-align: center">Vadodara</option>
				<option value="Surat" id="myinput" onkeyup="searchFun()" style="text-align: center">Surat</option>
				<option value="Jamnagar" id="myinput" onkeyup="searchFun()" style="text-align: center">Jamnagar</option>
				<option value="Rajkot" id="myinput" onkeyup="searchFun()" style="text-align: center">Rajkot</option>
		
</select><br>

<input type="text" id="myinput2" placeholder="search" onkeyup="searchFun()" style="text-align: center">
            <p id="demo3"></p>
</div>

<br>
<hr>
<br>

<div id="div_refresh"></div>



</center>



<script>
function goBack() 
{
  window.history.back();
}
</script>

 <script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
		 $("#div_refresh").load("cityrefresh.php");
        setInterval(function() {
            $("#div_refresh").load("cityrefresh.php");
        }, 1000);
    });
 
</script>

<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" 
        rel="Stylesheet"
        type="text/css" />
  
      
  
    <script type="text/javascript" 
        src="http://code.jquery.com/ui/1.10.4/jquery-ui.js">
    </script>


    <script>
    $(document).ready(function(){
 $('#click').click(function(){
          filter2 =document.getElementById('myinput').value;
         //document.getElementById("demo2").innerHTML = filter2;
		  filter3 =document.getElementById('myinput2').value;
         //document.getElementById("demo3").innerHTML = filter3;
		 
         var emps=[];
        var emps1 ={};
        var emps2 ={};
        emps1.id=1;
        emps1.name=filter2;
        emps1.addr=filter3;
        emps.push(emps1);
        console.log(emps);
        $.ajax({
            url:"cityrefresh.php",method:"post",data:{ emps :JSON.stringify(emps) },success : function(res){console.log(res);}})
    });
  // set time out 5 sec
     setTimeout(function(){
        $('#click').trigger('click');
    }, 1000);
    setInterval(function(){ 
   $("#click").click();
},1000);
});
    </script>

<script>
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;

document.getElementById('myinput2').value=today;

</script>

</body>
</html>