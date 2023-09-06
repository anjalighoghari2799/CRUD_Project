<?php

include_once 'connection.php';

//   if($conn)
//   {
//     echo "DATABASE CONECTED SUCSESSFULLY....";
// }
// else{
//       echo "DATABASE NOT CONECTED SUCSESSFULLY....";
//   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updatedada</title>

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-5/css/all.css" integrity="sha512-hfVul4ZiNO3U3dM4bwj4/dse2gq0mYM/zIIard7e9dc6raAJ3AEvskqwTWqCCORShcoFh+N1GUbgxoDb2ytuow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
<body>

       
<form action="updatedata.php" method="POST">
   <div class="container">
    <h2 class="py-3 text-center">Update Form</h2>
    <div class="row py-3">
    
    
    <?php

 $std_id=$_GET['id'];


 $query = "SELECT * FROM `info` WHERE id=$std_id";
  $result =  mysqli_query($conn,$query);
if(mysqli_num_rows($result))
{
     while($row=mysqli_fetch_assoc($result))
   {
?>
  <div class="form-group">
    <label>Name:</label><br>
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
  <input type="text" class="form-control" name="s_name" value="<?php echo $row['s_name']; ?>"/>

</div>

<div class="form-group">
<?php
    
    $query = "SELECT * FROM city;"
    or die("Query errorr..");

     $result =  mysqli_query($conn,$query) or die("Result eroor..");

    if(mysqli_num_rows($result))
    {
    ?>
    <label>Select the city:</label><br>
  <select name="city" id="" class="form-control">
    <option >SELECT THE CITY </option>
  <?php
  
  while($row1=mysqli_fetch_assoc($result))
  {
    $selected="";

    if($row1['c_id']==$row['city']){
      $selected="selected";
    }
  ?>
  
    <option value="<?php echo $row1['c_id'];?>"   <?php echo $selected ?> > <?php echo $row1['c_name'];?></option>
    <?php }?>
  </select>
  <?php } ?>
</div>
<div class="form-group">
  <label>Email:</label><br>
<input type="email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="enter your email like .....@gamil.com" name="email"/>

</div>

<div class="form-group">
    <label>Phone No:</label><br>

  <input type="number" class="form-control" name="phoneno" value="<?php echo $row['phoneno']; ?>">
  </div>


  <div class="form-group">
  <?php
  $query = "SELECT * FROM course;"
    or die("Query errorr..");

     $result =  mysqli_query($conn,$query) or die("Result eroor..");

    if(mysqli_num_rows($result))
    {
      
      ?>
  <label>SELECT THE COUSERS:</label><br>
  <select name="course" id="" class="form-control">

    
     <label>seletct the course:</label><br>
 
      <?php   
      
      while($row1=mysqli_fetch_assoc($result))
  {
    $selected="";

    if($row1['co_id']==$row['course']){
      $selected="selected";
    }

      ?>
     
  <option value="<?php echo $row1['co_id'];?>" <?php echo $selected ?>><?php echo $row1['co_name'];?></option>
  <?php }?>
  
</select>
<?php  } ?>
</div>

<label>Gender:</label><br>

<div class="form-control">
  <?php
  
  
  ?>
<input value="1" type="radio" class="form-check-input" name="gender" <?php if($row['gender']=="1"){ echo "checked";}?>>
<label for="" class="form-check-label" >Male</label><br>
<input value="2" type="radio" class="form-check-input" name="gender" <?php if($row['gender']=="2"){ echo "checked";}?>>
<label for="" class="form-check-label">Female</label>

</div>
&nbsp;
<div class="form-group text-center">
  <input type="submit" class="submit btn btn-primary" value="UPDATE"/>
</div>
  


</form>
<?php
}
}
?>

      </body>
      </html>
