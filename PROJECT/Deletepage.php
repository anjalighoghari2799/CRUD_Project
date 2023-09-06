<?php
include_once 'connection.php';


$stuid=$_GET['id'];
$query="DELETE FROM `info` WHERE id='$stuid'";
$result=mysqli_query($conn,$query);
if($result)
{
    header("location:tabledata.php");

}else
{
    echo"Data not Deleted";
}







?>