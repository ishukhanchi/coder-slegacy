<!DOCTYPE html>
<html lang="en">

  <head>
  <style>
/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	text-align: center;
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
    margin: 3% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 45%; /* Could be more or less, depending on screen size */
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
    
    
	
	<!-- Preloader Start -->
    <div id="preloader">
	  <div class="loader"></div>
    </div>
    <!-- Preloader End -->

    
    
    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-4">
                        <div class="logo">
                             <img src="images/csilogo.png" style="width:60px;height:60px;">   <a href="http://www.upescsi.in">UPES-CSI</a>
                        </div>
                    </div>
                    
                    <div class="col-sm-8">
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
                                        <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#about">About Us</a>
                                        </li>
                                         <li><a class="smoth-scroll" href="#rules">Rules</a>
                                         </li>
                                        <li><a class="smoth-scroll" href="#contact">Contact</a>
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
                                    <p style="font-size:50px ">CODER'S LEGACY</p>
                                    <h2><span class="typing" style="font-size:20pt"></span></h2>
                                    
                                    <div class="margin-top-60">
                          <a class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">REGISTER</a>
                          <a class="button button-style button-style-icon1 fa fa-long-arrow-left smoth-scroll" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN IN</a>        
                                    </div>
								  

<div id="id01" class="modal" >

  <form class="modal-content animate" action="signup.php" method="post" style= "background-color: ##ffffff;">
    <div class="imgcontainer" >
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
<div class="social-wrap a" id="wrapper" >
 <center><br>
  <h1>Sign Up</h1>
  <div class="container">

<form action="signup.php" method="post">
<center><table border="0">
<tr>
<td style="width:auto;position:relative;right:220px;bottom:2px; ">Name:</td><td style="width:auto;position:relative;right:290px;bottom:2px; "><input type="text" name="name" placeholder="Name" required=" Enter your name"/></td></center></tr>
<tr><td style="width:auto;position:relative;right:220px;bottom:2px; ">Password:</td><td style="width:auto;position:relative;right:290px;bottom:2px; "> <input type="password" name="pwd" placeholder="Password(Atleast 6 char)" required=" "/></td>
</tr>
<tr>
<td style="width:auto;position:relative;right:220px;bottom:2px;">Branch:</td><td style="width:auto;position:relative;right:290px;bottom:2px; "><input type="text" placeholder="Branch"  name ="branch" required=" "/></td></tr>
<tr>
<td style="width:auto;position:relative;right:220px;bottom:2px;">College:</td><td style="width:auto;position:relative;right:290px;bottom:2px; "><input type="text" placeholder="College"  name ="college" required=" "/></td>
</tr>
<tr>
<td style="width:auto;position:relative;right:220px;bottom:2px;">Contact:</td><td style="width:auto;position:relative;right:290px;bottom:2px; "><input type="text" name="phone" pattern="[789][0-9]{9}"  placeholder="Contact Number" required=" "/></td>
</tr>
<tr>
<center><tr><td style="width:auto;position:relative;right:220px;bottom:2px;">Email:</td><td style="width:auto;position:relative;right:290px;bottom:2px; "> <input type="email"class="email" id="e1" name="email" placeholder=" Email" required=" "/></td></tr></center>
<tr>

<td></td><col width="100" height="50"><td><input class="action-button shadow animate blue" type="Submit" value="Register" style="width:auto;position:relative;left:-100px;bottom:2px; top:14px; "></td>
</tr>
</tr></td></table></center>
    </form>
	</div>
</div>
</div>
  </form>
</div>


<div id="id02" class="modal" >

  <form class="modal-content animate" action="logincheck.php" method="post" style= "background-color: ##ffffff;">
    <div class="imgcontainer" >
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
<div class="social-wrap a" id="wrapper" >
 <center><br>
  <h1>Sign In</h1>
  <div class="container">

<form action="logincheck.php" method="post">
<center><table border="0">
<tr>
<td style="width:auto;position:relative;right:250px;bottom:2px; ">Email:</td><td style="width:auto;position:relative;right:290px;bottom:2px; "><input type="text" name="username" placeholder="Enter your email" required=" "/></td></center></tr>
<tr><td style="width:auto;position:relative;right:250px;bottom:2px; ">Password:</td><td style="width:auto;position:relative;right:290px;bottom:2px; "> <input type="password" name="password" placeholder="Enter your Password" required=" "/></td>
</tr>
<tr>
<td></td><col width="100" height="50"><td><input class="action-button shadow animate blue" type="Submit" value="Login" style="width:auto;position:relative;left:-100px;bottom:2px; top:10px;"></td>
</tr>
</tr></td></table></center>
    </form>
	</div>
</div>
</div>
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
    <!-- Home & Menu Section End-->
    
   
    
    <!--About Us Start-->
	<section id="about"  class="about-section section-space-padding">
        <div class="container">
         <div class="row">
             <br>
             <br>
               
            <!--  <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive" src="images/bg/me.jpg" draggable="false" alt="">
              </div>-->
                <center>
              <div class="col-sm-12 text-center">
                <div class="about-me section-title">
                  
                         <h2> ABOUT US</h2> <br>
                  
                    UPES-CSI Student Chapter is one of the most active chapters of <strong>University of Petroleum and Energy Studies</strong>.<br><br>
                    This is an online event organised by UPES-CSI Student Chapter.<br><br>
                    This is a coding event based on C,C++ and JAVA. <strong> </strong>.
                    
                    <!-- <ul >
                    <li>UPES-CSI Student Chapter is one of the most active chapters of University of Petroleum and Energy Studies.</li>
                    <li>This is an online event organised by UPES-CSI Student Chapter.</li>
                    <li>The participant reaching first to the last level will be the winner.</li>
                    </ul>-->
                
                 </div>
               </div>
             </center>
              </div>
                
          </div>
       </section>
       <!--About Us End -->

    

    
    
    
     <!--Testimonial Start -->
     <section id="rules" class="testimonial-section section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>RULES</h2>
                        <p>Know the rules well,so you can play effectively.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="testimonial-carousel-list margin-top-20">
                    
                     <div class="testimonial-word text-center">
                    <!--<img src="images/testimonial/3.png" class="img-responsive" alt="">-->
                        <h2> <p style="font-size:20px"> Rule 1</p></h2>
                        <p>Event is based on C,C++ and JAVA.</p>
                    </div>
                
                    <div class="testimonial-word text-center">
                   <!--<img src="images/testimonial/1.png" class="img-responsive" alt="">-->
                        <h2> <p style="font-size:20px"> Rule 2</p></h2>
                        <p>Every level excluding first offers choice within two questions.Choose one.</p>
                    </div>
                    
                    <div class="testimonial-word text-center">
                   <!-- <img src="images/testimonial/2.png" class="img-responsive" alt="">-->
                        <h2> <p style="font-size:20px"> Rule 3</p></h2>
                        <p>Each question will have equal weightage.</p>
                    </div>
                    <div class="testimonial-word text-center">
                    <!--<img src="images/testimonial/3.png" class="img-responsive" alt="">-->
                        <h2> <p style="font-size:20px"> Rule 4</p></h2>
                        <p>C Compiler:gcc 4.8.4
					   <br>CPP Compiler:g++ 4.8.4</p>
                    </div>
                    <div class="testimonial-word text-center">
                    <!--<img src="images/testimonial/3.png" class="img-responsive" alt="">-->
                        <h2> <p style="font-size:20px"> Rule 5</p></h2>
                        <p>Only compiled code will be submitted.</p>
                    </div>
                    
                    <div class="testimonial-word text-center">
                    <!--<img src="images/testimonial/3.png" class="img-responsive" alt="">-->
                        <h2> <p style="font-size:20px"> Rule 6</p></h2>
                        <p>The one with maximum correct sumitted levels will be the winner.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->
    
    
    
      
    
    
    <!-- Call to Action Start -->
    <section id="contact" class="call-to-action section-space-padding text-center">
       <div class="container">
         <div class="row">
              <div class="section-title">
           <div class="col-md-12">   
             
             <h2>CONTACT US</h2>
             
             <div class="text-center margin-top-20">
          <!--<a class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right smoth-scroll" href="#contact">Contact Us</a>-->
          For Any Query
               </div>
               
               <br>
               
               
                <contact class="contact-section">
              <div class="container">
            <div class="row">
             
            <div class="col-md-4 text-left">
               <p style="font-size:30px">Kritika Sharma</p>
                <p style="font-size:25px" align=left>+91-9458410171</p>
               </div>
              
            <div class="col-md-4 text-center">
                <p style="font-size:30px">Ishu Khanchi</p>
                <p style="font-size:25px" align=center>+91-8171651935</p>
            </div>
                
                <div class="col-md-4  text-right">
                <p style="font-size:30px">Srima Pal</p>
                <p style="font-size:25px" align=right>+91-9758836116</p>
            </div>
             </div>
        </div>
    </contact>
            
            </div>    
          </div>
         </div>
       </section>
       <!-- Call to Action End -->
       
       
       
       
   
       </div>
       
      
       
     </section>
     <!-- Contact End -->
       
        
        
        
    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
               
     <!-- <div class="col-md-4 text-left">
       <p><span><a href="#about" class="smoth-scroll">About Us</a></span> | <span><a href="#Contact" class="smoth-scroll">Contact Us</a></span></p>
          </div>-->
		  <div class="margin-top-30"> 
       <ul class="social-icon">
         <li><a href="https://www.facebook.com/upescsi/?ref=br_rs" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
         <li><a href="https://twitter.com/upescsi" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
         <li><a href="https://www.instagram.com/upescsi/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
       </ul>
      </div>
             
            <div class="col-md-6 text-left">
               <p>© Copyright 2017 UPES-CSI.</p>
               </div>
              
            <div class="col-md-6 uipasta-credit text-right">
                <p>Design By <a href="http://www.upescsi.in" target="_blank" title="UPES-CSI">UPES-CSI</a></p>
            </div>
                
             </div>
        </div>
    </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
      
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
	<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  <script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  
  </body>
 </html>