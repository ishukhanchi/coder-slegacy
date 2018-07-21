<?php
session_start();
include 'config.php';
?>
<?php
                                    
                                     if(isset($_SESSION['user_id']))
                                              {
                                             $level=mysqli_query($con,"SELECT * From user where user_id=".$_SESSION['user_id']."");
                                      if(!$level){
                                     echo mysqli_error();
                                      }
                                      $row = mysqli_fetch_array($level);
                                        $num= ($row['level']*1);
                                         $num1= ($row['level']*11);         
                                                  
                                              }
											  if($row['level']>10)
											  {
											  session_destroy();
											  echo "<script>alert('Thank You For Participation');window.location='index.php';</script>";
											  }
											  else
											  {
                                       ?>



<!DOCTYPE html>
<html lang="en">

  <head>
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
    
    <script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
    <title>Coder's Legacy | UPES-CSI</title>
	
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/csilogo.png">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
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

                                    
                                    
                                     <h1> <p style="font-size:40px">LEVEL <?php echo $row['level']; ?></p> </h1>
									
                                    <?php
                                    
                                
                                  $sql=mysqli_query($con,"SELECT * From questions where qid = '$num' ");
                                      if(!$sql){
                                     echo mysqli_error();
                                      }
                                      $row1 = mysqli_fetch_array($sql);
                                    
                                    
                                     $sql1=mysqli_query($con,"SELECT * From questions where qid = '$num1' ");
                                      if(!$sql1){
                                     echo mysqli_error();
                                      }
                                      $row2 = mysqli_fetch_array($sql1);
                                  ?>
                                    
                                    
                                    <h1> <p style="font-size:20px">CHOOSE ANY OF THE OPTION</p> </h1>
                            
                                      <div class="margin-top-60">
                                          <form method="POST"  action="level2.php">
                          <a class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll" type="submit" href="level2a.php" style="width:auto;"><?php echo $row1['title'] ?></a>
                          <a class="button button-style button-style-icon1 fa fa-long-arrow-left smoth-scroll" type="submit" href="level2b.php" style="width:auto;"><?php echo $row2['title'] ?><a>
                              <?php
									   $x=0; 
                                $option = "UPDATE user SET score = $x  WHERE user_id=".$_SESSION['user_id']."";

                                 mysqli_query($con,$option);
                                  
                              ?>
                              
                         
                                </form>
								  </div>
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
	
  
  </body>
 </html>
<?php
}
?>