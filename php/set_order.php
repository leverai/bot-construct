<?php
require_once('connect.php');

$uid = $_POST["uid"];


$sql1="SELECT * FROM `cart` WHERE id_user = ?";
$data = $pdo->prepare($sql1);
$data->execute(array($uid));
$prods = $data->fetchAll();

$sql2 = "SELECT id_order FROM `order` ORDER BY id_order DESC LIMIT 1";
$result = $pdo->query($sql2);
$line=$result->fetchAll();

foreach($prods as $prod){
	$sql3 = "INSERT INTO `order`(`id_order`, `id_user`, `id_model`, `count`, `date`) VALUES (?,?,?,?,?)";
	$result2 = $pdo->prepare($sql3);
	$result2->execute(array($line[0][id_order]+1,$prod[id_user],$prod[id_model],$prod[count],date("Y-m-d")));
}
$sql4 = "DELETE FROM `cart` WHERE id_user = ?";
$result3 = $pdo->prepare($sql4);
$result3->execute(array($uid));


?>
