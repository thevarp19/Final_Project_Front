<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 include 'connect.php';
 if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    // $sql="insert into `data` (name,email,mobile,password) values('$name','$email','$phone','$password')";
    // $result=mysqli_query($con,$sql);
    // if($result){
    //     echo "Data success";
    // }else{
    //     die(mysqli_error($con));
    // }

    $sql="Select * from `data` where name='$name' and password = '$password' ";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "User already exist";
        }
        else{
            $sql="insert into `data` (name,email,mobile,password) values('$name','$email','$phone','$password')";
            $result=mysqli_query($con,$sql);
            if($result){
                echo "Signup successfull";
            }
            else{
                die(mysqli_query($con));
            }
        }
    }
 }
}

?>