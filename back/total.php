<form method="post" target="back" action="?do=tii">
        <table width="50%" style="margin:auto;">
            <tbody>
                <tr class="yel">
                    <td width="50%">網站標題</td>
                    <td width="50%"><input type="text" name="total" id="" value="<?=$Total->find(1)['total']?>"></td>
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