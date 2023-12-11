<form method="post" action="./api/edit.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <!-- <td width="45%">網站標題</td> -->
                <td width="45%">帳號</td>
                <td width="45%">密碼</td>
                <td width="10%">刪除</td>
                <!-- <td></td> -->
            </tr>
            <?php
            $rows = $DB->all();
            foreach ($rows as $row) {
                ?>
                <tr>

                    <td><input type="text" name="acc[]" id="" value="<?= $row['acc']; ?>" style="width:80%;">
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    </td>

                    <td><input type="password" name="pw[]" id="" value="<?= $row['pw']; ?>" >
                    </td>

                    <td><input type="checkbox" name="del[]" id="" value="<?= $row['id']; ?>"></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <input type="hidden" name="table" id="" value="<?= $do; ?>">
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/<?= $do ?>.php?table=<?= $do ?>')" value="新增管理者帳號">
                    <!-- ajax  -->
                    <!-- 不是include值要再傳一次 -->
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>