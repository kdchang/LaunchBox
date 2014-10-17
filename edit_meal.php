<?php
include_once 'db_function.php';
include_once 'helpers/helper.php';
session_start();

$meal_id = $_POST['meal-id'];
$meal_name = $_POST['meal-name'];
$meal_price = $_POST['meal-price'];
$meal_content = $_POST['meal-content'];
$meal_time = date('Y-m-d H:i:s');

if(isset($_FILES['meal-image'])) {
	if($_FILES['meal-image']['error'] > 0) {
	} else {
		$target_path = 'assets/uploads/' . basename($_FILES['meal-image']['name']);
		$mova_file = move_uploaded_file($_FILES['meal-image']['tmp_name'], $target_path);
		if($mova_file) {
			$meal_image = $target_path;
		}
	}
}
$edit_query = "UPDATE `meal_info` SET meal_name='$meal_name', meal_price='$meal_price', meal_content='$meal_content', meal_image='$meal_image', meal_time='$meal_time' WHERE meal_id='$meal_id';";
$edit_result = db_query($connect, $edit_query);
if($edit_result) {
	redirect('adpanel.php');
}
?>