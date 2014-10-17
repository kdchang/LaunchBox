<?php
include_once 'db_function.php';
include_once 'helpers/helper.php';
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = sha1($_POST['password']);
	$login_query = "SELECT user_name, user_email FROM `member` WHERE user_email='$email' AND user_password = '$password';";
	$login_query_result = db_query($connect, $login_query);
	if ($login_query_result) {
		$login_result_row_count = db_num_rows($login_query_result);
		if ($login_result_row_count > 0) {
			$login_result_row = db_fetch_array($login_query_result);
			$_SESSION['username'] = $login_result_row['user_name'];
			$_SESSION['logined'] = true;

			//echo $_SESSION['username'];
			//echo $_SESSION['logined'];
			redirect('adpanel.php');
		}
	} else {
		redirect('admin.php');
	}
} else {
	redirect('admin.php');
}
?>