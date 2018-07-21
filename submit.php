<?php

include 'config.php';//Import the SDK 
include 'sdk/index.php';
//include 'time.php';

session_start();
//Setting up the Hackerearth API
$source = $_POST['txtarea'];
$input= $_POST['input'];
$lang=$_POST['lang'];
 
$hackerearth = Array(
		'client_secret' => '59680d0f67f0391c31ded1f4f1756b7c2576febf', //(REQUIRED) Obtain this by registering your app at http://www.hackerearth.com/api/register/
        'time_limit' => '5',   //(OPTIONAL) Time Limit (MAX = 5 seconds )
        'memory_limit' => '262144'  //(OPTIONAL) Memory Limit (MAX = 262144 [256 MB])
	);
//Feeding Data Into Hackerearth API
$config = Array();
$config['time']='5';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
$config['memory']='262144'; //(OPTIONAL) Your memory limit in integer and in unit kb
$config['source']=$source;    	//(REQUIRED) Your formatted source code for which you want to use hackerEarth api, leave this empty if you are using file
$config['input']=$input;                          	//(OPTIONAL) formatted input against which you have to test your source code
$config['language']=$lang;  //(REQUIRED) Choose any one of the below
						 	// C, CPP, CPP11, CLOJURE, CSHARP, JAVA, JAVASCRIPT, HASKELL, PERL, PHP, PYTHON, RUBY
//Sending request to the API to compile and run and record JSON responses
$response = run($hackerearth,$config);     // Use this $response the way you want , it consists data in PHP Array
//Printing the response
//echo"<pre>".print_r($response,1)."</pre>";

$qid=$_POST['qid'];
$user_id = $_SESSION['user_id'];
$num=$_POST['num'];
$time=mysqli_real_escape_string($con,$response['run_status']['time_used']);
$memory =mysqli_real_escape_string($con,$response['run_status']['memory_used']);
$slink =  mysqli_real_escape_string($con,$response['web_link']);
$flag=$_POST['flag'];
date_default_timezone_set ("Asia/Calcutta");
$subtime = time();
 

if($response['compile_status']=='OK'){
$sql=mysqli_query($con,"INSERT INTO submissions VALUES('$qid','$user_id','$slink','$lang','$source','$time','$memory','$subtime')");

}
else{
$level=mysqli_query($con,"SELECT * From user where user_id=".$_SESSION['user_id']."");
$row = mysqli_fetch_array($level);
$num= ($row['level']);
$x=($row['score']);
if($num>=2)
    {
            if($x==1)
            {
             echo "<script>alert('Not Compiled');window.location='level2a.php';</script>"; 
            }
            elseif($x==2)
            {
            echo "<script>alert('Not Compiled');window.location='level2b.php';</script>";
            }
     else
     {echo "<script>alert('Not Compiled');window.location='home2.php';</script>";}
           
	}
    else
    {
   echo "<script>alert('Not Compiled');window.location='level1.php';</script>";
    }
}
if($sql){
$num=$num+1;
$query = mysqli_query($con,"UPDATE user SET level = $num WHERE user_id=".$_SESSION['user_id']."");
mysqli_query($con,$query);
        echo "<script>alert('Your answer is recorded ');window.location='home2.php'</script>";

		}
    else{
if($flag==0)
	{echo "<script>alert('Error Occured.Please Try Again.');window.location='level1.php';</script>";
	}
	else if($flag==1)
	{
	echo "<script>alert('Error Occured.Please Try Again.');window.location='level2a.php';</script>";
	}
	else if($flag==2)
	{
	echo "<script>alert('Error Occured.Please Try Again.');window.location='level2b.php';</script>";
	}
		echo mysqli_error($con);
    }

?>