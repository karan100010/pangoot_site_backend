<?php

include ('db.php');
//select rooms if ty

$sql ="SELECT `no. of free rooms` FROM `room` WHERE type='Superior Room';";
$re = mysqli_query($con,$sql);
$post=array();
while($row=mysqli_fetch_array($re))
{
    
    $post[] = $row['no. of free rooms'];
    

}
//echo free_rooms;
foreach($post as $key => $value)
{
    echo $key . " => " . $value . "<br>";
}  
//sum post
$sum = array_sum($post);
echo $sum;

?>