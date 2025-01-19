<?php
require_once('connect.php');


$row = $_POST['row'];


$sql1="DELETE FROM cart WHERE id = ?";
$data = $pdo->prepare($sql1);
$data->execute(array($row));
$prods = $data->fetchAll();
echo $output;

?>
