<!-- <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;"> -->
<!-- <p class="t cent botli">網站標題管理</p> -->
<form method="post" action="?do=tii">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="45%">網站標題</td>
                <td width="23%">替代文字</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td></td>
            </tr>
            <?php
            $rows = $Title->all();
            foreach ($rows as $row) {
                ?>
                <tr>
                    <td width="45%">
                        <img src="../img/<?=$row['img']?>" alt="" style="width=300px;height:30px";>
                    </td>
                    <td width="23%"><input type="text" name="text[<?=$row['id']?>]" id="" value="<?=$row['text'];?>"></td>
                    <td width="7%"><input type="radio" name="sh" id="" value="<?=$row['id'];?>"></td>
                    <td width="7%"><input type="checkbox" name="del[]" id="" value="<?=$row['id'];?>"></td>
                   <td>
                   <input type="button"onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do ?>&id=<?=$row['id']?>')" value="更新圖片">
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
                        onclick="op('#cover','#cvr','./modal/<?= $do ?>.php?table=<?= $do ?>')" value="新增網站標題圖片">
                    <!-- ajax  -->
                    <!-- 不是include值要再傳一次 -->
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
<!-- </div> -->