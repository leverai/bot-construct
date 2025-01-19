<?php
require_once('connect.php');

$sql1="SELECT model.id_type, model.name, model.price, model.description, model.img, cart.id, cart.id_user, cart.id_model, cart.`count` FROM model INNER JOIN cart ON model.id = cart.id_model WHERE cart.id_user = ?";
$data = $pdo->prepare($sql1);
// $data->execute(array(1));
$data->execute(array($_POST["id_user"]));
$prods = $data->fetchAll();
$output = "";
foreach ($prods as $prod) {
	$sum = $prod['price']*$prod['count'];
    $output.="<div class='cart_product_item' >
				<img src='$prod[img]' alt=''>
				<div class='cart_product_name'>
					<div class='cart_name'>
						$prod[name]
					</div>
					<br>
					<div class='cart_desc'>
						[$prod[description]]
					</div>
				</div>
				<div class='cart_item_count'>
					<div class='quantity_inner'>        
						<button class='bt_minus' product-id=$prod[id_model]>
							<svg viewBox='0 0 24 24'><line x1='5' y1='12' x2='19' y2='12'></line></svg>
						</button>
						<input type='text' size='2' class='quantity' data-max-count='100' value=$prod[count] product-id=$prod[id_model]>
						<button class='bt_plus' product-id=$prod[id_model]>
							<svg viewBox='0 0 24 24'><line x1='12' y1='5' x2='12' y2='19'></line><line x1='5' y1='12' x2='19' y2='12'></line></svg>
						</button>
					</div>
					<div class=''>$prod[price] ₽ / шт.</div>
				</div>
				<div class='cart_last_block'>
					<div class='cart_product_price'>
						Итого <div class='cart_item_sum' price='$prod[price]' sum=$sum><b>$sum</b> ₽</div>
						<br>	
					</div>
					<div class='cart_del_btn'>
						<button row-id=$prod[id]>Удалить</button>
					</div>
				</div>
			</div>";
}
$output .="<div class='order'>
				<div class='order_info'>
					<div class='order_info_label'>
						Количество товара:
					</div>
					<div class='order_prods_count'>
						
					</div>
					<div class='order_info_label'>
						Общая сумма:
					</div>
					<div class='order_sum'>
						
					</div>
				</div>
				<button id='order_btn'>Оформить заказ</button>
			</div>";
echo json_encode(array($output,1000));

?>
