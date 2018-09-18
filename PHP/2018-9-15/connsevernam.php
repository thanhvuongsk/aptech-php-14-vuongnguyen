<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
     
    </tr>
  </thead>
 <tbody>
     <?php
         $servername = "192.168.60.141";
         $username = "nam";
         $password = "123456";
         $dbname = "aptech_php_14";
     
     // Create connection
         $conn = mysqli_connect($servername, $username, $password, $dbname);
     // Check connection
         if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
         }
     
         $sql = "SELECT id,name,email,password,created_date FROM users";
         $result = mysqli_query($conn, $sql);
     
         if (mysqli_num_rows($result) > 0) {
         // output data of each row
     
         echo '<tbody>';
         
             while ($row = mysqli_fetch_assoc($result)) {
                 echo '<tr>';
                // echo "email: " . $row["email"] . " " . $row["pw"] . "<br>";
                echo "<th scope='row'>$row[id]</th>";
                echo "<td>$row[name]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[password]</td>";
                echo "<td>$row[created_date]</td>";
                echo '</tr>';
             }
         } else {
             echo "0 results";
         }
     
         mysqli_close($conn);
     
     ?>
      </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>