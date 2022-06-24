<?php
$servername = "134.56.90.11"; // shared ip address
$username = "u234324_johan"; // username
$password = "123456"; //password username
$database = "u234324_mobile"; //database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  $sql = "SELECT * FROM mobile_phone";
  $res = mysqli_query($conn, $sql);
  if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
      echo '<pre>';
      print_r($row);
    }
  }else{
    echo "Data Not Found";
  }
}

?>