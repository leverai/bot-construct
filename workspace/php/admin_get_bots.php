<?php
require_once('../../php/connect.php');

$sql1="SELECT * FROM `user`";
$data = $pdo->prepare($sql1);
$data->execute(array());
$users = $data->fetchAll();

$sql2="SELECT * FROM `bot`";
$data = $pdo->prepare($sql2);
$data->execute(array());
$bots = $data->fetchAll();


$output = "<h3>Боты пользователей</h3> <div class='kill_pm button users_bot_row_button'>Очистить процессы</div>";
$user_field_output = "";
for ($i = 0;$i<count($users);$i++){

    $user_field_output = "";
    $user_field_output .="<div class='cmd_field'>
                                <div class='field_user_name'>
                                    <h3>".$users[$i]['name']."</h3>
                                </div>
                                <div class='filed_user_header'>
                                    <div>Имя бота</div>
                                    <div>Статус</div>
                                    <div></div>
                                    <div></div>
                                </div>";
    $isBots = false;
    for($j = 0;$j<count($bots);$j++){
        if($users[$i]['id'] == $bots[$j]['id_user']){
            $isBots = true;
            $user_field_output .="<div class='users_bot_row'>
                                    <div class='users_bot_row_info__bot_name'>
                                        ".$bots[$j]['name']."
                                    </div>
                                    <div class='users_bot_row_info__bot_status'>
                                        ".(($bots[$j]['status'] == 'On')?"<div class='bot_status_enabled'>Включен</div>":"<div class='bot_status_disabled'>Выключен</div>")."
                                    </div>
                                    <div data-id='".$bots[$j]['id']."' data-user=".$users[$i]['id']." class='start_bot button users_bot_row_button'>
                                        <i class='fa-solid fa-play'></i><div class='admin_btn'>Запустить <div class='part2'>бота</div></div>
                                    </div>
                                    <div data-id='".$bots[$j]['id']."' data-user=".$users[$i]['id']." class='stop_bot button users_bot_row_button'>
                                        <i class='fa-solid fa-stop'></i><div class='admin_btn'>Остановить <div class='part2'>бота</div></div>
                                    </div>
                                    <div class='bots_btns'>
                                        <i class='fa-solid fa-gear' data-id=".$bots[$j]['id']."></i>
                                        <a download='bots/".$users[$i]['id']."/".$bots[$j]['id']."/index.js' href='bots/".$users[$i]['id']."/".$bots[$j]['id']."/index.js'>
                                            <i class='fa-solid fa-file-export'></i> 
                                        </a>
                                        <i class='fa-solid fa-trash' data-id=".$bots[$j]['id']."></i>
                                    </div>
                                </div>";
        }
    }
    $user_field_output .= '</div>';
    if($isBots)
        $output .=$user_field_output;
}

echo $output;

?>