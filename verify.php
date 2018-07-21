<?php
$userid = $_GET['id'];
require 'config.php';



$result = mysqli_query($con,"SELECT * FROM `signup` WHERE `hash`='$userid'") or die("Cannot connect to database!");
$user_count = mysqli_num_rows($result);
if ($user_count!=0) {
    $sql = mysqli_query($con,"UPDATE `signup` SET `active`= 1 WHERE `hash`= '".$userid."' ");
    echo "<script> alert('Verification Successful! Now you can login and continue.All the best.');window.location='http://test.upescsi.in/coderslegacy15/index.php'; </script>";
}
