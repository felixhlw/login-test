<link rel="stylesheet" href="style.css">s
<?php
include "base.php";
$id=$_POST['id'];

$sql="delete from user WHERE id='$id'";

echo "<div class='ct'>";
print_r($sql);
echo "</div>";

//執行
$pdo->exec($sql);
?>


<h1>已完成刪除使用者-ID編號:<?=$id;?></h1>
<div class="wrapper ct">
<a href="admin.php">
<input type="button" name="back" value="回到使用者列表" ></a>
</div>






