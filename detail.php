<?php
    include 'connect.php';
    session_start();
    $name = $_SESSION['username'];
    $user = $conn->query("SELECT ID FROM users WHERE Username='$name'"); 
    $detail = $user->fetch_array();
    $user_id = $detail['ID'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" type="text/css" href="./css/home.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./js/1.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    </head>
    <body style="background-color: #f2f4f7">
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
        <div id="top_bar" style="background-color: #ffffff;">
            <div class="container">
                <div class="navbar navbar-expand-lg">
                    <div><a href="index.php" style="margin-right: 5px;">Home</a></div>
                    <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
                        <input class="form-control mr-sm-0" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="color: #1c1c1b;"><i class="fa fa-search"></i></button>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="border-right: 1px solid #f2f2e6;">Mua bán ô tô</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="border-right: 1px solid #f2f2e6;">Bảng giá ô tô</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="border-right: 1px solid #f2f2e6;">Salon ô tô</a>
                        </li>
                        <li class="nav-item w3-dropdown-hover" style="border-right: 1px solid #f2f2e6;">
                            <a class="nav-link more" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin tức xe hơi</a>
                            <div class="w3-dropdown-content w3-bar-block w3-border" aria-labelledby="navbarDropdownMenuLink" style="z-index: 4;">
                              <a class="w3-bar-item more" style="text-decoration: none;" href="#">Action</a>
                              <a class="w3-bar-item more" style="text-decoration: none;" href="#">Another action</a>
                              <a class="w3-bar-item more" style="text-decoration: none;" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="./Images/BMW.png"/><span class="badge"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-header text-center">
                                    <strong>Account</strong>
                                </li>
                                <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
                                <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
                                <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
                                <li class="dropdown-menu-header text-center">
                                    <strong>Settings</strong>
                                </li>
                                <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                                <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
                                <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
                                <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
                                <li class="divider"></li>
                                <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
                                <li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>	
                            </ul>
                        </li>
                        <li class="nav-item dropdown cart">
                            <a href="cart.php">
                                <i class="fa fa-shopping-cart cart-icon">
                                    <!-- <div style="number">2</div> -->
                                    <span style="font-size: 16px;">Giỏ hàng</span>
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
            if (isset($_GET['name'])) {
                $kq = $_GET['name'];
                $result = $conn->query("SELECT * FROM product_listing WHERE Car_name='$kq'");
                $row = $result->fetch_array();
            ?>
            <div class="container" style="background-color: #ffffff;">
                <div class="row">
                    <div class="col-sm-5">
                        <div><img src="<?= substr($row['Images'], 3, strlen($row['Images'])-3);?>" style="width: 100%"></div>
                        <div class="row">
                            <div class="col-sm-3"><img src="" alt=""></div>
                            <div class="col-sm-3"><img src="" alt=""></div>
                            <div class="col-sm-3"><img src="" alt=""></div>
                            <div class="col-sm-3"><img src="" alt=""></div>
                            <div class="col-sm-3"><img src="" alt=""></div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h2><?= $row['Car_name']?></h2>
                        <div style="font-size: 20px; color: #053896; margin: 20px 0"><?= number_format($row['Price'],"0", ",", ".")?> VND</div>
                        <div>
                            <form action="" method="POST">
                                <div class="button_added">
                                    <span style="color: #757575;"> Số lượng </span>
                                    <input class="reduce is-form" type="button" value="-">
                                    <input class="amount text-center" aria-label="quantity" type="text" value="1" min="1" name="soluong">
                                    <input class="increase is-form" type="button" value="+">
                                </div>
                                <div style="width: 40%;">
                                    <button style="width: 100%;" type="submit" class="btn btn-lg btn-primary ok" name="order">Thêm vào giỏ hàng</button>
                                </div>
                            </form>
                        </div>      
                    </div>
                </div>
            </div>
        <?php 
                if (isset($_POST['order'])) {
                    $amount = $_POST['soluong'];
                    $car_id = $row['ID']; 
                    $sql = $conn->query("INSERT INTO order_list (User_id, Car_id, Amount) VALUES ('$user_id', '$car_id', '$amount')");
                    echo "<script>alert('Thêm vào giỏ hàng thành công !')</script>";
                }
            }
        ?>
        <div class="container" style="background-color: #ffffff;">
            <p>Chi tiết sản phẩm</p> 
            <div><p>Thương hiệu</p></div>
            <div><p>Xuất xứ</p></div>
            <div><p>Kho hàng</p></div>
        </div>
        <div class="container" style="background-color: #ffffff;">
            <p>Mô tả sản phẩm</p>
        </div>
        
    </body>
</html>