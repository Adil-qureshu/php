<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql = "select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql= "update `crud` set id=$id,name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "update successfullly";
        header('location:display.php');
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
                <label>Name</label>
                <input type="text" value="<?php echo $name; ?>" class="form-control" name="name" autocomplete="off"
                    placeholder="Enter your name">

            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" value="<?php echo $email; ?>" class="form-control" name="email"
                    placeholder="Enter your emails">

            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" value="<?php echo $mobile; ?>" class="form-control" name="mobile"
                    placeholder="Enter your mobile number">

            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" value="<?php echo $password; ?>" class="form-control" name="password"
                    placeholder="Enter your password">

            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


</body>

</html>