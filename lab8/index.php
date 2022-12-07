<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
</head>
<body>
    <div class="hero">
        <form action="index.php" method="post">
            <div class="row">
                    <div class="login_name">
                        <input type="text" id="name" name="name" required>
                        <label for="name"><i class="fa-solid fa-user"></i> Your name</label>
                    </div>
            </div>
           
            <div class="input-group">
                <input type="password" id="password" name="password" required>
                <label for="password"><i class="fas fa-comments"></i> Your password</label>
            </div>
                 <button class="" name="login" type="submit"> Login <i class="fas fa-paper-plane"></i></button>
                 <span class=" account">Don't have an account? <a href="register.php">Register here</a></span>
        </form>

    </div>

    <?php
    include('connect.php');
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST['name'];
        $password=$_POST['password'];    
        echo $name. " " .$password;
        $db = "select id from data where name='$name' and password = '$password'";
        $result=mysqli_query($con,$db);
         
        if(mysqli_query($con,$db)){
            $num=mysqli_num_rows($result);
            if($num==1){
                echo "Login successfully";
            }
            else{
                echo 'wirik';
            }
        }
    }

    ?>

    
</body>
</html>