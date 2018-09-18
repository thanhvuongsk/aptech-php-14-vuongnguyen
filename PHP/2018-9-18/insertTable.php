<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "aptech_php_14_thanhvuong2";
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

$sql = "INSERT INTO users ( name,email,password,created_date)
VALUES ('ThanhVuuong','thanhvuongsk@gmail.com','12345', Now()),
('ThanhVuuong','thanhvuongsk@gmail.com','12345', Now()),
('ThanhVuuong','thanhvuongsk@gmail.com','12345', Now()),
('ThanhVuuong','thanhvuongsk@gmail.com','12345', Now()),
('ThanhVuuong','thanhvuongsk@gmail.com','12345', Now())";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>