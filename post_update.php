<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql = "select * from `posts` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$title=$row['title'];
$user_id=$row['user_id'];
$content=$row['content'];



if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $user_id=$_POST['user_id'];
    $content=$_POST['content'];
   

    $sql= "update `posts` set id=$id,title='$title', user_id='$user_id', content='$content' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "update successfullly";
        header('location:post_display.php');
    }

    else{
        die(mysqli_error($con));
    }
}

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>crud operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>title</label>
                <input type="text" value="<?php echo $title; ?>" class="form-control" name="title" autocomplete="off"
                    placeholder="title">

            </div>

            <div class="form-group">
                <label>user_id</label>
                <input type="text" value="<?php echo $user_id; ?>" class="form-control" name="user_id"
                    placeholder="user_id">

            </div>

            <div class="form-group">
                <label>content</label>
                <input type="text" value="<?php echo $content; ?>" class="form-control" name="content"
                    placeholder="content">

            </div>



            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


</body>

</html>