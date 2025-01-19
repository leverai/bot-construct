<?

$safe_login=$_POST['login'];
$count=0;
require_once('connect.php');

$sql = "SELECT * FROM user WHERE login like ?";
$result = $pdo->prepare($sql);
$result->execute(array("$safe_login"));
$line2=$result->fetchAll();
$count=count($line2);

echo $count;
?>