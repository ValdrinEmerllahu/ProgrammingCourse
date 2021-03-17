<?php
    session_start();

    require_once ('component.php');
    require_once ('dbconnection.php');


    $database = new Connection();
    $database->getConnection();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
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
            <h1 class="title">Contact Us</h1>
            <div class="content">
                <div class="leftside">
                    <h1>Get in Touch</h1>
                    <p>Please fill out the quick form and we will be in touch with lightening speed.</p>
                    <div class="contactForm">
                        <form action="insert.php" method="POST" id="forma" name="form1">
                            <input type="text" placeholder="Name" name="name" class="contact-form-field">
                            <input type="email" placeholder="Your email address" name="email" class="contact-form-field">
                            <textarea placeholder="Message" name="message" id="comments" class="contact-form-field" cols="30" rows="4"></textarea>
                            <button type="submit" value="Submit Form" class="submit-btn button" onclick="allLetter(document.form1.name); ValidateEmail(document.form1.email)">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="rightside">
                    <h1>Na kontaktoni..</h1>
                    <p>Për pyetje apo ndonje paçartësi<br>Na dergoni email ne: <a href="">support@clients.com</a></p>
                   
                    <h2 class="address">Programming Learning Center KOSOVO</h2>
                    <p>
                        127 Lagjia Arberia
                        10000,<br> Prishtine, Kosovo
                    </p>
                </div>
            </div>
        </div>
    </div>
    
<div id="footer" data-name="contacts">
    <div class="footerTitle">
        <p>Zbavitu duke mesuar.</p>
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
                    <a href="courses.php" id="footerCourses">Courses</a>
                </li>
                <li>
                    <a href="blog.php" id=footerBlog>Blog</a>
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