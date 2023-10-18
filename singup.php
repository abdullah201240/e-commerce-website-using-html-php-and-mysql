<?php

include 'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['number'];
    $address=$_POST['address'];
    $password=md5($_POST['password']);
    $query = "INSERT INTO `users`( `name`, `email`, `phone`, `address`, `password`) VALUES ('$name','$email','$phone','$address','$password')";

     mysqli_query($conn, $query);
     header("location: login.php");
    
}



?>









<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>User Singup</title>
</head>

<body>
    <center>
        <h1> User Singup </h1>


        <div>


            <form action="" method="post">
                <label for="">Name</label><br>
                <input type="text" placeholder="Name" name="name"><br>
                <label for="">Email</label><br>
                <input type="text" placeholder="Email" name="email"><br>
                <label for="">Phone Number</label><br>
                <input type="text" placeholder="Number" name="number"><br>

                <label for="">Address</label><br>
                <input type="text" placeholder="Address" name="address"><br>
                <label for="">Password</label><br>
                <input type="password" placeholder="password" name="password"><br><br>
                <button type="submit">Singup</button>



            </form>
        </div>
    </center>



</body>

</html>