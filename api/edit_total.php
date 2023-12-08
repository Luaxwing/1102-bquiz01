<?php include_once "db.php" ; ?>
<?php 
$_POST['total'];
$total=$Total->find(1);
$total['total']=$_POST['total'];
$Total->save($total);

// header("location:../back.php?do=total");
to("../back.php?do=total");

?>