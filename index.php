<?php
error_reporting(0);
echo $_COOKIE["Id"];
echo $_COOKIE["name"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>music player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="icon.png" type="image/gif" sizes="22x22">
    
   
<style>

#aaa {
  border-radius: 20%;
  height:80px;
  width:80px;
}

button
{
	padding: 10px 20px;
	border: none;
	background: #00203FFF;
	color: #fff;
	font-size: 14px;
	cursor: pointer;
	border-radius: 15px;
}
button:hover 
{
    color:black;
    background-color: #ADEFD1FF;

}
input{
    width: 80%;
	/*height: 30px;*/
    /*border: 2px solid rgb(20, 20, 20);*/
    background-color: rgba(0,0,0,.5);
    background: transparent;
    border: none;
    /*border-color: transparent;*/
    border-radius: 10px;
    font-size: 18px;
    margin: 1px; 
    padding: 3px;
    color:black;
    
    border-bottom: 2px solid rgb(20, 20, 20);
    
} 
input:focus
  {
      border-color: #0000cc;
     outline: none;
     /*background-color:#E0BBE4 ;*/
     background-color: #CBC3E3;
  color: #0000cc;
  }
::placeholder {
  color: black;
  opacity: 1; /* Firefox */
}

/*Image Hover*/




	.cotf
    {
    	/*border-radius: 10px;*/
    	/*box-shadow: 0 0 10px 0 #000;*/
    	/*background: #B5EAD7;*/
    	/*border: 2px;*/
    	padding:10;
    	width: 1200px;
    	height:500px;
    	overflow: auto;
    	
        white-space: nowrap;
    
    }
.container {
  position: relative;
  width: 1200px;
  height:30px;
  	overflow: auto;
        white-space: nowrap;
         display: inline; 
    /*border: 1px solid red; */
   
}

   .con2::-webkit-scrollbar {
  display: none;
}
    

.middle1 {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container .image:hover {
  opacity: 0.3;
}

.container:hover .middle1 {
  opacity: 1;
}


</style>
</head>

<body >
    
    
    
<center>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="./removeBanner.js"></script>


<center>
   
<input type="text" style="width:80%; text-align:center;" autocomplete="off"  spellcheck="false" placeholder="Search Here" id="search" autocomplete="off">
    
<table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">

        <center> 
        <div id="search-bar">
          <!--<input type="text" style="width:80%; text-align:center;" placeholder="Search" id="search" autocomplete="off">-->
        </div>
        </center> 
      </td>
    </tr>

    <tr>
      <td id="table-data">
      </td>
    </tr>
  </table>
  <div id="error-message"></div>
  <div id="success-message"></div>

 </center>


  <div class="main">
     
  <a href="https://athetosic-quart.000webhostapp.com/">	<p id="logo"><i class="fa fa-music"></i>Music </p> </a>
  
         <!--show_song_number -->
        <div class="show_song_no">
          <p id="present">0</p>
          <p>/</p>
          <p id="total">0</p>
        </div>

    <!--- left part --->
     <div class="left">

      <!--- song img --->
      <img id="track_image" src="Images/error1.png" height="40">
         <div class="volume">
            <p id="volume_show">90</p>
            <i class="fa fa-volume-up" aria-hidden="true" onclick="mute_sound()" id="volume_icon"></i>
            <input type="range" style="background-color:white;" min="0" max="100" value="90" onchange="volume_change()" id="volume">
            
         </div>

     </div>
 
     <!--- right part --->
  	 <div class="right">
       <!--- song title & artist name --->
       <div class="song_detail">
           <p style=" padding-left:14%; " id="title"><!--title.mp3--></p>
           <p style=" padding-left:14%; " id="artist"><!--Artist name--></p>
       </div>

      <!--- middle part --->
  	 	<div class="middle">
  	   <button onclick="previous_song()" id="pre" name="pre"><i class="fa fa-step-backward" aria-hidden="true"></i></button> 
      	   <button onclick="justplay()" id="play"><i class="fa fa-play" aria-hidden="true"></i></button>
  	     <button onclick="next_song()" id="next" name="next "><i class="fa fa-step-forward" aria-hidden="true"></i></button>
  	   </div>

       <!--- song duration part --->
        <div class="duration">
           <input type="range" style="background-color:white;" min="0" max="100" value="0" id="duration_slider" onchange="change_duration()">
           <button id="auto" onclick="autoplay_switch()">Auto &nbsp;<i class="fa fa-circle-o-notch" aria-hidden="true"></i></button>
        </div>
           
  	</div>


  </div>
 
 <br><br>
 
<a href="login.php"><button style="font-size:20px; ">login</button></a>
<!--<h3><a href="searchbar.php" >Download Music</a></h3>-->

</center>

<br><br><br>

<h3 style=" padding-left:12%; ">Language</h3>
<br>

<center>
<div class="con">
<div class="contf">
        
    <div class="container">
    <a href="index.php?language=HINDI"><img class="image" src="Images/1-1.JPEG" ></a>
    <div class="middle1">
    <div class="text">हिंदी</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?language=ENGLISH"><img class="image" src="Images/1-2.JPEG" ></a>
    <div class="middle1">
    <div class="text">English</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?language=GUJARATI"><img class="image" src="Images/1-3.JPEG" ></a>
    <div class="middle1">
    <div class="text">ગુજરાતી </div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?language=PANGABI"><img class="image" src="Images/1-4.JPEG" ></a>
    <div class="middle1">
    <div class="text">ਪੰਜਾਬੀ</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?language=HINDI AND ENGLISH MIX"><img class="image" src="Images/1-5.JPEG" ></a>
    <div class="middle1">
    <div class="text">MIX TAPE</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?language=HINDI AND GUJARATI MIX"><img class="image" src="Images/1-6.JPEG" ></a>
    <div class="middle1">
    <div class="text">MIX TAPE</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?language=GUJARATI AND ENGLISH MIX"> <img class="image" src="Images/1-7.JPEG" ></a>
    <div class="middle1">
    <div class="text">MIX TAPE</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?language=HINDI AND PANGABI MIX"> <img class="image" src="Images/1-8.JPEG" ></a>
    <div class="middle1">
    <div class="text">MIX TAPE</div>
    </div>
    </div>
                
        
</div>
</div>
</center>
    
    
<br><br>
<h3 style=" padding-left:12%; ">Year</h3>
<br>


<center>
    
<div class="con">
<div class="contf">
    
    <div class="container">
    <a href="index.php?year=1980"><img class="image" src="Images/plylist.jpg" ></a> 
    <div class="middle1">
    <div class="text">1980</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?year=1990"><img class="image" src="Images/plylist.jpg" ></a> 
    <div class="middle1">
    <div class="text">1990</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?year=1995"><img class="image" src="Images/plylist.jpg" ></a> 
    <div class="middle1">
    <div class="text">1995</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?year=2000"><img class="image" src="Images/plylist.jpg" ></a>
    <div class="middle1">
    <div class="text">2000</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?year=2005"><img class="image" src="Images/plylist.jpg" ></a>
    <div class="middle1">
    <div class="text">2005</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?year=2010"><img class="image" src="Images/plylist.jpg" ></a>
    <div class="middle1">
    <div class="text">2010</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?year=2015"><img class="image" src="Images/plylist.jpg" ></a>
    <div class="middle1">
    <div class="text">2015</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?year=2020"><img class="image" src="Images/plylist.jpg" ></a>
    <div class="middle1">
    <div class="text">2020</div>
    </div>
    </div>
        

        
</div>
</div>
</center>
    
    <br><br>
    
    
</center>
    <h3 style=" padding-left:12%; ">Singer</h3><br>
<center>
        
<div class="con">
<div class="contf">    
    
    
    <div class="container">
    <a href="index.php?singer=Arijit Singh"><img class="image" src="Images/arijit.jpg" ></a> 
     <div class="middle1">
      <div class="text">Arijit Singh</div>
    </div>
    </div>

    <div class="container">
    <a href="index.php?singer=Kishore Kumar"><img class="image" src="Images/kishor.jpg" ></a>  
    <div class="middle1">
    <div class="text">Kishore Kumar</div>
    </div>
    </div>

    <div class="container">
    <a href="index.php?singer=Mohammad Rafi"><img class="image" src="Images/rafi.jpg" ></a> 
    <div class="middle1">
    <div class="text">Mohammad Rafi</div>
    </div>
    </div>

    <div class="container">
    <a href="index.php?singer=Lata Mangeshkar"> <img class="image" src="Images/latam.jpg" ></a>   
    <div class="middle1">
    <div class="text">Lata Mangeshkar</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?singer=Asha Bhosale"> <img class="image" src="Images/asha.jpg"  ></a>
    <div class="middle1">
    <div class="text">Asha Bhosale</div>
    </div>
    </div>
    
    <div class="container">
    <a href="index.php?singer=Udit Narayan"><img class="image" src="Images/udit.jpg"  ></a>  
    <div class="middle1">
    <div class="text">Udit Narayan</div>
    </div>
    </div>

    <div class="container">
    <a href="index.php?singer=Alka Yagnik"><img class="image" src="Images/alka.jpg"  ></a> 
    <div class="middle1">
    <div class="text">Alka Yagnik</div>
    </div>
    </div>

    <div class="container">
    <a href="index.php?singer=Sonu Nigam"> <img class="image" src="Images/sonu.jpg" ></a>   
    <div class="middle1">
    <div class="text">Sonu Nigam</div>
    </div>
    </div>

</div>
</div>


<br><br><br>
</center>
</body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    // Load Table Records
    function loadTable(){
      $.ajax({
        url : "ajax-load.php",
        type : "POST",
        success : function(data){
          $("#table-data").html(data);
        }
      });
    }
    loadTable(); // Load Table Records on Page Load

    // Insert New Records
    $("#save-button").on("click",function(e){
      e.preventDefault();
      var fname = $("#fname").val();
      var lname = $("#lname").val();
      if(fname == "" || lname == ""){
        $("#error-message").html("All fields are required.").slideDown();
        $("#success-message").slideUp();
      }else{
        $.ajax({
          url: "ajax-insert.php",
          type : "POST",
          data : {first_name:fname, last_name: lname},
          success : function(data){
            if(data == 1){
              loadTable();
              $("#addForm").trigger("reset");
              $("#success-message").html("Data Inserted Successfully.").slideDown();
              $("#error-message").slideUp();
            }else{
              $("#error-message").html("Can't Save Record.").slideDown();
              $("#success-message").slideUp();
            }

          }
        });
      }

    });

    //Delete Records
    $(document).on("click",".delete-btn", function(){
      if(confirm("Do you really want to delete this record ?")){
        var studentId = $(this).data("id");
        var element = this;

        $.ajax({
          url: "ajax-delete.php",
          type : "POST",
          data : {id : studentId},
          success : function(data){
              if(data == 1){
                $(element).closest("tr").fadeOut();
              }else{
                $("#error-message").html("Can't Delete Record.").slideDown();
                $("#success-message").slideUp();
              }
          }
        });
      }
    });

    //Show Modal Box
    $(document).on("click",".edit-btn", function(){
      $("#modal").show();
      var studentId = $(this).data("eid");

      $.ajax({
        url: "load-update-form.php",
        type: "POST",
        data: {id: studentId },
        success: function(data) {
          $("#modal-form table").html(data);
        }
      })
    });

    //Hide Modal Box
    $("#close-btn").on("click",function(){
      $("#modal").hide();
    });

    //Save Update Form
      $(document).on("click","#edit-submit", function(){
        var stuId = $("#edit-id").val();
        var fname = $("#edit-fname").val();
        var lname = $("#edit-lname").val();

        $.ajax({
          url: "ajax-update-form.php",
          type : "POST",
          data : {id: stuId, first_name: fname, last_name: lname},
          success: function(data) {
            if(data == 1){
              $("#modal").hide();
              loadTable();
            }
          }
        })
      });

    // Live Search
     $("#search").on("keyup",function(){
       var search_term = $(this).val();

       $.ajax({
         url: "ajax-live-search.php",
         type: "POST",
         data : {search:search_term },
         success: function(data) {
           $("#table-data").html(data);
         }
       });
     });
  });
</script>


 
  <!--- Add javascript file --->
 <script >
let previous = document.querySelector('#pre');
let play = document.querySelector('#play');
let next = document.querySelector('#next');
let title = document.querySelector('#title');
let recent_volume= document.querySelector('#volume');
let volume_show = document.querySelector('#volume_show');
let slider = document.querySelector('#duration_slider');
let show_duration = document.querySelector('#show_duration');
let track_image = document.querySelector('#track_image');
let auto_play = document.querySelector('#auto');
let present = document.querySelector('#present');
let total = document.querySelector('#total');
let artist = document.querySelector('#artist');



let timer;
let autoplay = 0;

let index_no = 0;
let Playing_song = false;

//create a audio Element
let track = document.createElement('audio');


//All songs list

<?php
error_reporting(0);
session_start();
  $la=$_GET['language'];
  $ye=$_GET['year'];
  $si=$_GET['singer'];
	$server ="localhost";
    $username ="root";
    $password ="";
	$con =mysqli_connect($server,$username,$password) or  die("connected failed".mysqli_connect_error);
if(isset($_GET['language']))
{
	$sql="SELECT * FROM  `id17275816_music`.`music` where language='{$la}'";
	 
}
elseif(isset($_GET['year']))
{
    $sql="SELECT * FROM  `id17275816_music`.`music` where year='{$ye}'";
}    
elseif(isset($_GET['singer']))
{
     $sql="SELECT * FROM  `id17275816_music`.`music` where singer='{$si}'";
}
elseif(isset($_GET['num']))
{
    $num=$_GET['num'];
    $sql="SELECT * FROM  `id17275816_music`.`music` WHERE Id='{$num}'";

}
else
{
     $sql="SELECT * FROM  `id17275816_music`.`music` ";
}
$result=mysqli_query($con,$sql) or die("error");
        if(mysqli_num_rows($result)>0 )
        {
           $i=0;
            while($row=mysqli_fetch_assoc($result))
            {
               $song[$i]="upload/".$row['mpfile'];
               $image[$i]="upload/".$row['image'];
               $name[$i]=$row['name'];
               $singer[$i]=$row['singer'];
               $i++;
            }
          }
?>


 let x = "<?php echo $i ?>"
 




let All_song = [
   {
     name: "",
     path: "",
     img: "",
     singer: ""
   },
   {
     name: "",
     path: "",
     img: "",
     singer: ""
   },
   {
     name: "",
     path: "",
     img: "",
     singer: ""
   },
   {
     name: "",
     path: "",
     img: "",
     singer: ""
   },
   {
     name: "",
     path: "",
     img: "",
     singer: ""
   },
   {
     name: "",
     path: "",
     img: "",
     singer: ""
   },
   {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
    name: "",
    path: "",
    img: "",
    singer: ""
  },
  {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 },
 {
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
{
  name: "",
  path: "",
  img: "",
  singer: ""
},
 {
   name: "",
   path: "",
   img: "",
   singer: ""
 }
   
];





var users = <?php echo json_encode($song); ?>;
var image2 = <?php echo json_encode($image); ?>;
var name2 = <?php echo json_encode($name); ?>;
var name3 = <?php echo json_encode($singer); ?>;
  All_song.length=x;
//  alert(All_song.length);	

for (let i = 0; i < x; i++) {

  All_song[i].name=name2[i];
  All_song[i].path=users[i];
//   alert( "<?php echo $i; ?>");
  
  
  <?php $j=$j+1; ?>
  All_song[i].img=image2[i];
  All_song[i].singer=name3[i];
//   alert(All_song[i].img=image2[i]);
//   alert(All_song[i].path=users[i]);
// 	alert(All_song[i].path);	
  }
// All functions


// function load the track
function load_track(index_no){
	clearInterval(timer);
	reset_slider();
	
	track.src = All_song[index_no].path;
	 title.innerHTML = All_song[index_no].name;	
	track_image.src = All_song[index_no].img;
    artist.innerHTML = All_song[index_no].singer;
    track.load();

	timer = setInterval(range_slider ,1000);
	total.innerHTML = All_song.length;
	present.innerHTML = index_no + 1;
}

load_track(index_no);


//mute sound function
function mute_sound(){
	track.volume = 0;
	volume.value = 0;
	volume_show.innerHTML = 0;
}


// checking.. the song is playing or not
 function justplay(){
 	if(Playing_song==false){
 		playsong();

 	}else{
 		pausesong();
 	}
 }


// reset song slider
 function reset_slider(){
 	slider.value = 0;
 }

// play song
function playsong(){
  track.play();
  Playing_song = true;
  play.innerHTML = '<i class="fa fa-pause" aria-hidden="true"></i>';
}

//pause song
function pausesong(){
	track.pause();
	Playing_song = false;
	play.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';
}


// next song
function next_song(){
	if(index_no < All_song.length - 1){
		index_no += 1;
		load_track(index_no);
		playsong();
	}else{
		index_no = 0;
		load_track(index_no);
		playsong();

	}
}


// previous song
function previous_song(){
	if(index_no > 0){
		index_no -= 1;
		load_track(index_no);
		playsong();

	}else{
		index_no = All_song.length;
		load_track(index_no);
		playsong();
	}
}


// change volume
function volume_change(){
	volume_show.innerHTML = recent_volume.value;
	track.volume = recent_volume.value / 100;
}

// change slider position 
function change_duration(){
	slider_position = track.duration * (slider.value / 100);
	track.currentTime = slider_position;
}

// autoplay function
function autoplay_switch(){
	if (autoplay==1){
       autoplay = 0;
       auto_play.style.background = "rgba(255,255,255,0.2)";
	}else{
       autoplay = 1;
       auto_play.style.background = "#148F77";
	}
}


function range_slider(){
	let position = 0;
        
        // update slider position
		if(!isNaN(track.duration)){
		   position = track.currentTime * (100 / track.duration);
		   slider.value =  position;
	      }

       
       // function will run when the song is over
       if(track.ended){
       	 play.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';
           if(autoplay==1){
		       index_no += 1;
		       load_track(index_no);
		       playsong();
           }
	    }
     }
  </script>

 
<?php echo $id; ?>
</html>