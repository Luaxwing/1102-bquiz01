<?php
// if (isset($_SESSION['login'])) {
// 	header("location:../back.php");
// }else{


?>


<div class="di"
	style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<?php
	include "marquee.php";
	?>
<?php
if (isset($_SESSION['login'])) {
echo "<p class=cent>已登入</p>";
}else{
?>

	<div style="height:32px; display:block;"></div>
	<!--正中央-->

	<form method="post" action="./api/usercheck.php">
		<p class="t botli">管理員登入區</p>
		<p class="cent">帳號 ： <input name="acc" autofocus="" type="text"></p>
		<p class="cent">密碼 ： <input name="pw" type="password"></p>
		<?php
		if (isset($_GET['error'])) {
			// echo "<p class=cent style=color:red;>{$_SESSION['error']}</p>";
			echo "<p class=cent style=color:red;>請輸入正確的使用者</p>";
			// echo "<script>alert('{$_GET['error']}')</script>";
		}
		?>
		<p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
	</form>

<?php
}
?>
</div>



<?php
// }
?>