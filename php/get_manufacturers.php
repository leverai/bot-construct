<?php
require_once('connect.php');

$sql1="SELECT DISTINCT `manufacturer` FROM `model` ";
$data = $pdo->prepare($sql1);
$data->execute(array());
$prods = $data->fetchAll();
$output = "<option value=0>Выберите производителя</option>";
foreach ($prods as $prod) {
    $output.="<option value=$prod[manufacturer]>$prod[manufacturer]</option>";
}
echo $output;

?>
