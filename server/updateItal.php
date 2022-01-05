<?php
require_once 'db.php';
$_POST = json_decode(file_get_contents('php://input'), true);//az érkező adatból php arrayt készítünk
//print_r($_POST);
if(isset($_POST['id'])){
    $sql="update kategoria set nev='{$_POST['nev']}' where id={$_POST['id']}";
    //echo $sql;
    $stmt=$db->exec($sql);
    if($stmt)
        echo " sikeres adatmódosítás!";
    else
        echo ' nem sikerült az adatmódosítás!';
}else
    echo ' Hiba!!!';
?>