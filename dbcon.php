
<?php 
//create connection
$conn = mysqli_connect('admin.ceai1nbzvwue.us-east-1.rds.amazonaws.com','admin','admin123','admin');

//check connection

if (!$conn) {
    echo "connection failed: " . mysqli_connect_error()."<br>";
    echo "connection error no: " . mysqli_connect_errno();

} else {
   // echo "connected successfuly";
}



 ?>
