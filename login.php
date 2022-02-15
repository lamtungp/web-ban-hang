<?php
    session_start();
    include "connect.php";
    $name = $pass = $err = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password);
        $result = $conn->query("SELECT * FROM users WHERE Username='$username' AND Password='$password'");
        if ($result->num_rows > 0) {       
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            setcookie("name", $username, time()+86400*30, "/", "", 0);
            header("location:index.php");
        } else {
            $err = "Tài khoản hoặc mật khẩu không chính xác";
        }
    }  
    $conn->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" type="text/css" href="./css/login_logout.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng nhập</title>
    </head>
    <body>
        <div id="action_bar">
            <div class="container">
                <ul class="contact_details">
                    <li class="slogan">Have any question?</li>
                    <li class="phone">
                        <i class="fa fa-phone" style="color: #adadad"></i>
                        <a href="#">+84 397 561 148</a>
                    </li>
                    <li class="email">
                        <i class="fa fa-envelope" style="color: #adadad"></i>
                        <a href="#">tunglamldk@gmail.com</a>
                    </li>
                </ul>
                <ul class="social">
                    <li class="skype">
                        <a href="#" title="Skype">
                            <i class="fa fa-skype"></i>
                        </a>
                    </li>
                    <li class="facebook">
                        <a href="#" title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="twitter">
                        <a href="#" title="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="instagram">
                        <a href="#" title="Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="youtube">
                        <a href="#" title="YouTube">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="register">
            <div class="container form">
                <div><h2>Login</h2></div>
                <div class="warning"><span class="error"><?php echo $err?></span></div>
                <div>
                    <label>Username: </label>
                    <input type="text" name="username" class="form-control">
                </div>                  
                <div>
                    <label>Password: </label>
                    <input type="password" name="password" class="form-control">
                </div>                                    
                <div>
                    <button id="submit" type="submit" name="login">Login</button>
                    <button id="submit" name="register" style="margin-left: 19px;"><a href="register.php" style="color: #000000; text-decoration: none;">Register</a></button>
                </div>
                <!-- <input type="checkbox" name="remember"><label>Remember Password</label>    -->
            </div>                                                           
        </form>
    </body> 
</html>