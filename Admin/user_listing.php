<?php
    include "../connect.php";
    include "function.php";
    include "header.php";
    include "footer.php";
    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
    $current_page = !empty($_GET['page'])?$_GET['page']:1;
    $offset = ($current_page - 1) * $item_per_page;
    $result = $conn->query("SELECT * FROM users ORDER BY 'ID' ASC LIMIT " . $item_per_page . " OFFSET " . $offset);
    $totalRecords = $conn->query("SELECT * FROM users");
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    // echo $current_page;
?>
<div style="padding: 10px 40px; width: 100%;" class="col-sm-10" id="content">
    <fieldset>
        <table>   
            <div class="header text-center">Quan ly nguoi dung</div>
            <tr>
                <td class="text-center">ID</td>
                <td class="text-center">Ten</td>
                <td class="text-center">Password</td>
                <td class="text-center">Email</td>
            </tr>
            <?php
                // $i = 1;
                while ($row = $result->fetch_array()) {
                ?>
                    <tr>
                        <td class="text-center"><?= $row['ID']?></td>
                        <td class="text-center"><?= $row['Username'] ?></td>
                        <td class="text-center"><?= $row['Password'] ?></td>
                        <td class="text-center"><?= $row['Email'] ?></td>
                    </tr>
            <?php }?>
        </table>
        <?php
            include '../pagination.php';
        ?>
    </fieldset>
<div>