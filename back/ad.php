
<form method="post" action="./api/edit.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <!-- <td width="45%">網站標題</td> -->
                <td width="80%">動態文字廣告</td>
                <td width="10%">顯示</td>
                <td width="10%">刪除</td>
                <!-- <td></td> -->
            </tr>
            <?php
                $rows=$DB->all();
                foreach($rows as $row){
                ?>
                <tr>
    
                    <td ><input type="text" name="text[<?=$row['id']?>]" id="" value="<?=$row['text'];?>"style="width:80%;"></td>
                    <td ><input type="checkbox" name="sh[]" id="" value="<?=$row['id'];?>"
                    <?=($row['sh']==1)?'checked':'';?>></td>
                    <td ><input type="checkbox" name="del[]" id="" value="<?=$row['id'];?>"></td>
                   <!-- <td>
                   <input type="button"onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do ?>&id=<?=$row['id']?>')" value="更新圖片">
                   </td> -->
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
                        onclick="op('#cover','#cvr','./modal/<?= $do ?>.php?table=<?= $do ?>')" value="新增動態文字廣告">
                    <!-- ajax  -->
                    <!-- 不是include值要再傳一次 -->
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
