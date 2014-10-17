<?php
include_once 'db_function.php';
include_once 'helpers/helper.php';

$order_id = $_GET['order_id'];
$delete_query = "DELETE FROM `order_info` WHERE order_id='$order_id'";
$delete_result = db_query($connect, $delete_query);
if($delete_result) {
	redirect('adpanel.php');
} else {

}
?>