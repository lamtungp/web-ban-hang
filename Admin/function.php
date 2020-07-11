<?php
    function del_product($id) {
        include "../connect.php";
        global $db;
        $sql = "DELETE FROM product_listing WHERE id = '$id'";
        $db = $conn->query($sql) or die('Loi truy van');
    }
    function add_product() {
        include "../connect.php";
        $err_img = ""; 
        if (isset($_POST['up']) && isset($_FILES['image'])) {
            if ($_FILES['image']['error'] > 0)
                $err_img = "Image required!";
            else {
                $errors = array();
                // $file_name = $_FILES['image']['name'];
                // $file_size = $_FILES['image']['size'];
                // $file_tmp = $_FILES['image']['tmp_name'];
                // $file_type = $_FILES['image']['type'];
                $tmp = explode('.',$_FILES['image']['name']);
                $file_exit = strtolower(end($tmp));           
                $extensions= array("jpeg","jpg","png");            
                if(!in_array($file_exit, $extensions)){
                    $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
                }           
                if($_FILES['image']['size'] > 2097152) {
                    $errors[]='Kích thước file không được lớn hơn 2MB';
                }
                if (empty($errors)) {
                    move_uploaded_file($_FILES['image']['tmp_name'], '../Images/'.$_FILES['image']['name']);
                    $name = $_POST['car_name'];
                    $price = $_POST['price'];
                    $img = '../Images/'.$_FILES['image']['name'];
                    $sql = $conn->query("INSERT IGNORE INTO product_listing (Car_name, Images, Price) VALUES ('$name', '$img', '$price')");  
                    header("location:product_listing.php");
                }   
            }               
        }
    }
    function edit_product($id) {
        include "../connect.php";
        if(isset($_POST["up"]) && isset($_FILES['image'])) {
            if(isset($_FILES['image'])) {
                if ($_FILES['image']['error'] > 0)
                    echo "Upload lỗi rồi!";
                else {
                    $errors = array();
                    $tmp = explode('.',$_FILES['image']['name']);
                    $file_exit = strtolower(end($tmp));           
                    $extensions= array("jpeg","jpg","png");            
                    if(!in_array($file_exit, $extensions)){
                        $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
                    }           
                    if($_FILES['image']['size'] > 2097152) {
                        $errors[]='Kích thước file không được lớn hơn 2MB';
                    }
                    if (empty($errors)) {
                        move_uploaded_file($_FILES['image']['tmp_name'], '../Images/'.$_FILES['image']['name']);
                        $name = $_POST["name"];
                        $price = $_POST["price"];
                        $img = '../Images/'.$_FILES['image']['name'];
                        $sql = "UPDATE product_listing SET Car_name = '$name', Price = '$price', Images = '$img' WHERE ID = '$id ";
                        mysqli_query($conn, $sql);
                        header("location:product_listing.php");
                    }
                }       
            }
        }
    }
?>