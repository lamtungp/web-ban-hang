<?php
include 'connect.php';
$result_car = $conn->query("SELECT * FROM product_listing ORDER BY 'ID' ASC");
$result_news = $conn->query("SELECT * FROM news ORDER BY 'ID' ASC");
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
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
        <div id="top_bar" style="background-color: #ffffff;">
            <div class="container">
                <div class="navbar navbar-expand-lg">
                    <div><a href="index.php">Home </a></div>
                    <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
                        <input class="form-control mr-sm-0" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="color: #1c1c1b;"><i class="fa fa-search">Tìm kiếm</i></button>
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
                                <i class="fa fa-shopping-cart cart-icon"></i>
                                <span>Giỏ hàng</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="vehicles">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <ul class="nav flex-column" style="width: 100%; color: #000">
                            <li class="nav-item sl">
                                <a class="nav-link action" href="news_listing.php">Tin tuc</a>
                            </li>
                            <li class="nav-item sl">
                                <a class="nav-link action" href="product_listing.php">Quan ly san pham</a>           
                            </li>
                            <li class="nav-item sl">
                                <a class="nav-link action" href="#">Don hang</a>
                            </li>
                            <li class="nav-item sl">
                                <a class="nav-link action" href="user_listing.php">Users</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-10">
                        <div class="row">
                            <?php
                                while ($row = $result_car->fetch_array()) {
                            ?>
                            <div class="col-sm-3">
                                <a href="detail.php?name=<?= $row['Car_name']?>"><img src="<?= substr($row['Images'], 3, strlen($row['Images'])-3); ?>" title="<?= $row['Car_name'] ?>" class="img-car"></a>
                                <h2>
                                    <a href="detail.php?name=<?= $row['Car_name']?>"><?= $row['Car_name'] ?></a>
                                    <span class="price"><?= number_format($row['Price'], 0, ",", ".") ?> VNĐ</span>
                                </h2>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </body>
</html>