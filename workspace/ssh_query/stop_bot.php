<?php
require_once('../../php/connect.php');
$uid = $_POST['uid'];
$bid = $_POST['bid'];


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
echo $script;
$stream = ssh2_exec($conn, 'pm2 stop '.$bid);
// ssh2_disconnect($conn);
fclose($stream);


$sql1="UPDATE `bot` SET `status`='Off' WHERE id = ?";
$data = $pdo->prepare($sql1);
$data->execute(array($bid));
?>