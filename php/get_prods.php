<?php
require_once('connect.php');

$sort = $_POST['sort'];
$manufacturer = $_POST['manufacturer'];
$from_price = $_POST['from_price'];
$to_price = $_POST['to_price'];

$sql1="SELECT * FROM `model` WHERE (id_type = ? or ? = 0) and 
	(manufacturer like ? or ? = '0') and
	(price > ? or ? = '') and 
	(price < ? or ? = '') order by price $sort";

$data = $pdo->prepare($sql1);
$data->execute(array($_POST["type"],$_POST["type"], $manufacturer,$manufacturer, $from_price,$from_price, $to_price,$to_price));
$prods = $data->fetchAll();
$output = "";
foreach ($prods as $prod) {
    $output.="<a href='#prod-card' rel='modal:open' class='product_item' prod-id='$prod[id]'>
    			<div class='prod_img'>";
    if($prod[id_type]==1)
		$output.=	"<img id-type=$prod[id_type] src=$prod[img] alt='' height='210px'>";
	else
		$output.=	"<img id-type=$prod[id_type] src=$prod[img] alt='' width='210px'>";
	$output.=	"</div>
				<div class='info'>
					<div class='name'>
						$prod[name] [$prod[description]]
					</div>
					<div class='buy'>
						<div class='price'>$prod[price] ₽</div>
						<button class='item_btn' prod-id='$prod[id]'>
							<i class='fa fa-cart-plus' aria-hidden='true' ></i>
						</button>
					</div>
				</div>
			</a>";
}
echo $output;

?>
