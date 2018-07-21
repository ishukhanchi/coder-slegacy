<?php
require 'config.php';
	$u="";$p="";$e="";$b="";$c="";$m="";
$u=trim($_POST['name']);
$p=trim($_POST['pwd']);
$c=trim($_POST['college']);
$b=trim($_POST['branch']);
$m=trim($_POST['phone']);
$e=trim($_POST['email']);
$hash = md5( rand(0,1000) );

$url = "http://test.upescsi.in/coderslegacy15/verify.php?id=$hash";


$message =  <<<EOD
"<p><img src="https://avatars0.githubusercontent.com/u/12233893?v=3&amp;s=200" alt="logo" width="104" height="104" /></p>
<h1><span style="color: #0000ff;">UPES CSI</span></h1>
<p>&nbsp;</p>
<p><span style="color: #000000;">Hi There!</span></p>
<p>&nbsp;</p>
<p>We received a request to add your email ID&nbsp;</p>
<p><a href="$url">Click here</a>&nbsp;to confirm this email ID. Ignore if you did not initiate the request.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>UPES-CSI&nbsp;Care Team</p>
<h1>&nbsp;</h1>"
EOD;
	
$f=false;
  $errMsg1=$errMsg2=$errMsg3=$errMsg4=$errMsg6=$errMsg7=$errMsg8="";
if (!preg_match("/^[a-zA-Z ]*$/",$u)) 
{
	$errMsg1= "Only letters and white space allowed in name.";
    $f=	true;
}
if( strlen($p) < 6 ) 
	{$errMsg2= "Password must be atleast of 6 characters.";
	$f=true;
	}

// Password must be strong
//if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', $p)) 
//{$errMsg2 = "Password must be at least 6 characters and must contain at least one lower case letter, one upper case letter and one digit";$f=true;}


//check for valid email 

               
if (!filter_var($e, FILTER_VALIDATE_EMAIL)) 
 {$emailMsg = "Invalid email format.";
 $f=true;
	}	  

//check if the number field is numeric
  if(is_numeric($m) == false)
  {$errMsg4=  " Please enter only numeric values as contact number.";
        $f=true;
	}
  
 
  if(strlen($m)<10)
  {$errMsg6=  "Contact Number should be of ten digits.";
        $f=true;
	}
	
	if (!preg_match("/^[a-zA-Z ]*$/",$b)) 
{
	$errMsg7= "Only letters and white space allowed in branchname.";
    $f=	true;
}
if (!preg_match("/^[a-zA-Z ]*$/",$c)) 
{
	$errMsg8= "Only letters and white space allowed in collegename.";
    $f=	true;
}
if($f==true)
{  echo "<script> alert('$errMsg1$errMsg2$errMsg3$errMsg4$errMsg6$errMsg7$errMsg8');window.location='index.php'; </script>";
}
else{

	$q="insert into signup( name,password, college, branch, phone, email,hash) values( '$u','$p','$b','$c',$m,'$e','$hash')";
	$m="insert into user (email,level) values ('$e','1')";
$res=mysqli_query($con,$q);
$res1=mysqli_query($con,$m);
if(!($res && $m)){
    echo mysqli_error()."Error";
}
  date_default_timezone_set('Etc/UTC');

require 'lib/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = 0;

$mail->Debugoutput = 'html';

$mail->Host = 'upescsi.in';
$mail->Port = 25; 
$mail->SMTPSecure = '';
$mail->SMTPAuth = true;
$mail->Username = "csitech@upescsi.in";
$mail->Password = "upescsi123";
$mail->setFrom('csitech@upescsi.in', 'UPES-CSI');
$mail->addReplyTo('csitech@upescsi.in', 'UPES-CSI');
$mail->addAddress( $e, $u);
$mail->Subject = 'Email Verification';
$mail->Body    = $message;
$mail->AltBody = 'Whatever'; 
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "CHECK YOUR MAIL.";
    header('Location:./index.php');
}  
    

}
                           
                              
                            
?>