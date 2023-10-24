<?php 
    include "../model/user.php";
    include "../model/user.php";
    class HomeController {
        public function index(){

        }

        public function user_logIn(){
           /* $user_name = $_POST['user-name'];
            $pw = $_POST['pw'];
            $sql = "SELECT * FROM users WHERE user_name = '$user_name' AND pw = '$pw'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $_SESSION['user_name'] = $user_name;
                header("location:../index.php?act=home");
            }else{
                echo "<script>alert('Invalid Username or Password');</script>";*/
            $user_name = $_POST['user-name'];
            $pw = $_POST['pw'];
            $check = user_login($user_name, $pw);

            if( is_array($check)){
                $_SESSION['user'] = $check;
                header("location:../index.php?");
            }
            }
        

        public function user_signUp(){

        }
    }
?>