<?php 
include 'db.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <title>Admin Home</title>
  </head>
  <body>


  <table>
<tr>
<td><a href = 'adminhome.php'><button>Home</button></a></td>
<td><a href = 'adminriderlist.php'><button>Rider List</button></a></td>
<td><a href = 'index.php'><button>Logout</button></a></td>

</table>

  <center>
        <h1>Order List</h1>

        <table>
            <tr>

                <th>Order Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Type 1</th>
                <th>Type 2</th>
                <th>Type 3</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
            <tr>
                <?php

                $s = "SELECT * FROM `buy`";
                $result = mysqli_query($conn, $s);
                while ($row = mysqli_fetch_array($result)) {





                    ?>

                    <td><?php echo$row['id'];  ?></td>
                    <td><?php echo$row['name'];  ?></td>
                    <td><?php echo$row['address'];  ?></td>
                    <td><?php echo$row['type1'];  ?></td>
                    <td><?php echo$row['type2'];  ?></td>
                    <td><?php echo$row['type3'];  ?></td>
                    <td><?php echo$row['price'];  ?></td>
                    <td><?php echo$row['status'];  ?></td>




                </tr>

            <?php } ?>



        </table>




    </center>
  </body>
</html>