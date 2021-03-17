
<?php
session_start();

require_once ('component.php');
require_once ('dbconnection.php');


$database = new Connection();
$database->getConnection();


if(isset($_POST['add'])){
    //print_r($_POST['productid']);
    if(isset($_SESSION['cart'])){

        $item_array_id=array_column($_SESSION['cart'],"productid");

        

        if(in_array($_POST['productid'],$item_array_id)){
            echo "<script>alert('Course is already added in the cart..!')</script>";
            echo "<script>window.location = 'home.php'</script>";
        }else{
            $count = count($_SESSION['cart']);
            $item_array=array(
                'productid'=>$_POST['productid']
            );

            $_SESSION['cart'][$count] = $item_array;
        }
    }else{
        $item_array=array(
            'productid'=>$_POST['productid']
        );

        $_SESSION['cart'][0]=$item_array;
        //print_r($_SESSION['cart']);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Programming Course</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

</head>
<body class="">
<div id="homeHeader">
<div class="homeHeader">
    <div class="logo">
        <a href="#">
            <img src="imgs/logo.png" alt="">
        </a>
    </div>
    <div class="navigation-menu">
        <ul class="Home">
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
    <div class="slider">
        <div class="slideText">
            <span>
                Filloni kursin tuaj per te pasur <br>sukses!
            </span>
            <p>
                Metoda me e re e mesimit online!
            </p>
        </div>
        <a href="courses.php">Fillo te mesosh tani</a>
    </div>
</div>
<a class="prev" onclick="previous()">❮</a>
<a class="next" onclick="next()">❯</a>
</div>






<div class="storesOutline wrapper Android" id="temp">
<a href="https://play.google.com/store/apps" class="learnOnAndroid">
    <div class="homeGooglePlay">
        <img src="imgs/get-it-on-google-play-png-get-it-on-google-play-png-519.png" alt="">
    </div>
</a>
<a href="https://www.apple.com/ios/app-store/"class="learnOnIOS">
    <div class="homeAppStore">
        <img src="imgs/download-on-app-store-png-open-2000.png" alt="">
    </div>
</a>
</div>


<div class="homeCourseContent wrapper">
    <!-- <div class="courseItem block noPadding" >
        <a >
            <img src="imgs/1073.png" alt="Python 3 Course" class="courseIcon">
            <div class="courseDescription">
                <div>Python 3 Tutorial</div>
                <p>
                    Learn Python for free with this interactive course, and get a handle on the most popular programming language in the world.
                </p>
            </div>
        </a>
        <div class="courseStores">
            <button type="submit" name="add">Add to cart   <i class="fas fa-shopping-cart"></i></button>
        </div>
    </div>
    <div class="courseItem block noPadding">
        <a >
            <img src="imgs/1051.png" alt="C++ Course" class="courseIcon">
            <div class="courseDescription">
                <div>C++ Tutorial</div>
                <p>
                    Learn C++ in a greatly improved learning environment with more lessons, real practice opportunity, and community support and become a rockstar developer.
                </p>
            </div>
        </a>
        <div class="courseStores">
        <button type="submit" name="add">Add to cart   <i class="fas fa-shopping-cart"></i></button>
        </div>
    </div>
    <div class="courseItem block noPadding" >
        <a >
            <img src="imgs/1068.png" alt="Java Course" class="courseIcon">
            <div class="courseDescription">
                <div>Java Tutorial</div>
                <p>
                    Utilize our Java tutorial to learn the basics of the popular language, including Java objects, in this introductory course and explore a career as a software engineer.
                </p>
            </div>
        </a>
        <div class="courseStores">
            <button type="submit" name="add">Add to cart   <i class="fas fa-shopping-cart"></i></button>        
        </div> 
        
    </div> -->

    <?php
        $result = $database->getConditionData();
        while ($row = mysqli_fetch_assoc($result)){
            mainElements($row['course_name'],  $row['course_img'],$row['course_description'],$row['ID']);
        }
    ?>

<a href="courses.php" class="viewAll">Shiko të gjithë kurset.</a>
</div>



<div id="storeInfo">
<div class="storeInfoContent">
    <div class="usersInfo">
        <div>
            <p>
                <span>12,253,022</span>
                Learners
            </p>
            <p>
                <span>1766</span>
                Lessons
            </p>
        </div>
        <div>
            
            <p>
                <span>14,288</span>
                Quizzes
            </p>
        </div>
    </div>
    <div class="topInfo">
        <div class="phoneImg">
            <img src="imgs/pngwing.com.png" alt="Phone">
        </div>
        <div class="mainInfo">
            <div class="infoTitle">
                <span>
                    Te gatshëm çdo moment për t'iu ndihmuar!
                </span>
                <p>
                    Per çdo paçartësi ose informacion ju lutemi te na kontaktoni!
                    <br /> 
                    <br />
                    Gjithmonë këtu per ju!
                    <br />
                </p>
            </div>
            
        </div>
    </div>
</div>
</div>



<div id="reviews">
<div class="reviewTitle">
    <p>Ne kemi nje zgjidhje per ju...</p>
    <span>Rreth <span> 250,000 </span> perdorues ka platforma jonë në të gjithë globin.</span>
</div>
<div class="socialIcons">
    <a href="http://www.facebook.com" class="facebook" ><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com" class="twitter" ><i class="fab fa-twitter"></i></a>
    <a href="https://instagram.com" class="instagram" ><i class="fab fa-instagram"></i></a>
</div>
</div>



<div id="footer" data-name="contacts">
<div class="footerTitle">
    <p>Zbavitu duke mësuar.</p>
</div>
<div class="footerContent wrapper">
    <div class="socialCounts">
        <a class="footerSocial" href="https://twitter.com" >
            <div class="footerTwitter">
                <i class="fab fa-twitter"></i>
            </div>
            <span>@PrgorammingCourse</span>
        </a>
        <a class="footerSocial" href="http://www.facebook.com" >
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
</div>
<script src="js/main.js"></script>
</body>
</html>