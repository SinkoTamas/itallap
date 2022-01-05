<?php 
require_once 'db.php';
$sql = "select id, ital from italok order by id";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());
?>