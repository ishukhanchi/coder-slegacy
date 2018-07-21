<?php
session_start();
include 'config.php';
$email=$_POST['username'];
$pass=$_POST['password'];
$que=mysqli_query($con,"SELECT * FROM signup WHERE email='".$email."' AND password='".$pass."'") or die("Could not execute query");
$cou=mysqli_num_rows($que);
$value=mysqli_fetch_array($que);
$name=$value['name'];
$active=$value['active'];
$user_id=$value['userid'];
$num=0;

$_SESSION['user_id']=$user_id;    
$level=mysqli_query($con,"SELECT * From user where user_id=".$_SESSION['user_id']."");
/*if(!$level)
{
echo mysqli_error();
}*/

$row = mysqli_fetch_array($level);
$num= ($row['level']);
$x=($row['score']);


 




if($cou == 0)
{
	echo "<script>alert('Sorry. Wrong email-id or password. Please try again ');window.location ='index.php';</script>"; 
	//echo $cou;
	//echo $value;
}
else if( $cou!=0 && $active==0){

  echo "<script>alert('Please Verify Your Registered Email Id.');window.location ='index.php';</script>";  
}
else
{
	$_SESSION['name']=$name;
    $_SESSION['user_id']=$user_id;
    {
    if($num>=2)
    {
            if($x==1)
            {
             $path = "Location: level2a.php";   
            }
            elseif($x==2)
            {
            $path = "Location: level2b.php";
            }
     else
     {$path = "Location: home2.php";}
           
	}
    else
    {
    $path = "Location: home.php";
    }
}
    header($path);
}

 // $sql = "UPDATE user SET level = $num  WHERE user_id=".$_SESSION['user_id']."";

// mysqli_query($con,$sql);

                                                  

?>

