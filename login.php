<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin : 0;
            padding : 0;
        }
        #login_page{
            display: grid;
            place-items: center ;
        }
        h1{
            
        }
    </style>
</head>
<body>
    <div id="login_page">
        <h1>login</h1><br>

        <form action="auth.php" method="POST">
            <label for="">Entre email :</label><br>
            <input type="email" name="user_email" value ="<?php echo $_POST["user_email"] ?? '';?>"><span style ="color : red"><?php  
                                                            if(isset($_SESSION["error_email"])){
                                                                echo $_SESSION["error_email"];
                                                                unset($_SESSION["error_email"]);
                                                            }
                                                        ?>
                                                    </span>
            <br>

            <label for="">Entre password :</label><br>
            <input type="Password" name="user_pass"><span style ="color : red"><?php  
                                                            if(isset($_SESSION["error_pass"])){
                                                                echo $_SESSION["error_pass"];
                                                                unset($_SESSION["error_pass"]);
                                                            }
                                                        ?>
                                                    </span>
            <br><br>

            <button type="submit" name="submit">submit</button>

        </form>
    </div>
</body>
</html>
