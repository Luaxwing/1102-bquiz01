<h3>
    <!--  -->
新增動態文字廣告
<!--  -->
</h3>
<hr>


<form action="./api/add.php" method="post" enctype="multipart/form-data">


    <table>
        <!-- <tr>
            <td>標題區圖片</td>
            <td><input type="file" name="img" id=""></td>
        </tr> -->

        <!--  -->
        <tr>
            <td>動態文字廣告</td>
            <td><input type="text" name="text" id=""></td>
        </tr>
        <!--  -->
        
    </table>
    <div>
        <input type="hidden" name="table" id="" value="<?=$_GET['table']?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>

</form>