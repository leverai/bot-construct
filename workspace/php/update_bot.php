<?php
require_once('../../php/connect.php');

$id_user = $_POST['id_user'];
$user = $_POST['user'];
$bot_id = $_POST['bot_id'];
$bot_name = $_POST['bot_name'];
$token = $_POST['bot_token'];
$bot_desc = $_POST['bot_desc'];
$path = $user."/".$bot_id."_".$bot_name."/";
$path = str_replace(' ', '', $path);

$cmds = $_POST['cmds'];
// $id_user = 1;

$sql1="UPDATE `bot` SET `name`=?,`token`=?,`description`=?,`path`=? WHERE id = ?";
$data = $pdo->prepare($sql1);
$data->execute(array("$bot_name","$token","$bot_desc","$path",$bot_id));
$bots = $data->fetchAll();

for ($i=0;$i<count($cmds);$i++){
	$sql2="UPDATE `command` SET `name`=?,`description`=?,`text`=? WHERE id = ?";
	$data = $pdo->prepare($sql2);

	$cmd_name = $cmds[$i][0];
	$cmd_description = $cmds[$i][1];
	$cmd_text = $cmds[$i][2];
	$cmd_id = $cmds[$i][4];

	$data->execute(array("$cmd_name","$cmd_description","$cmd_text",$cmd_id));

	if($cmds[$i][3] != 0){
		for ($j=0;$j<count($cmds[$i][3]);$j++){
			$sql3="UPDATE `button` SET `type`=?,`text`=?,`content`=? WHERE id = ?";
			$data = $pdo->prepare($sql3);

			$btn_type = $cmds[$i][3][$j][0];
			$btn_text = $cmds[$i][3][$j][1];
			$btn_content = $cmds[$i][3][$j][2];
			$btn_id = $cmds[$i][3][$j][3];

			$data->execute(array("$btn_type","$btn_text","$btn_content",$btn_id));
		}
	}
}


// echo $bots;
?>