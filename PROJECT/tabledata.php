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
    <title>Tabledata</title>

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-5/css/all.css" integrity="sha512-hfVul4ZiNO3U3dM4bwj4/dse2gq0mYM/zIIard7e9dc6raAJ3AEvskqwTWqCCORShcoFh+N1GUbgxoDb2ytuow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
<body>
    <div class="container">
        <div class="row">
            <h2 class="py-3 text-center">TABLE DATA</h2>
           
        </div>
    <?php
    
    $query = "SELECT info.id AS id, info.s_name,city.c_name AS city,info.email,info.phoneno,course.co_name AS course,gender.g_name AS gender FROM `info` JOIN city ON info.city=city.c_id JOIN course ON info.course=course.co_id 
    JOIN gender ON info.gender=gender.g_id ORDER BY `id` ;"
    or die("Query errorr..");

    // $query = "SELECT * FROM `info`";

     $result =  mysqli_query($conn,$query) or die("Result eroor..");

    if(mysqli_fetch_row($result)>1)
    {
    ?>
       
    <table class="table">
<thead>
<tr>
    
    <th scope="col">Name</th>
    <th scope="col">City</th>
    <th scope="col">Email</th>
    <th scope="col">Phone no</th>
    <th scope="col">Course</th>
    <th scope="col">Gender</th>
    <th scope="col">EDIT</th>
    <th scope="col" class ="text-danger">DELETE</th>
</tr>

</thead>
<tbody>

        <?php 
            $sr = 1;
        while($row = mysqli_fetch_assoc($result)){
        
?>
    <tr>
        <!-- <td scope="row"><?php echo $sr++;  ?></td> -->
        <td scope="row"><?php echo  $row['s_name'];  ?></td>
        <td scope="row"><?php echo  $row['city'];  ?></td>
        <td scope="row"><?php echo  $row['email'];  ?></td>
        <td scope="row"><?php echo  $row['phoneno'];  ?></td>
        <td scope="row"><?php echo  $row['course'];  ?></td>
        <td scope="row"><?php echo  $row['gender']; ?></td>
        <td scope="row">

            <a href="editpage.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit" ></i></a>
</td>
        <td scope="row">
            <a href="Deletepage.php?id=<?php echo $row['id']; ?>">
        <i class="fa fa-trash" ></i></a></td>
        
    </tr>
    <?php
        }
    ?>
    
<?php    
}


?>

</tbody>


    </table>
    <a href="RegistrationForm.php";>
    <h6 class="py-3 text-center"><button class="btn btn-outline-primary btn-lg">ADD DATA</button></h6></a>
</div>
</body>
</html>