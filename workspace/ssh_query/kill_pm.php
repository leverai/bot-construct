<?php
require_once('../../php/connect.php');
// $uid = $_POST['uid'];
// $bid = $_POST['bid'];

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
$stream = ssh2_exec($conn, 'pm2 kill');

fclose($stream);
?>