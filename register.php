<?php
    include "connect.php";
    // header("location:register.php");
    $nameErr =  $emailErr = $passErr = $repassErr = "";
    $username = $password = $re_password = $email = "";
    $check = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // lấy thông tin từ các form bằng phương thức POST
        $username = $_POST["username"];
        $password = $_POST["password"];
        $re_password = $_POST["re_password"];
        $email = $_POST["email"];
        $result_name = $conn->query("SELECT * FROM users WHERE Username='$username'");
        $result_email = $conn->query("SELECT * FROM users WHERE Email='$email'");
        //Kiểm tra điều kiện  
        if ($username == "" || $password == "" || $re_password == "" || $email == "") {
            $nameErr = "Username is required *";
            $passErr = "Password is required *";
            $emailErr = "Email is required *";
            $check = false;
        }       
        if ($password != $re_password) {
            $repassErr = "Password didn't match *";
            $passErr = "";
            $check = false;
        }  
        if ($result_name->num_rows > 0) {
            $nameErr = "Username available *";
            $check = false;
        }  
        if ($result_email->num_rows > 0) {
            $emailErr = "Email available *";
            $check = false;
        }        
        if ($check) {
            $password = md5($password);
            $sql = "INSERT INTO users (Username, Password, Email) VALUES ('$username', '$password', '$email')";
            // thực thi câu $sql với biến conn lấy từ file connect.php
            mysqli_query($conn, $sql);
            echo "<script language='javascript'>alert('Đăng ký thành công!');window.location='login.php';</script>";
            $username = $password = $re_password = $email = "";
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
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>Đăng ký thành viên</title>
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
                <div><h2>Create an account</h2></div>
                <div>
                    <label>Username: </label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username;?>">
                    <div class="warning"><span class="error"><?php echo $nameErr;?></span></div>
                </div>                  
                <div>
                    <label>Password: </label>
                    <input type="password" name="password" class="form-control"  value="<?php echo $password;?>">
                    <div class="warning"><span class="error"><?php echo $passErr;?></span></div>
                </div>
                <div>
                    <label>Repassword: </label>
                    <input type="password" name="re_password" class="form-control" >
                    <div class="warning"><span class="error"><?php echo $repassErr;?></span></div>
                </div>                   
                <div>
                    <label>Email: </label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email;?>">
                    <div class="warning"><span class="error"><?php echo $emailErr;?></span></div>
                </div>                    
                <div>
                    <button id="submit" type="submit" name="submit" style="margin: 0 90px;">Register</button>
                </div>   
            </div>                                                    
        </form>
    </body>
</html>
