<?php
require_once('../../php/connect.php');

$id_user = $_POST['id_user'];
// $id_user = 1;

$sql="INSERT INTO `bot`( `id_user`, `name`, `token`, `description`, `path`) VALUES (?,'Бот','','','')";
$data = $pdo->prepare($sql);
$data->execute(array($id_user));
$bots = $data->fetchAll();

$sql="SELECT * FROM `bot` ORDER BY id DESC LIMIT 1";
$data = $pdo->prepare($sql);
$data->execute();
$last = $data->fetchAll();

$name = "Бот ".$last[0]['id'];
$desc = "Описание Бота ".$last[0]['id'];

$sql="UPDATE `bot` SET `name`=?,`description`=? WHERE id = ?";
$data = $pdo->prepare($sql);
$data->execute(array("$name","$desc",$last[0]['id']));

echo $last[0]['id'];
?>