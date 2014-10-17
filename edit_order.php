<?php
include_once 'db_function.php';
include_once 'helpers/helper.php';
session_start();

$order_id = $_POST['order-id'];
$order_username = $_POST['order-username'];
$order_phone = $_POST['order-phone'];
$order_address = $_POST['order-address'];
$order_count = $_POST['order-count'];
$order_total_price = $_POST['order-total-price'];
$edit_query = "UPDATE `order_info` SET order_username='$order_username', order_phone='$order_phone', order_address='$order_address', order_count='$order_count', order_total_price='$order_total_price' WHERE order_id='$order_id';";
$edit_result = db_query($connect, $edit_query);
if($edit_result) {
	redirect('adpanel.php');
}
?>