<?php 
require_once 'db.php';
$sql = "SELECT ital FROM `italok` group by ital";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

?>