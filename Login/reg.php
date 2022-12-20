<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

  $email = mysqli_real_escape_string($conn,$_POST['Remail']);
  $name = mysqli_real_escape_string($conn,$_POST['Ruser']);
  $password = mysqli_real_escape_string($conn,$_POST['Rpass']);
  echo $email . "<br/>" . $password ."<br>";
  // $qVal = "select name from uLog where email = '$email' and password = '$password'";

  // $result = mysqli_query($conn, $qVal);

}


$qIN = "Insert into uLog(username, email, password) VALUES ('$name','$email', '$password')"; 


if (mysqli_query($conn, $qIN)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

<html lang="en">
<head>
        <title>Numi</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="log.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body class="colored-bg">
    <div>
        <div class="navbar-head w-nav">
            <div class="navbar-wrapper">
                    <a href="index.html" style="justify-self: start;">
                            <img  src="https://assets-global.website-files.com/6047a9e15e5dc54e0d6ddd55/615350194fbbe6093e0bd8c0_logo-bloack.webp" loading="lazy"alt="Brand logo" class="nav-logo"></a>
                    <nav class="nav-links w-nav-menu">
                            <a href="/index.html" class="navbar-link w-nav-link current" >How it Works</a>
                            <a href="/whynumi.html" class="navbar-link w-nav-link">Why NUMI</a>
                            <a href="case_studies/case_study.html" class="navbar-link w-nav-link">Case Studies</a>
                            <a href="case_studies/accordion.html" class="navbar-link w-nav-link">Support</a>
                    </nav>
                    <div class="navbar-2-button">
                            <a href="#" class="btn ghost-button nav">Log In</a>
                            <a href="hirepros.html" class="btn bg-gradient">Hire Pros</a>
                    </div>
                    <button id="bur1" style="justify-self: end;" class="navbar_menu_burger w-nav-burger">
                            <img class="burger-icon-nav"  src="hamburger-menu-svgrepo-com.svg">
                    </button>
            </div>
            <div id="ov1" class="nav-overlay" style="display: none;">
                    <div class="overlay-content" style="justify-self: center;">
                            <a href="index.html"class="navbar-link w-nav-link current nav-link-open"> How it Works</a>
                            <a href="whynumi.html" class="navbar-link w-nav-link nav-link-open">Why NUMI</a>
                            <a href="case_studies/case_study.html" class="navbar-link w-nav-link nav-link-open">Case Studies</a>
                            <a href="case_studies/accordion.html" class="navbar-link w-nav-link nav-link-open">Support</a>
                    </div>
            </div>
        </div>

        <main class="cont">
            <div><img src="https://uploads-ssl.webflow.com/62869dcaea70133a66edcb3d/62c3e4ae1a998ecc4d85a69c_homepage1.svg" loading="lazy" height="" alt="Hi thank you graphic" class="back-img"></div>
            <div class="login-page">
                <legend style="display: block; justify-content: center; font-size:40; margin-bottom: 1rem;">Log In</legend>
                <legend style="display: none; justify-content: center; font-size:40; margin-bottom: 1rem;">Registration</legend>
                <div class="form">
                <?php
                if (mysqli_query($conn, $qIN)) {
                  echo "New account created successfully.";
                } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                ?>
                </div>
            </div>
            <div><img src="https://uploads-ssl.webflow.com/62869dcaea70133a66edcb3d/62c3e7ee74792a2d3b824e61_homepage2.svg" loading="lazy" height="" alt="One person saying hi, check out to another" class="back-img">
                
            </div>
        </main>

            <div class="all-footer">
                <div class="container-footer">
                    <div class="foot-elements">
                        <div class="text-footer">
                            <div class="grid-footer">
                                <div class="footer-column">
                                    <div class="foot-title">NUMI</div>
                                    <a href="" class="foot-link">
                                        <div>Log In</div>
                                    </a>
                                    <a href="case_studies/accordion.html" class="foot-link">
                                        <div>Support</div>
                                    </a>
                                </div>
                                <div class="footer-column" >
                                    <div class="foot-title">Resources</div>
                                    <a href="" class="foot-link">
                                        <div>Blog</div>
                                    </a>
                                    <a href="" class="foot-link">
                                        <div>Color Inspiration</div>
                                    </a>
                                    <a href="" class="foot-link">
                                        <div>Software Logos</div>
                                    </a>
                                    <a href="" class="foot-link">
                                        <div>No Code Tools</div>
                                    </a>
                                </div>
                                <div class="footer-column">
                                    <div class="foot-title">Social</div>
                                    <a href="https://www.facebook.com/sdukz/" class="foot-link">
                                        <div>Facebook</div>
                                    </a>
                                    <a href="https://www.instagram.com/engineering_sdu/" class="foot-link">
                                        <div>Instagram</div>
                                    </a>
                                    <a href="https://twitter.com/sdukz?lang=en" class="foot-link">
                                        <div>Twitter</div>
                                    </a>
                                    <a href="https://kz.linkedin.com/company/suleyman-demirel-university-kazakhstan" class="foot-link">
                                        <div>Linkedin</div>
                                    </a>
                                </div>
                            </div>
                            <div class="footer-column">
                                <div class="foot-message">
                                    <div class="foot-title">Join our Newsletter</div>
                                    <div class="text-message">Free, cancel at anytime. We'll never spam or sell your data.</div>
                                </div>
                                <div class="email-input">
                                    <form action="/tutorial/action.html">
        
                                        <legend>Email</legend>
                                        <input class="email" type="email" name="email" size=10><br /><br>
                                        <input class="sub_email" type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="icons">
                            <div class="grid-icons">
                                <div class="first-icon"><img src="https://assets-global.website-files.com/6047a9e15e5dc54e0d6ddd55/62fa9dc46227f43252b4908b_best-ui-black.webp" alt=""></div>
                                <div class="second-icon"><img src="https://assets-global.website-files.com/6047a9e15e5dc54e0d6ddd55/62fa9dcab6e1d789fc651205_best-innovation-purple.webp" alt=""></div>
                                <a class="third-icon" href="https://www.webguruawards.com/sites/numi"><img src="https://assets-global.website-files.com/6047a9e15e5dc54e0d6ddd55/63330d4283ba36f2f189cb71_img_guru_of_the_day_gray.webp" alt=""></a>
                            </div>
                        </div>
                        <div class="end-footer">
                            <img class="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSF8dMSw6RoNA05baskC6HcTwdQn_NZVN2g3w&usqp=CAU" alt="">
                            <div class="end">© NUMI | All Rights Reserved</div>
                        </div>
                    </div>
        
                </div>
            </div>

    </div>    
                <script>
                     $('#bur1').click(function(){
                        var width = $(window).width();
                        $('#bur1').toggleClass("open");
                        $('#ov1').slideToggle();
                });   
                $('.message a').click(function(){
                    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
                    $('legend').animate({height: "toggle", opacity: "toggle"}, "slow");
                });
        
                function reveal() {
                var reveals = document.querySelectorAll(".reveal");
                for (var i = 0; i < reveals.length; i++) {
                    var windowHeight = window.innerHeight+100;
                    var elementTop = reveals[i].getBoundingClientRect().top;
                    var elementVisible = 150;
                     if (elementTop < windowHeight - elementVisible) {
                        reveals[i].classList.add("active");
                     }
                    }
                }
                window.addEventListener("scroll", reveal);
                </script>
        </body>
</html>