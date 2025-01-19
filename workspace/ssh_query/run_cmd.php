<?php


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

$cmd = $_POST['cmd'];

// $stream = ssh2_exec($conn, "$cmd");
$stream = ssh2_exec($conn, "ps aux | grep node | grep -v grep");
$errorStream = ssh2_fetch_stream($stream, SSH2_STREAM_STDERR);

// Enable blocking for both streams
stream_set_blocking($errorStream, true);
stream_set_blocking($stream, true);

// Whichever of the two below commands is listed first will receive its appropriate output.  The second command receives nothing
echo stream_get_contents($stream);
// echo "Output: " . stream_get_contents($errorStream);

fclose($errorStream);
fclose($stream);

// ssh2_disconnect($conn);

?>