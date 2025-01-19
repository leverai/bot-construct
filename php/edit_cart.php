<?php
require_once('connect.php');

$count = $_POST['count'];
$uid = $_POST['id_user'];
$pid = $_POST['id_prod'];


$sql1="UPDATE cart SET count = $count WHERE id_user = ? and id_model = ?";
$data = $pdo->prepare($sql1);
$data->execute(array($uid,$pid));
$prods = $data->fetchAll();
echo $output;

?>
