<form method="post"  action="../api/edit_bottom.php">
        <table width="50%" style="margin:auto;">
            <tbody>
                <tr class="yel">
                    <td width="50%">頁尾版權</td>
                    <td width="50%"><input type="text" name="bottom" id="" value="<?=$Bottom->find(1)['bottom']?>"></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>