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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
<body class="">
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
      

    <div class="wrapper pageLayout hasSidebar Dynamic">
        <div class="content">
            <div class="dynamicPageInfo block">
                <h1><strong>RRETH KURSIT TE PROGRAMIMIT®</strong></h1>
                <p><strong>Kursi i programimit</strong> i themeluar në vitin 2020 nga një grup studentësh me përvojë. Në mes të vitit 2020 u lëshua në treg versioni i parë zyrtar i Programming Course®. Kompania, e mbështetur nga qeveria dhe investitorët privatë, përqendrohet në zhvillimin e zgjidhjeve të sigurisë së brendshme dhe shpërndarjen e tyre te klientët në të gjithë botën përmes rrjetit të saj. <br><br>
                <strong>Ne e kemi misionin tonë</strong>  në sigurimin e klientëve tanë me një menyre efikase dhe të lehtë për t'u përdorur dhe për të adresuar të gjitha nevojat e tyre të perdorimit, si dhe për të përmirësuar pajtueshmërinë e tyre dhe për të përmbushur kërkesat e auditimit të sigurisë. Që nga fillimi jonë në vitin 2020, Kursi i Programimit rritet vazhdimisht duke tërhequr klientë të ndërmarrjeve të mëdha. Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>
        </div>
        <div class="sidebar ">
            <div class="courseLoactions block">
                <div class="takeCourse">
                    <p>GET THE FREE APP</p>
                    <a href="https://play.google.com/store/apps" target="_blank">
                        <div class="courseGooglePlay">
                            <img src="imgs/get-it-on-google-play-png-get-it-on-google-play-png-519.png" alt="">
                        </div>
                    </a>
                    <a href="https://www.apple.com/ios/app-store/" target="_blank">
                        <div class="courseAppStore">
                            <img src="imgs/download-on-app-store-png-open-2000.png" alt="">
                        </div>
                    </a>
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
                        <br />10000, Prishtine, Kosovo
                    </address>
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
        © 2020 Programming Course, Inc. All rights reserved.<br><a href=" https://github.com/ValdrinEmerllahu/ProgrammingCourse">Repository: Valdrin Emerllahu, Shkodran Bajrami, Endrit Bucolli</a>
    </div>

</body>
</html> 