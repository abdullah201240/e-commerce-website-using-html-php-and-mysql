<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST['name'];
$password=$_POST['password'];
if($name="Anamul Hossain Dihan"){
    if($password="1234"){
        header("location: adminhome.php");

    }
}

}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   

    <title>Admin Login</title>
  </head>
  <body>
    <center> <h1>Admin Login </h1>

    
    <div>


    <form action="" method="post">


         <label for="">User Name</label><br>
         <input type="text" placeholder="User Name" name="name"><br>
         <label for="">Password</label><br>
         <input type="password" placeholder="password" name="password"><br><br>
         <button type="submit">Login</button>



    </form>
    </div>
    </center>
    

   
  </body>
</html>
