<?php
require_once('../../php/connect.php');

$cmd_id = $_POST['cmd_id'];
// $id_user = 1;

$sql="INSERT INTO `button`(`id_command`, `type`, `text`, `content`) VALUES (?,'url','Кнопка','google.com')";
$data = $pdo->prepare($sql);
$data->execute(array($cmd_id));

?>