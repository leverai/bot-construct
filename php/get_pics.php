<?php
require_once('connect.php');

$sql1="SELECT * FROM `model`";
$data = $pdo->prepare($sql1);
$data->execute();
$models = $data->fetchAll();

$output = "";
foreach ($models as $model) {
    if($model[img].indexOf($_POST[img]) >= 0)
    {
        $output.="<option selected value=$model[img]>$model[img]</option>";
    }
    else{
        $output.="<option value=$model[img]>$model[img]</option>";
    }
    
}
echo $output;
?>
