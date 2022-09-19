<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>crud operation</title>
</head>

<body>


    <div class="container">
        <button class="btn-primary my-5"><a href="post_insert.php" class="text-light">Add user</a></button>
        <button class="btn-primary my-5"><a href="export.php" class="text-light">export</a></button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">user id</th>
                    <th scope="col">content</th>
                    <th scope="col">username</th>
                    <th scope="col">phone</th>
                    <th scope="col">catogary</th>

                </tr>
            </thead>
            <tbody>

                <?php

       $sql=" SELECT * FROM posts INNER JOIN crud
       ON posts.user_id = crud.id
       INNER JOIN catagory
       ON posts.user_id = catagory.catagory_id";
       $result=mysqli_query($con,$sql);

     if($result){
    
     while($row=mysqli_fetch_assoc($result)){
         $id=$row['id'];
         $title=$row['title'];
         $user_id=$row['user_id'];
         $content=$row['content'];
         $name=$row['name'];
         $mobile=$row['mobile'];
         $catagory_name=$row['catogary_name'];
        

         echo  '<tr>
         <th scope="row">'.$id.'</th>
         <td>'.$title.'</td>
         <td>'.$user_id.'</td>
         <td>'.$content.'</td>
         <td>'.$name.'</td>
         <td>'.$mobile.'</td>
         <td>'.$catagory_name.'</td>
         
        
         <td>
         <button class="btn btn-primary"><a href="post_update.php? updateid='.$id.'" class="text-light">Update</a></button>
         <button class="btn btn-danger"><a href="post_delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
     </td>
       </tr>';
       
     }
     
  } 
    ?>


            </tbody>
        </table>
    </div>

</body>

</html>