<?php
// function db_connect(){
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "registrationdata";

// // // Create connection
// // $conn = new mysqli($servername, $username, $password, $dbname);
// try{
//     $conn = new PDO($servername, $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch(PDOException $e){
//     echo $e->getMessage();
// }
// return $conn;
// }
$con=mysqli_connect('localhost','root','', 'registrationdata');
if($con){
    // echo "Connected ";
}else{
    die(mysqli_error($con));
}
?>