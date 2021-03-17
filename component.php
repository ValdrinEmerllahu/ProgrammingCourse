<?php

if(!isset($_SESSION)) {
    session_start(); 
} 

function component($productname, $productdescription, $productimg,$productprice,$productlearners,$productlessons,$productquizzes,$productid){
    $element = "
    <div class=\"courseItem block noPadding\">
    <form action=\"courses.php\" method=\"POST\">
        <a>
            <img src=\"$productimg\" id=\"python\" alt=\"Python 3 Course\" class=\"courseIcon\">
            <div class=\"courseDescription\">
                <div id=\"pythonTitle\">$productname</div>
                <p id=\"pythonText\">
                    $productdescription
                </p>
            </div>
        </a>
        <div class=\"courseStores\">
        <button type=\"submit\" name=\"add\">Add to cart   <i class=\"fas fa-shopping-cart\"></i></button>
        <input type=\"hidden\" name=\"productid\" value=\"$productid\">
        <p class=\"price\">$productprice$</p>
        </div>
        <div class=\"courseCounts\">
            <ul>
                <li>
                    <span>Studentë</span>
                    <p>$productlearners</p>
                </li>
                <li>
                    <span>Mësime</span>
                    <p>$productlessons</p>
                </li>
                <li>
                    <span>Kuize</span>
                    <p>$productquizzes</p>
                </li>
            </ul>
        </div>
    </form>
    </div>
    ";
    echo $element;
}

function cartElement($courseimg,$coursename,$coursedescription,$courseprice,$courseid){
    $element="
    <form action=\"cart.php?action=remove&ID=$courseid\" method=\"post\">
        <a>
            <img src=\"$courseimg\" id=\"python\" alt=\"Python 3 Course\" class=\"courseIcon\">
            <div class=\"courseDescription\">
            <div id=\"pythonTitle\">$coursename</div>
                <p id=\"pythonText\">
                    $coursedescription
                </p>
                <h2 class=\"price\">$courseprice$</h2>
            </div>
        </a>
        <div class=\"courseStores\">
            <button type=\"submit\" name=\"remove\" class=\"removeBttn\">Remove</button>
        </div>
        <hr>    
    </form>
    ";
    echo  $element;
}

function mainElements($productname,$productimg,$productdescription,$productid){
    $element= "
    <form action=\"home.php\" method=\"POST\">
    <div class=\"courseItem block noPadding\" >
        <a >
            <img src=\"$productimg\" alt=\"Python 3 Course\" class=\"courseIcon\">
            <div class=\"courseDescription\">
                <div>$productname</div>
                <p>
                    $productdescription
                </p>
            </div>
        </a>
        <div class=\"courseStores\">
            <button type=\"submit\" name=\"add\">Add to cart   <i class=\"fas fa-shopping-cart\"></i></button>
            <input type=\"hidden\" name=\"productid\" value=\"$productid\">
        </div>
    </div>
    </form>
    ";
    echo $element;
}

$_SESSION["bool"]=false;
function login(){  
    if(isset($_POST['button'])){
        $uname=$_POST['email'];
        $password=$_POST['password'];

        $sql="Select * from user where Email= '$uname' AND Password='$password' ";

        require_once ('dbconnection.php');
        $database = new Connection();

        $result=mysqli_query($database->getConnection(),$sql);
        $rows=mysqli_fetch_array($result);
        if($rows){
            $_SESSION["bool"]=TRUE;
        }
        return $_SESSION["bool"];
    }
}

$_SESSION["temp"]=false;
function loginCondition(){
    if(isset($_POST['button'])){
        $uname=$_POST['email'];
        $password=$_POST['password'];
        
        $sql="Select * from user where Email= '$uname' AND Password='$password' AND isAdmin='1'";

        require_once ('dbconnection.php');
        $database = new Connection();

        $result=mysqli_query($database->getConnection(),$sql);
        $rows=mysqli_fetch_array($result);
        if($rows){
            $_SESSION["temp"]=TRUE;
        }
        return $_SESSION["temp"];
    }
}