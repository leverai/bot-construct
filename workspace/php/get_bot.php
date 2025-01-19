<?php
require_once('../../php/connect.php');

$bot_id = $_POST['bot_id'];
// $id_user = 1;

$sql="SELECT * FROM `bot` WHERE id = ?";
$data = $pdo->prepare($sql);
$data->execute(array($bot_id));
$bots = $data->fetchAll();

$sql="SELECT * FROM `command` WHERE id_bot = ?";
$data = $pdo->prepare($sql);
$data->execute(array($bot_id));
$cmds = $data->fetchAll();

$sql="SELECT * FROM `button` WHERE id_command = ?";



$cmds_list = "";




for($i = 0;$i < count($cmds);$i++){
    $data = $pdo->prepare($sql);
    $data->execute(array($cmds[$i]['id']));
    $btns = $data->fetchAll();
    $btns_list = "";
    for($j = 0;$j < count($btns);$j++){
        $btns_list.='<div class="btn_row" data-id='.$btns[$j]["id"].'>
                            <input class="text-field btn_row_text" placeholder="Текст в кнопке" value="'.$btns[$j]["text"].'">
                            <div class="btn_action_container">
                                <select class="text-field btn_action">';
                    if($btns[$j]["type"] == 'url'){
                        $btns_list.=' <option selected value="url">Переход по URL</option>
                                    <option value="cmd">Команда</option>';
                    }else{
                        $btns_list.=' <option  value="url">Переход по URL</option>
                                    <option selected value="cmd">Команда</option>';
                    }
                                   
                        $btns_list.='</select>';
                    if($btns[$j]["type"] == 'url') {
                        $btns_list.='<input class="text-field action_cmd hidden" placeholder="Команда">
                                <input class="text-field action_url" placeholder="Ссылка URL" value="'.$btns[$j]["content"].'">';
                    } else{
                        $btns_list.='<input class="text-field action_cmd " placeholder="Команда" value="'.$btns[$j]["content"].'">
                                <input class="text-field action_url hidden" placeholder="Ссылка URL">';
                    }          
                        $btns_list.= ' </div>
                            <i class="fa-solid fa-trash" data-id='.$btns[$j]["id"].'></i>
                        </div>';
    }

    $cmds_list .= '<div class="cmd_field" data-id="'.$cmds[$i]["id"].'">
                    <div class="cmd_field_number">
                        '.($i+1).'
                    </div>
                    <div class="cmd_field_main">
                        <input class="text-field cmd_name" value="'.$cmds[$i]["name"].'">
                        <div class="cmd_desc">
                            <input class="text-field" value="'.$cmds[$i]["description"].'">
                        </div>
                        <i class="fa-solid fa-trash"></i>
                    </div>
                    <h4>Ответ</h4> 
                    <div class="answer_container">';
    $text = str_replace("\\n", "<br>", $cmds[$i]["text"]);
    $text = str_replace('"', "'",  $text);
    $cmds_list .=       '<textarea class="answer_text text-field" value="'.$text.'" placeholder="Текст ответа команды">'.$text.'</textarea>';
    $cmds_list .=   '</div>
                    <h4>Кнопки</h4> 
                    <div class="btn_container">
                        <div class="add_btn button add_button">
                            Добавить кнопку
                        </div>
                        <div class="btn_header">
                            <h4>Текст</h4>
                            <h4>Действие</h4>
                        </div>

                        <div class="btn_content">
                            '.$btns_list.'
                        </div>

                    </div>
                </div>';
}


$output = '<div class="list_field">
                <div class="field_title">
                    Название
                </div>
                <input id="bot_name" data-user-id="'.$bots[0]["id_user"].'" class="text-field" value="'.$bots[0]["name"].'">
            </div>
            <div class="list_field">
                <div class="field_title">
                    Описание
                </div>
                <input id="bot_desc" class="text-field" value="'.$bots[0]["description"].'">
            </div>
            <div class="list_field">
                <div class="field_title">
                    Токен
                </div>
                <input id="bot_token" class="text-field bot_token" value="'.$bots[0]["token"].'">
            </div>
            <div class="list_title">
                <h3>Команды бота</h3> 
            </div>
            <div class="add_cmd button add_button">
                Добавить команду
            </div>
            <div class="cmd_header">
                <h4>Команда</h4>
                <h4>Описание</h4>
            </div>
            <div class="cmd_content">
               '.$cmds_list.'
            </div>';

$output .='<div class="hidden" id=bot_status data-status="'.$bots[0]["status"].'"></div>';
echo $output;

?>