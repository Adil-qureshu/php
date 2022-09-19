<?php

include "connect.php";

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `posts` where id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        //echo 'deleted successfully';
        header('location:post_display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>