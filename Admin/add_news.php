<?php
    include_once "function.php";
    include "header.php";
    include "../connect.php";
    $err_img = ""; 
    if (isset($_POST['up']) && isset($_FILES['image'])) {
        if ($_FILES['image']['error'] > 0)
            $err_img = "Image required!";
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
                add_news();               
                header("location:news_listing.php");           
            }
        }
    }
?>
<div id="content" class="container col-sm-10">
    <fieldset>
        <form action="?upload=file" method="POST" enctype="multipart/form-data">
            <div class="menu">
                <label>Tieu de: </label>
                <input type="text" name="tittle" class="form-control">
            </div>                  
            <div class="menu">
                <label>Content: </label>
                <textarea name="content" rows="4" class="form-control"></textarea>
            </div>                   
            <div class="menu">
                <input multiple type="file" name="image">
            </div>
            <div>
                <input type="submit" value="Upload File" name="up" onclick="<?php echo "<script>alert('Them tin tuc thanh cong'); </script>";?>">
            </div>                 
        </form>
    </fieldset>
</div>  
<?php include "footer.php"; ?>    