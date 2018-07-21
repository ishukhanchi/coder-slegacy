<?php
date_default_timezone_set ("Asia/Calcutta");
$s = mktime(19,0,0,07,23,2017);
$e = mktime(00,0,0,07,24,2017);
$time = time();
if(!($s<=$time))
{
echo "<script>alert('Event Has Not Started Yet.');window.location='index.php';</script>";
} 
else if(!($time<=$e)){
 echo "<script>alert('Thank You For Your Participation!. ');window.location='index.php';</script>";
}
?>