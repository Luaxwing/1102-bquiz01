<form method="post" action="./api/edit.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <!-- <td width="45%">網站標題</td> -->
                <td width="80%">最新消息資料內容</td>
                <td width="10%">顯示</td>
                <td width="10%">刪除</td>
                <!-- <td></td> -->
            </tr>
            <?php
            $total = $DB->count();
            $div = 5;
            $pages = ceil($total / $div);
            $now = $_GET['p'] ?? 1;
            $start = ($now - 1) * $div;
            $rows = $DB->all("limit $start,$div");
            foreach ($rows as $row) {
                ?>
                <tr>

                    <td><textarea type="text" name="text[<?= $row['id'] ?>]" id=""
                            style="width:90%;height:50px;">"<?= $row['text']; ?></textarea></td>
                    <td><input type="checkbox" name="sh[]" id="" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                    <td><input type="checkbox" name="del[]" id="" value="<?= $row['id']; ?>"></td>
                    <!-- <td>
                   <input type="button"onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do ?>&id=<?= $row['id'] ?>')" value="更新圖片">
                   </td> -->
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <div class="cent">
        <?php
        for ($i = 1; $i <= $pages; $i++) {
            $fontsize=($now==$i)?'24px':'16px';
            echo " <a href=?do=news&p=$i";
            echo " style=font-size:$fontsize;";
            // if($i==$now){
            //     echo " style=font-size:25px;";
            // }
            echo">";
            echo $i;
            echo "</a>";
        }
        ?>
    </div>

    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <input type="hidden" name="table" id="" value="<?= $do; ?>">
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/<?= $do ?>.php?table=<?= $do ?>')" value="新增最新消息資料">
                    <!-- ajax  -->
                    <!-- 不是include值要再傳一次 -->
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>