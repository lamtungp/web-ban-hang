<?php
    session_start();
    include 'connect.php';    
    $_SESSION["username"] = $_COOKIE["name"];
    if(!isset($_SESSION['username'])) {
        header("location:login.php");
        exit;
    }
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
        <script type="text/javascript" src="./js/1.js"></script>
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
        <div id="search">
            <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
                <input class="form-control mr-sm-0" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="color: #1c1c1b;"><i class="fa fa-search">Tìm kiếm</i></button>
            </form>
        </div>
        <div id="top_bar" style="background-color: #ffffff;">
            <div class="container">
                <div class="navbar navbar-expand-lg">
                    <div><a href="index.php" style="margin-right: 5px;">Home</a></div>
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
        <div class="slide">
            <div id="active" class="slide_1"></div>
            <div class="move">
                <span id="moved-on" class="btn-prev">&#8249;</span>
                <span id="moved-on" class="btn-next">&#8250;</span>
            </div>
            <div class="nut">               
                <ul class="round">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div> 
        <div class="manufacturer">
            <div class="container">
                <h1 class="news-title">hãng xe</h1>
                <div class="row" style="padding-top: 20px;">
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/Audi.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">audi</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/BMW.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">bmw</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/Ferrari.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">ferrari</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/Ford.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">ford</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/Honda.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">honda</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/Hyundai.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">hyundai</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/KIA.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">kia</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/Lamborghini.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">lamborghini</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/Lexus.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">lexus</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/Mazda.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">mazda</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/Mercedes-Benz.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">mercedes-benz</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="each-img">
                            <img src="./Images/Toyota.png" alt="hang xe" style="width: 100%;">
                            <span class="ad-slogan">toyota</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>   
        <div class="welcome">
            <div class="container">   
                <div class="row">
                    <div class="col-sm-6">
                        <div class="b-welcome__text">
                            <h2>Trang web mua xe trực tuyến</h2>
                            <h3 style="text-transform: uppercase;">chào mừng bạn đến với lamtung</h3>
                            <p>Website được thiết kế dễ dàng và tiện lợi trong việc chọn lựa xe hơi giá tốt, giúp bạn nhanh chóng chọn cho mình được chiếc xe như ý. Và là nơi để người bán tiếp cận hàng nghìn khách hàng tiềm năng mỗi ngày. </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="b-welcome__service">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="b-welcome__service-auto">
                                        <div class="b-welcome__service-img">
                                            <span class="fa fa-cab"></span>                                            
                                        </div>
                                        <h3 style="text-align: center;">Mua xe giá tốt</h3>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="b-welcome__service-auto">
                                        <div class="b-welcome__service-img">
                                            <span class="fa fa-male"></span>                                            
                                        </div>
                                        <h3 style="text-align: center;">Hơn 5 triệu khách hàng</h3>
                                    </div>
                                </div>  
                                <div class="col-sm-6">
                                    <div class="b-welcome__service-auto">
                                        <div class="b-welcome__service-img">
                                            <span class="fa fa-book"></span>                                            
                                        </div>
                                        <h3 style="text-align: center;">hướng dẫn</h3>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="b-welcome__service-auto">
                                        <div class="b-welcome__service-img">
                                            <span class="fa fa-phone"></span>                                            
                                        </div>
                                        <h3 style="text-align: center;">24/7 support</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="container">
                <h1 class="news-title">thế giới xe hơi</h1>
                <div class="row">
                    <?php  
                        while ($row = $result_news->fetch_array()) {
                    ?>
                        <div class="col-sm-3">
                            <a href="#"><img src="<?= substr($row['Images'], 3, strlen($row['Images'])-3); ?>" title="<?= $row['Tittle'] ?>" class="img-car"></a>
                            <h2>
                                <a href="#"><?= $row['Tittle'] ?></a>
                            </h2>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>        
        <div class="vehicles">
            <div class="container">
                <h1 class="news-title">dòng xe ưa chuộng</h1>
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
                <div class="text-center"><a href="list.php">Xem thêm</a></div>
            </div>
        </div>       
        <div class="done" style="background-color: #edeef0;">
            <div class="container" style="padding-bottom: 30px;">
                <h1 class="news-title">bạn muốn làm gì</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="overlay">
                            <div class="content">
                                <div class="images"><img src="./Images/mua_oto.png"></div>
                                <h4>mua xe ô tô ngay</h4>
                                <div class="button"><a href="#" class="btn btn-primary">Xem</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="overlay1">
                            <div class="content">
                                <div class="images"><img src="./Images/ban_oto.png"></div>
                                <h4>bán xe ô tô ngay</h4>
                                <div class="button"><a href="#" class="btn btn-primary">Xem</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        <div class="note" style="background-color: #1c1c1b; color: #ffffff; height: 60px; text-align: center; padding: 20px 0;">
            <span style="height: 100%; color: #cccccc;">If you interested in <a href="#" style="color: #ffffff;">WEBSITE</a>, do not wait and <a href="#" style="color: #ffffff;">BUY IT NOW</a></span>
        </div>
        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 font" style="border-right: 2px solid #47473e;">
                        <h4>Giới thiệu</h4>
                        <p>Lamtung mang đến cho bạn những lựa chọn xe hơi tốt nhất</p>
                    </div>
                    <div class="col-sm-4 font" style="border-right: 2px solid #47473e;">
                        <h4>Hệ thống đại lý bán xe ô tô</h4>
                        <p>Cơ sở 1: </p>
                        <p>Cơ sở 2: </p>
                        <p>Cơ sở 3: </p>
                        <p>Cơ sở 4: </p>
                        <p>Cơ sở 5: </p>
                    </div>
                    <div class="col-sm-4 font">
                        <h4>Liên hệ</h4>
                        <div class="info__contact-item">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="info__contact-item">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="info__contact-item">
                            <span class="fa fa-phone"> Hotline: +84 397 561 148</span>
                        </div>
                        <div class="info__contact-item">
                            <span class="fa fa-envelope"> Email: tunglamldk@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <span>Thank you</span>
        </footer>
    </body>
</html>