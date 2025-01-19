<?php
require_once('../../php/connect.php');

$id_user = $_POST['id_user'];
// $id_user = 1;
$sql="SELECT * FROM `bot` WHERE id_user = ?";
$data = $pdo->prepare($sql);
$data->execute(array($id_user));
$bots = $data->fetchAll();


$output = "";
for ($i = 0;$i<count($bots);$i++){
    $output .= '<div class="bots_row">
                                <input class="text-field" placeholder="Название бота" disabled value="'.$bots[$i]["name"].'">

                                <input class="text-field" placeholder="Описание бота" disabled value="'.$bots[$i]["description"].'">
                                <div class="bots_btns">
                                    <i class="fa-solid fa-gear" data-id='.$bots[$i]["id"].'></i>
                                    <i class="fa-solid fa-trash" data-id='.$bots[$i]["id"].'></i>
                                </div>
                            </div>';
}

echo $output;

?>