<form method="post" action="./api/edit.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="70%">動畫圖片</td>
                
                <td width="10%">顯示</td>
                <td width="10%">刪除</td>
                <td></td>
            </tr>
            <?php
            $rows = $Mvim->all();
            foreach ($rows as $row) {
                ?>
                <tr>
                    <td width="70%">
                        <img src="../img/<?=$row['img']?>" alt="" style="width=300px;height:150px";>
                    </td>
                    
                    <td width="10%"><input type="checkbox" name="sh[]" id="" value="<?=$row['id'];?>"
                    <?=($row['sh']==1)?'checked':'';?>></td>
                    <td width="10%"><input type="checkbox" name="del[]" id="" value="<?=$row['id'];?>"></td>
                   <td>
                   <input type="button"onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do ?>&id=<?=$row['id']?>')" value="更改動畫">
                   </td>
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
                        onclick="op('#cover','#cvr','./modal/<?= $do ?>.php?table=<?= $do ?>')" value="新增動畫圖片">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>