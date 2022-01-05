<?php
require_once "db.php";

$kategoria=$_GET['nev'];
$sql="insert into kategoria values (null,'{$kategoria}')";
$stmt=$db->exec($sql);
echo $stmt;
?>