
<?php
include "connect.php";


$email =$_GET["mail"];




$sql = "INSERT INTO car_sales_users (Mail)
VALUES ('$email')";
if ($conn->query($sql)) {
  echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>









