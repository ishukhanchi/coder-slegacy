<?php
include 'config.php';

session_start();
 
?>


<!DOCTYPE html>
<html lang="en">


<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/js/jquery.min.js"></script>

<style>
/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
	align:center;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.action-button
{
	position: relative;
	padding: 10px 40px;
  margin: 0px 10px 10px 0px;
  float: left;
	border-radius: 5px;
	font-family: 'verdena';
	font-size: 25px;
	color: #FFF;
	text-decoration: none;
}

.blue
{
	background-color: #3498DB;
	border-bottom: 5px solid #2980B9;
	text-shadow: 0px -2px #2980B9;
}
#col-sm-8{
       min-height: 400px;
	   width=100px;
   }

input::-webkit-input-placeholder {
color: black !important;
}
.button1 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
	border-radius:8px;
}

.button2:hover {
    background-color: #4CAF50;
    color: white;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
	border-radius:8px;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}
.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
	border-radius:8px;
}

.button5:hover {
    background-color: #555555;
    color: white;
	}
	.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}
</style>
<!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title>Coder's Legacy | UPES-CSI</title>
	<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
	
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/csilogo.png">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

 </head>

  <body>
  <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-3">
                        <div class="logo">
                           <img src="images/csilogo.png" style="width:25px;height:25px;" ;> <a href="http://www.upescsi.in">UPES-CSI</a>
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                       <!-- <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                        </li>-->
                                        <li><a class="smoth-scroll" href="logout.php">Log Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="home-section-background" data-stellar-background-ratio="0.6">
		<div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="header-text">
                                    
                                    <h1> <p style="font-size:40px">LEVEL 1</p> </h1>
									
                                    <?php
                                    
                                     if(isset($_SESSION['user_id']))
                                              {
                                             $level=mysqli_query($con,"SELECT * From user where user_id=".$_SESSION['user_id']."");
                                      if(!$level){
                                     echo mysqli_error();
                                      }
                                      $row = mysqli_fetch_array($level);
                                    
                                        $num= ($row['level']);
                                                  
                                              }
                                       

                                  $sql=mysqli_query($con,"SELECT * From questions where qid = '1' ");
                                      if(!$sql){
                                     echo mysqli_error();
                                      }
                                      $row = mysqli_fetch_array($sql);
                                    ?>
                                    
                                    <h1> <p style="font-size:20px"><?php echo $row['que']; ?></p> </h1>
                                    
                                  
								  <br><br><br>
  
    <div class="col-sm-8" id="col-sm-8" align="left"  >
	</div>
	 <form method="POST" action="run.php">
    <textarea name="txtarea" type="hidden" placeholder="Write your code here" id="txtarea5" cols="60" rows="10000000" class="form-control1" style="display:none"></textarea>
     <font color="white"><?php $abc= $row['qid']; ?></font>
	<input type="hidden" name="qid" value="<?php echo $abc; ?>"  >
	<input type="hidden" name="num" value="<?php echo $num; ?>"  >
	<?php $flag=0;?>
	<input type="hidden" name="flag" value="<?php echo $flag; ?>"  >
	<font color="black">
	<input type="text" name="input" id="input"  style="position:relative;top:50px;left:90px; width:220px; height:60px; background-color: white; border-radius:8px;" color:"black"; placeholder="INPUT" ></font>
 </font> <br><br>
  <select name="lang" class="button1 button3" style=" position:relative;top:50px;left:92px; width:220px; height:60px;">
<font size="4.5" color="black" face="Comic Sans MS"><strong>
<center><option disabled selected value><b>LANGUAGE</b></option></center>
<option value="C"><b>C(gcc) </b></option>
<option value="CPP"><b>C++(g++)</option></b></option>
<option value="JAVA"><b>Java</b></option>
</strong></font>
</select><br><br>
<button class="button1 button2" type="submit" formtarget="_blank" value="submit" style=" position:relative;top:50px;left:90px; width:220px;height:60px;">Compile And Run</button>
</div>
<br>
<button type="submit" class="button1 button5" formaction="submit.php" style=" position:relative;top:50px;left:90px; width:220px; height:60px; ">SUBMIT</button>                                         
                                              
								  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
	
	
	<!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
      
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
        



    <script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        
    var editor = ace.edit("col-sm-8");
    editor.setTheme("ace/theme/dreamweaver");
    editor.getSession().setMode("ace/mode/c_cpp");
    editor.getSession().on('change', function () {
      document.getElementById("txtarea5").value= editor.getSession().getValue(); 
 
   });

   document.getElementById("txtarea5").value=editor.getSession().getValue();
    
</script>

<script>
function show_alert() {
    document.getElementById("txtarea5").value= editor.getSession().getValue(); 

</script>

    </body>


</html>
