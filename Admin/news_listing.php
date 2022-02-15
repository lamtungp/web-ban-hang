<?php
    include "../connect.php";
    include_once "function.php";
    include "header.php";
    include "footer.php";
    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
    $current_page = !empty($_GET['page'])?$_GET['page']:1;
    $offset = ($current_page - 1) * $item_per_page;
    $result = $conn->query("SELECT * FROM news ORDER BY 'ID' ASC LIMIT " . $item_per_page . " OFFSET " . $offset);
    $totalRecords = $conn->query("SELECT * FROM news");
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
?>
<div style="padding: 10px 40px; width: 100%;" class="col-sm-10" id="content">
    <fieldset>
        <table>   
            <div class="header text-center">Quan ly tin tuc</div>
            <div style="float: right;"><a href="add_news.php">Them bai viet</a></div>
            <?php
                $i = 1;
                while ($row = $result->fetch_array()) {
                ?>
                    <tr>
                        <td class="text-center"><?= $i?></td>
                        <td><img src="<?= $row['Images'] ?>" title="<?= $row['Tittle'] ?>" class="img-car"></td>
                        <td class="text-center"><?= $row['Tittle'] ?></td>
                        <td><?= $row['Content'] ?></span></td>
                        <td class="text-center"><a href="edit_news.php?edit_id=<?php echo $row['ID']; ?>">Sua</a></td>
                        <td class="text-center"><a onclick="window.confirm('Bạn muốn xóa không');" href="?del_id=<?php echo $row['ID']; ?>">Xoa</a></td>
                    </tr>
            <?php $i++; }?>
        </table>
        <?php
            include '../pagination.php';
        ?>
        <?php
            if (isset($_GET['del_id'])) {
                $id = $_GET['del_id'];
                del_news($id);
            }
        ?>
    </fieldset>
</div>