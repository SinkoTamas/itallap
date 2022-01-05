<?php 
require_once 'db.php';
if(isset($_GET['id']))
    $sql = "SELECT italok.id,ital,ar FROM `italok` inner join kategoria on kategoria.id=italok.kategoriaid where italok.kategoriaid = {$_GET['id']}";
else
    $sql = "SELECT italok.id,ital,ar FROM `italok` inner join kategoria on kategoria.id=italok.kategoriaid";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

?>