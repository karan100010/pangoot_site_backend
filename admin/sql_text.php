<?php
$id=5;
$id1=16;
include ('db.php');
$notfree="NotFree";
$troom="Superior Room";
$bedding=300;
$nroom=1;

$rsql ="UPDATE room SET `place`='NotFree',`cusid`='$id' WHERE place='Free' AND type='$troom' LIMIT $nroom ;";								
mysqli_query($con,$rsql);
?>