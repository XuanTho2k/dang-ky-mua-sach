<?php 
// include
include "view/header.php";

 include_once "controller/homeController.php";

//

$controller = new HomeController();


// navigation methods switching between cases

if ( isset($_GET['act']) && $_GET['act'] != ""){
    $action = $_GET['act'];
    switch($action){
        case "logIn":
            $controller -> user_logIn();
            
            break;
        case "signUp":
            header("Location:view/user/sign-up.php");
            break;
        case "forgotPw":
            break;
        default:

            break;
    }
} else {
    include "view/home.php";
}


include "view/footer.php";
?>