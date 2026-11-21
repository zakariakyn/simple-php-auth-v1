<?php 
    session_start();

    $email = "";
    $pass = "";
    
    $error = false;
    

    if(isset($_POST["logout"])){
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit();
    }

    if(isset($_POST["submit"])){
        if(empty($_POST["user_email"])){
            $_SESSION["error_email"] = "Email require";
            $error = true  ;

        }else{
            $email = $_POST["user_email"];
        }
        
        
        if(empty($_POST["user_pass"])){
            $_SESSION["error_pass"] = "Password require";
            $error = true;
        }else{
            $pass = $_POST["user_pass"];
        }

        if($error){
            header("location: login.php");
            exit();
        }

        $_SESSION["logged"] = true ;
        header("location: dashboard.php");
        exit();
    }

        exit();
    
?>