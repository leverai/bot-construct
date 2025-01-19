<?php
require_once('../../php/connect.php');

$bot_id = $_POST['bot_id'];
// $id_user = 1;

$sql="INSERT INTO `command`(`id_bot`, `name`, `description`, `text`) VALUES (?,'start','Описание команды','Ответ на команду')";
$data = $pdo->prepare($sql);
$data->execute(array($bot_id));
$bots = $data->fetchAll();

$sql="SELECT * FROM `command` ORDER BY id DESC LIMIT 1";
$data = $pdo->prepare($sql);
$data->execute();
$last = $data->fetchAll();

echo json_encode($last[0]);
?>