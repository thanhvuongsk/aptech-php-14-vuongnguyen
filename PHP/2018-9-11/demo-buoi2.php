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
      <?php
         
          // function hienThi($bien1,$bien2){
          //     echo $bien1 ;
          //     echo  $bien2;
          //     echo '<br>';
          //     echo "Vương Nguyễn";
          // }
          // hienThi('a','b');
         // $arrdemo = ["Phong", "Huan","Đat","Vương"];
         //var_dump($arrdemo );
         //echo $arrdemo[1];
      //    $arrdemo = ["Phong"=>10, "Huan"=>9,"Đat"=>9,"Vương"=>9];
      //   // echo "Bài Thi của Phong".$arrdemo['Phong']."Điểm";
      //   foreach($arrdemo as $x => $x_value) {
      //     echo "Bài Thi PHP Của " . $x . " Có Số Điểm Là: " . $x_value;
      //     echo "<br>";
      // }
      $arr = [
        [
          "id" => 13,
          "name" => "Nguyen Hai Nam",
          "email" => "cz@gmail.com",
          "password" => "123456",
          "created_at" => "2018-08-24 12:05:50",
          "updated_at" => "2018-08-24 12:05:50"
            
        ],
        [
          "id" => 14,
          "name" => "Prof. Elvis Mann V",
          "email" => "rconroy@example.org",
          "password" => "L|^F{L)2^`",
          "created_at" => "2018-08-25 11:16:53",
          "updated_at" => "2018-08-25 11:16:53"
        ], [
          "id" => 15,
          "name" => "Daren Davis",
          "email" => "hlabadie@example.org",
          "password" => "4alYWUNlb!I@%ue^pMi",
          "created_at" => "2018-08-25 11:16:53",
          "updated_at" => "2018-08-25 11:16:53"
        ]
      ];
     // echo $arr[""];
    echo"<table class='table'>";
    echo"<thead>";
    echo"<tr>";
    echo"<th scope='col'>#</th>";
    echo"<th scope='col'>Name</th>";
    echo"<th scope='col'>Emai</th>";
    echo" </tr>";
    echo" </thead>";
    foreach(  $arr as $x => $x_value) {
            //echo  $x ;
            echo "<tbody>";
            echo "<tr>";
            echo " <th scope='row'> $x_value[id]</th>";
            echo "<td>$x_value[name]</td>";
            echo "<td>$x_value[email]</td>";
            echo " </tr>";
            echo " </tbody>";
            //echo  $x_value["name"] ;
           // echo  $x_value["email"] ;
           // var_dump($x_value );
           // echo "<br>";
     
     
      }
      echo"</table>";
     
      ?>

     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>