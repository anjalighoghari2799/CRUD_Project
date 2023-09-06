<?php

// echo "asdas";
// die();
include_once 'connection.php';

$STUname=$_POST['s_name'];
$STUcity=$_POST['city'];
$STUemail=$_POST['email'];
$STUphoneno=$_POST['phoneno'];
$STUcourse=$_POST['course'];
$STUgender=$_POST['gender'];

$query = "INSERT INTO `info`( `s_name`, `city`, `email`, `phoneno`, `course`, `gender`) VALUES ('$STUname','$STUcity','$STUemail','$STUphoneno','$STUcourse','$STUgender');"
or die("Query errorr..");

 $result =  mysqli_query($conn,$query) or die("Result eroor..");

if($result)
{
    header("location:tabledata.php");
    }
    else{
    echo "data Not inserted";
}
?>
<a href="http://localhost/project/tabledata.php">go</a>