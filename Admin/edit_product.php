<?php
    // include "function.php";
    include "../connect.php";
    include "header.php";
?>
<?php
    $id = 0;
    if(isset($_GET['edit_id'])){ 
        $id = $_GET['edit_id'];
    }
    $sql = $conn->query("SELECT * FROM product_listing WHERE ID='$id'");
    $row = $sql->fetch_array();
    if(isset($_POST["up"])) {
        $id = $_GET['upload_id'];
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
                    $name = $_POST["car_name"];
                    $price = $_POST["price"];
                    $img = '../Images/'.$_FILES['image']['name'];
                    $sql = "UPDATE product_listing SET Car_name = '$name', Price = '$price', Images = '$img' WHERE ID = $id ";
                    mysqli_query($conn, $sql);
                    echo "<script>alert('Update san pham thanh cong'); </script>";
                    header("location:product_listing.php");
                }
            }       
        }
    }
    // edit_product($id);
?>
    <div id="content" class="container col-sm-10">
        <fieldset>
            <form action="?upload_id=<?php echo $row['ID']?>" method="POST" enctype="multipart/form-data">
                <div class="menu">
                    <label>Ten: </label>
                    <input type="text" name="car_name" class="form-control" value="<?php echo $row['Car_name']?>">
                </div>                  
                <div class="menu">
                    <label>Price: </label>
                    <input type="price" name="price" class="form-control" value="<?php echo $row['Price']?>">
                </div>
                <div class="menu">
                    <label>Content: </label>
                    <textarea name="content" rows="4" class="form-control"></textarea>
                </div>                   
                <div class="menu">
                    <input multiple type="file" name="image" value="">
                </div>
                <div>
                    <input type="submit" value="process" name="up">
                </div>                 
            </form>
        </fieldset>
    </div>      
<?php include "footer.php" ?>