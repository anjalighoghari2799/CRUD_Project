<?php
include_once 'connection.php';
?>


<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <form action="savedata.php" method="POST">
   <div class="container">
    <h2 class="py-3 text-center">Registration Form</h2>
    <div class="row py-3"></div>
  <div class="form-group">
    <label>Name:</label><br>
  <input type="text" class="form-control" name="s_name">
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
  
  while($row=mysqli_fetch_assoc($result))
  {
  ?>
  
    <option value="<?php echo $row['c_id'];?>"><?php echo $row['c_name'];?></option>
    <?php }?>




  </select>
  <?php } ?>

</div>
<div class="form-group">
  <label>Email:</label><br>
<input type="email" class="form-control" placeholder="enter your email like .....@gamil.com" name="email">


</div>

<div class="form-group">
    <label>Phone No:</label><br>

  <input type="number" class="form-control" name="phoneno">
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
      while($row=mysqli_fetch_assoc($result))
      {
      ?>
     
  <option value="<?php echo $row['co_id'];?>"><?php echo $row['co_name'];?></option>
  <?php }?>
  
</select>
<?php  } ?>
</div>

<label>Gender:</label><br>

<div class="form-control">

<input value="1" type="radio" class="form-check-input" name="gender">
<label for="" class="form-check-label" >Male</label><br>
<input value="2" type="radio" class="form-check-input" name="gender">
<label for="" class="form-check-label">female</label>
<h6 class="sm">only allow female</h6>
</div>
&nbsp;
<div class="form-group text-center">
  <input type="submit" class="submit btn btn-primary" value="SAVE"/>
</div>
  


</form>

 




</body>
</html>