<?php
require_once('../../php/connect.php');

$btn_id = $_POST['btn_id'];
// $id_user = 1;

$sql="DELETE FROM `button` WHERE id = ?";
$data = $pdo->prepare($sql);
$data->execute(array($btn_id));
$result = $data->fetchAll();


echo $result[0]['id'];
?>