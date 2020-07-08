<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./admin.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../jQuery v3.5.1.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div style="background-color: #333333;">
            <div class="container">
                <div class="navbar">
                    <div class="navbar-nav" style="color: #ffffff; display: inline-block;">Hello <a href="admin.php">Admin</a></div>
                    <!-- <div class="navbar-nav">Logout</div> -->
                </div>
            </div>
        </div>
        <div style="padding: 10px 40px; width: 100%;" class="row">
            <div class="col-sm-2">
                <ul class="nav flex-column" style="width: 100%">
                    <li class="nav-item header text-center">Admin menu</li>
                    <li class="nav-item">
                        <a class="nav-link action" href="#">Tin tuc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link action" href="admin.php?quanly=list">Quan ly san pham</a>           
                    </li>
                    <li class="nav-item">
                        <a class="nav-link action" href="#">Don hang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link action" href="#">User</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-10" id="content"><?php include 'content.php' ?></div>
        </div>
        <!-- <script type="text/javascript">
            $(document).ready(function() {             
                $(".action").click(function() {
                    var x = $(this).html();
                    if (x === "Quan ly san pham") {
                        $("#content").load("product_listing.php");              
                    } else if (x === "Tin tuc") {
                        $("$content").load("product_listing.php")
                    } else if (x === "Don hang") {
                        $("$content").load("product_listing.php")
                    } else if (x === "User") {
                        $("$content").load("product_listing.php")
                    }
                });
            });
        </script>      -->
    </body>
</html>