<form method="post" action="./api/edit.php">
    <table width="100%" style="text-align: center">
        <tbody>
            <tr class="yel">
                <td width="30%">主選單名稱</td>
                <td width="30%">選單連結網址</td>
                <td width="10%">次選單數</td>
                <td width="10%">顯示</td>
                <td width="10%">刪除</td>
                <td></td>
            </tr>
            <?php

            $rows = $DB->all();
            foreach ($rows as $row) {
                if($row['menu_id']==0){
                ?>
                <tr>
                    <td>
                        <input type="text" name="text[]" value="<?= $row['text']; ?>">
                    </td>
                    <td>
                        <input type="text" name="href[]" value="<?= $row['href']; ?>">
                    </td>
                    <td></td>
                    <td>
                        <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                    </td>
                    <td>
                        <input type="button" value="編輯次選單"
                            onclick="op('#cover','#cvr','./modal/submenu.php?table=<?= $do; ?>&id=<?=$row['id'];?>')">
                    </td> 
                </tr>
                <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                <?php
                }
            }
            ?>
        </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <input type="hidden" name="table" value="<?= $do; ?>">
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增主選單"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
            </tr>
        </tbody>
    </table>

</form>