<?php
require_once('../../php/connect.php');

$id = $_POST['id'];
// $id_user = 1;

$sql="DELETE FROM `bot` WHERE id = ?";
$data = $pdo->prepare($sql);
$data->execute(array($id));
$result = $data->fetchAll();


echo $result[0]['id'];
?>