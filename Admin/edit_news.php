<?php
    include "function.php";
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
                    edit_news($id);
                    echo "<script>alert('Update tin tuc thanh cong'); </script>";
                    header("location:news_listing.php");
                }
            }       
        }
    }
?>
    <div id="content" class="container col-sm-10">
        <fieldset>
            <form action="?upload_id=<?php echo $row['ID']?>" method="POST" enctype="multipart/form-data">
                <div class="menu">
                    <label>Ten: </label>
                    <input type="text" name="tittle" class="form-control" value="<?php echo $row['Tittle']?>">
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