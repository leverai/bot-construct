<?

$login=$_POST['login'];
$pass=$_POST['pass'];
$safe_pass=md5($pass);
$count=0;
require_once('connect.php');

$sql1 = "SELECT id FROM `user` WHERE name = ?";
$result1 = $pdo->prepare($sql1);
$result1->execute(array("$login"));

$user=$result1->fetchAll();
if(count($user) == 0){
	$sql = "INSERT INTO `user`(`name`, `pass`, `role`) VALUES (?,?,'user')";

	$result = $pdo->prepare($sql);
	$result->execute(array("$login","$safe_pass"));

	$sql2 = "SELECT id FROM `user` ORDER BY id DESC LIMIT 1";
	$result2 = $pdo->query($sql2);

	$line2=$result2->fetchAll();


	echo "True";
}else{
	echo "False";
}
?>