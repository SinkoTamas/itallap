<?php 
require_once 'db.php';
$sql = "select italok.id, italok.ital, italok.ar, kategoria.nev from italok inner join kategoria on kategoria.id=italok.kategoriaid order by id";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());
?>