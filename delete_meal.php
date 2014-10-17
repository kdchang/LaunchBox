<?php
include_once 'db_function.php';
include_once 'helpers/helper.php';

$meal_id = $_GET['meal_id'];
$delete_query = "DELETE FROM `meal_info` WHERE meal_id='$meal_id'";
$delete_result = db_query($connect, $delete_query);
if($delete_result) {
	redirect('adpanel.php');
} else {

}
?>