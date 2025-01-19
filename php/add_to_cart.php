<?php
require_once('connect.php');

$uid = $_POST["id_user"];
$pid = $_POST["prod_id"];


$sql1="SELECT * FROM `cart` WHERE id_user = ? and id_model = ?";
$data = $pdo->prepare($sql1);
$data->execute(array($uid,$pid));
$prods = $data->fetchAll();
$count = count($prods);

if($count > 0){
	$sql1="UPDATE `cart` SET `count`=`count`+1 WHERE `id_user` = ? and `id_model` = ?";
	$data = $pdo->prepare($sql1);
	$data->execute(array($uid,$pid));
}else{
	$sql1="INSERT INTO `cart` (`id_user`, `id_model`, `count`) VALUES (?,?,1)";
	$data = $pdo->prepare($sql1);
	$data->execute(array($uid,$pid));
}

echo $output;

?>
