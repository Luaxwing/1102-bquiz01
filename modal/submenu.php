<?php
include_once "../api/db.php";
?>

<!-- AJAX -->
<!-- client端 照常 sever 端則要獨立處理 -->

<h3>
    <!--  -->
    新增次選單
    <!--  -->
</h3>
<hr>


<form action="./api/submenu.php" method="post" enctype="multipart/form-data">


    <table>

        <tr>
            <td>次選單名稱:</td>
            <td>次選單連結網址:</td>
            <td>刪除</td>
        </tr>
        <?php
        $subs = $Menu->all(['menu_id' => $_GET['id']]);
        foreach ($subs as $sub) {
            ?>
            <tr>
                <td><input type="text" name="text[]" id="" value="<?= $sub['text']; ?>"></td>
                <td><input type="text" name="href[]" id="" value="<?= $sub['href']; ?>"></td>
                <td><input type="checkbox" name="del[]" id="" value="<?= $sub['id']; ?>"></td>
                <input type="hidden" name="id[]" value="<?=$sub['menu_id']?>">
            </tr>
            <?php
        }
        ?>
        <!--  -->

    </table>
    <div>
        <input type="hidden" name="table" id="" value="<?= $_GET['table']; ?>">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
        <input type="button" value="更多次選單">
    </div>

</form>

<script>

    function more() {
        let item = ` <tr>
                         <td><input type="text" name="text[]" id=""></td>
                         <td><input type="text" name="href[]" id=""></td>
                         <td><input type="checkbox" name="del[]" id=""></td>
                    </tr>`
        $("#xxx").append(item);
    }
    // 
    // --before-- <div> --preppend--|--append-- </div> --after--
    // --remove--
</script>