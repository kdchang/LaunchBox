<?php
include_once 'db_function.php';
include_once 'helpers/helper.php';
session_start();

if (isset($_POST['meal-id']) && isset($_POST['order-username']) && isset($_POST['order-phone']) && isset($_POST['order-count']) &&  isset($_POST['meal-price'])) {
	$meal_id = $_POST['meal-id'];
	$order_username = $_POST['order-username'];
	$order_phone = $_POST['order-phone'];
	$order_address = $_POST['order-address'];
	$order_time = date('Y-m-d H:i:s');
	$order_count = $_POST['order-count'];
	$order_total_price = $order_count * $_POST['meal-price'];
	$order_query = "INSERT INTO `order_info` (meal_id, order_username, order_phone, order_address, order_time, order_count, order_total_price) VALUES ('$meal_id', '$order_username', '$order_phone', '$order_address', '$order_time', '$order_count', '$order_total_price');";
	$order_result = db_query($connect, $order_query);
	if($order_result) {
		$_SESSION['order_submit_msg'] = true;
		redirect('order.php');
	}
} else {
	redirect('order.php');
}
?>