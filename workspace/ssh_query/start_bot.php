<?php
require_once('../../php/connect.php');
$uid = $_POST['uid'];
$bid = $_POST['bid'];
// $uid = 1;
// $bid = 1;
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// phpinfo();
$methods = array(
    'hostkey'=>'ssh-rsa',
    'client_to_server' => array(
        'crypt' => 'aes256-ctr,aes192-ctr,aes128-ctr,aes256-cbc,aes192-cbc,aes128-cbc,3des-cbc,blowfish-cbc',
        'comp' => 'none'),
    'server_to_client' => array(
        'crypt' => 'aes256-ctr,aes192-ctr,aes128-ctr,aes256-cbc,aes192-cbc,aes128-cbc,3des-cbc,blowfish-cbc',
        'comp' => 'none'));
$conn = ssh2_connect("217.114.12.33", "22");
$rc = ssh2_auth_password( $conn, "root","IcIK!WW3H1EV");
// $stream = ssh2_exec($conn, 'node bot-main/index.js');
$path = $uid."/".$bid;
// $path = "1/1";
$script = file_get_contents("../bots/".$path."/index.js");
// $str = '"asdasd"';
// $str = str_replace('"', '\\"',  $str);
// echo "$str";
$stream = ssh2_exec($conn, 'if [ ! -d "users_bots/'.$path.'" ]; then echo "False"; else echo "True"; fi');

stream_set_blocking($stream, true);
$DirExist = "True";
$DirExist = stream_get_contents($stream);
$DirExist= str_replace(array("\r\n", "\r", "\n"), '',  strip_tags($DirExist));


stream_set_blocking($stream, false);
if($DirExist == "False"){
    $stream = ssh2_exec($conn, 'mkdir -p "users_bots/'.$path.'"');
    echo 'Dir maked';
}

$stream = ssh2_exec($conn, 'echo "'.$script.'" > users_bots/'.$path.'/'.$bid.'.js');
echo "Bot deployed on ".'users_bots/'.$path.'/'.$bid.'.js';
echo $script;
stream_set_blocking($stream, true);
$feedback = stream_get_contents($stream);
echo $feedback;
stream_set_blocking($stream, false);
// sleep(2);
$stream = ssh2_exec($conn, 'pm2 start users_bots/'.$path.'/'.$bid.'.js');
// $stream = ssh2_exec($conn, 'node users_bots/'.$path.'/index.js');

$sql1="UPDATE `bot` SET `status`='On' WHERE id = ?";
$data = $pdo->prepare($sql1);
$data->execute(array($bid));
// sleep(2);
fclose($stream);
// ssh2_disconnect($conn);
?>