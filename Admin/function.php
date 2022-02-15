<?php
    function del_product($id) {
        include "../connect.php";
        global $db;
        $sql = "DELETE FROM product_listing WHERE id = '$id'";
        $db = $conn->query($sql) or die('Loi truy van');
        header("location:product_listing.php");
        exit();
    }
    function add_product() {
        include "../connect.php";
        move_uploaded_file($_FILES['image']['tmp_name'], '../Images/'.$_FILES['image']['name']);
        $name = $_POST['car_name'];
        $price = $_POST['price'];
        // $content = $_POST['content'];
        $img = '../Images/'.$_FILES['image']['name'];
        $sql = $conn->query("INSERT IGNORE INTO product_listing (Car_name, Images, Price) VALUES ('$name', '$img', '$price')");  
    }
    function edit_product($id) {
        include "../connect.php";      
        move_uploaded_file($_FILES['image']['tmp_name'], '../Images/'.$_FILES['image']['name']);
        $name = $_POST['car_name'];
        $price = $_POST['price'];
        // $content = $_POST['content'];
        $img = '../Images/'.$_FILES['image']['name'];
        $sql = "UPDATE product_listing SET Car_name = '$name', Price = '$price', Images = '$img' WHERE ID = $id ";
        mysqli_query($conn, $sql);
    }
    function del_news($id) {
        include "../connect.php";
        global $db;
        $sql = "DELETE FROM news WHERE id = '$id'";
        $db = $conn->query($sql) or die('Loi truy van');
        header("location:news_listing.php");
        exit();
    }
    function add_news() {
        include "../connect.php";
        move_uploaded_file($_FILES['image']['tmp_name'], '../Images/'.$_FILES['image']['name']);
        $tittle = $_POST['tittle'];
        $content = $_POST['content'];
        $img = '../Images/'.$_FILES['image']['name'];
        $sql = $conn->query("INSERT IGNORE INTO news (Tittle, Images, Content) VALUES ('$tittle', '$img', '$content')");  
    }
    function edit_news($id) {
        include "../connect.php";      
        move_uploaded_file($_FILES['image']['tmp_name'], '../Images/'.$_FILES['image']['name']);
        $name = $_POST["tittle"];
        $content = $_POST['content'];
        $img = '../Images/'.$_FILES['image']['name'];
        $sql = "UPDATE news SET Tittle = '$tittle', Content = '$content', Images = '$img' WHERE ID = $id ";
        mysqli_query($conn, $sql);
    }        
?>