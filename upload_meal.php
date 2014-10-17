<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);
error_reporting(E_ERROR|E_WARNING);
include_once 'db_function.php';
include_once 'helpers/helper.php';
session_start();

if (isset($_POST['meal-name']) && isset($_POST['meal-price']) && isset($_POST['meal-content']) && isset($_FILES['meal-image'])) {
	// Where the file is going to be placed 
	$target_path = "assets/uploads/";
	$target_path = $target_path . basename($_FILES['meal-image']['name']); 
	$meal_name = $_POST['meal-name'];
	$meal_price = $_POST['meal-price'];
	$meal_content = $_POST['meal-content'];
	$meal_time = date('Y-m-d H:i:s');
	if($_FILES['meal-image']['error'] > 0){
		echo 'Upload Error';
	} else {
		if(file_exists('uploads/' . $_FILES['meal-image']['name'])) {
			echo '圖片已存在';
		} else {
			$image_result = move_uploaded_file($_FILES['meal-image']['tmp_name'], $target_path);
			if($image_result) {
				$meal_image = $target_path;
			} else {
				redirect('admin.php');
			}
		}
	}

	$upload_query = "INSERT INTO `meal_info` (meal_name, meal_price, meal_content, meal_image, meal_time) VALUES ('$meal_name', '$meal_price', '$meal_content', '$meal_image', '$meal_time');";
	$upload_result = db_query($connect, $upload_query);

	if ($upload_result) {
		redirect('adpanel.php');
	}
} else {
	redirect('adpanel.php');
}
?>