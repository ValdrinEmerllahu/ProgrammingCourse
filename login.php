
<?php
    session_start();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    require_once ('component.php');
    require_once ('dbconnection.php');


    $database = new Connection();
    $database->getConnection();
?>
<?php

    require_once ('component.php');
    if(isset($_POST['button'])){
        if(loginCondition()){
            header("Location:http://localhost:80/ProjektiWebEng/admin_blogs.php");
        }else{
            if(login()){    
                // echo "<script>alert('Login Successful!')</script>";
                header("Location:http://localhost:80/ProjektiWebEng/home.php");
            }else{
                echo "<script>alert('Invalid Email address or Password!')</script>";
            }
        }
    }
?> 

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
<body>
    <div id="header">
        <div class="header wrapper">
            <div class="logo">
                <a href="home.php">
                    <img src="imgs/logo.png" alt="">
                </a>
            </div>
            <div class="navigation-menu">
                <ul class="Dynamic Contact">
                    <li id="HomeNav">
                        <a href="home.php">Home</a>
                    </li>
                    <li id="CoursesNav">
                        <a href="courses.php">Courses</a>
                    </li>
                    <li id="BlogNav">
                <a href="blog.php">Blog</a>
            </li>
                    <li id="AboutNav">
                        <a href="about.php">About Us</a>
                    </li>
                    <li id="ContactNav">
                        <a href="contact.php">Contact</a>
                    </li>
 
                    <li id="CartNav">
                    <a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart
                    <?php

                    if (isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text light\">$count</span>";
                    }else{
                        echo "<span id=\"cart_count\" class=\"text light\">0</span>";
                    }

                    ?>
                    </a>
                    
                </li>
                <li id="signin">
                        <a href="login.php">SIGN IN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> 

    <div class="wrapper extraLayout">
        <div class="dynamicPageInfo block">
            <div class="container">
                <h1>Login:</h1>
                <div class="forma">
                    <form action="login.php"  method="POST" name="form1">
                        <div class="second">
                            <label for="email">Enter your e-mail:</label><br>
                            <input type="email" id="email" name="email" placeholder="Email" class="contact-form-field">
                        </div>
                        <div class="third">
                            <label for="password">Enter your password:</label><br>
                            <input type="password" id="password" name="password" placeholder="Password" class="contact-form-field">
                        </div>
                        <input id="button" name="button" type="submit" value="Login" onclick="ValidateEmail(document.form1.email); CheckPassword(document.form1.password)">
                    </form>
                    <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" data-name="contacts">
        <div class="footerTitle">
            <p>Zbavitu duke mësuar.</p>
        </div>
        <div class="footerContent wrapper">
            <div class="socialCounts">
                <a class="footerSocial" href="https://twitter.com" target="_blank">
                    <div class="footerTwitter">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <span>@PrgorammingCourse</span>
                </a>
                <a class="footerSocial" href="http://www.facebook.com" target="_blank">
                    <div class="footerFacebook">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <span>PrgorammingCourse</span>
                </a>
            </div>
            <div class="about">
                <div class="logoFooter">
                    <img src="imgs/logo2.png" alt="">
                </div>
                <div>
                    <p>KurseProgramimi Inc.</p>
                    <address>
    <br />Lagjia Arberia
    <br />10000, Prishtine, Kosovo</address>
                </div>
                <button>Email Us</button>
            </div>
            <div class="footerMenu Home">
                <ul>
                    <li>
                        <a href="home.php" id="footerHome">Home</a>
                    </li>
                    <li>
                        <a href="#">Features</a>
                    </li>
                    <li>
                        <a href="courses.php" id="footerCourses">Courses</a>
                    </li>
                    <li>
                        <a href="about.php" id="footerAbout">About Us</a>
                    </li>
                    <li>
                        <a href="contact.php" id="footerContacts">Contact</a>
                    </li>
                    <li>
                        <a href="#" id="footerPrivacy-Policy">Terms of Use</a>
                    </li>
                    <li>
                        <a href="#" id="faq">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            © 2020 Programming Course, Inc. All rights reserved.<br><a href="https://github.com/ValdrinEmerllahu/ProgrammingCourse">Repository: Valdrin Emerllahu, Shkodran Bajrami, Endrit Bucolli</a>
        </div>

        <script src="js/main.js"></script>
</body>
</html>