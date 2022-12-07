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
        <form action="signup.php"  method="post">
            <div class="row">
                <div class="input-group">
                    <input type="text" id="name" name="name" required>
                    <label for="name"><i class="fa-solid fa-user"></i> Your name</label>
                </div>
                <div class="input-group">
                    <input type="text" id="number" name="phone" required>
                    <label for="number"><i class="fa-solid fa-phone"></i> Phone Number</label>
                </div>
            </div>
            <div class="input-group">
                <input type="text" id="email" name="email" required>
                <label for="email"><i class="fa-regular fa-envelope"></i> Email</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" required>
                <label for="password"><i class="fas fa-comments"></i> Your password</label>
            </div>
                 <button class=""  type="submit" name="signup"> Sign Up <i class="fas fa-paper-plane"></i></button>
                 <span class=" account">Already have an account? <a href="index.php">Login</a></span>
        </form>

    </div>

  
    
</body>
</html>