<?php 
include 'db.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <title>Rider List</title>
  </head>
  <body>


  <table>
<tr>
<td><a href = 'adminhome.php'><button>Home</button></a></td>
<td><a href = 'adminriderlist.php'><button>Rider List</button></a></td>

<td><a href = 'index.php'><button>Logout</button></a></td>
</tr>

</table>

  <center>
        <h1>Rider List</h1>

        <table>
            <tr>

                <th>Order Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>email </th>
                <th>Phone</th>
                <th>CV </th>
                <th>Status</th>
            </tr>
            <tr>
                <?php

                $s = "SELECT * FROM `rider`";
                $result = mysqli_query($conn, $s);
                while ($row = mysqli_fetch_array($result)) {


                      $id=$row['id'];
                      $name=$row['name'];
                      $email=$row['email'];


                    ?>

                    <td><?php echo$row['id'];  ?></td>
                    <td><?php echo$row['name'];  ?></td>
                    <td><?php echo$row['address'];  ?></td>
                    <td><?php echo$row['email'];  ?></td>
                    <td><?php echo$row['phone'];  ?></td>
                    <td><a href="<?php echo$row['cv']  ?>"> CV </a></td>
                    <td><?php echo$row['status'];  ?></td>
                    <td><?php echo"<a href='asprej.php?id=$id&&code=1&&email=$email&&name=$name'><button>Accept</button></a>" ?></td>
                    <td><?php echo"<a href='asprej.php?id=$id&&code=2&&email=$email&&name=$name'><button>Reject</button></a>" ?></td>




                </tr>

            <?php } ?>



        </table>




    </center>
  </body>
</html>