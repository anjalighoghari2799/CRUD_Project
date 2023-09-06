<?php

// echo "asdas";
// die();

$std_id=$_POST['id'];
$STUname=$_POST['s_name'];
$STUcity=$_POST['city'];
$STUemail=$_POST['email'];
$STUphoneno=$_POST['phoneno'];
$STUcourse=$_POST['course'];
$STUgender=$_POST['gender'];

include_once 'connection.php';
  $query = "UPDATE info SET s_name='{$STUname}', city='{$STUcity}',email='{$STUemail}',phoneno='{$STUphoneno}',course='{$STUcourse}',gender='{$STUgender}' WHERE id='$std_id'";

 $result =  mysqli_query($conn,$query) or die("Result eroor..");

if($result)
{
    header("location:tabledata.php");
    }
    else{
    echo "data Not updated";
}
?>
<a href="http://localhost/project/tabledata.php">go</a>