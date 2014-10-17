<?php
include_once 'db_function.php';
include_once 'helpers/helper.php';
session_start();
$username = $_SESSION['username'];
$logined = $_SESSION['logined'];
if (!$logined) {
	redirect('admin.php');
}

$meal_id = $_GET['meal_id'];
$meal_name = $_GET['meal_name'];
$meal_price = $_GET['meal_price'];
$meal_content = $_GET['meal_content'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>便當當</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jumbotron-narrow.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="container">
        <h2>LaunchBox 後台管理系統</h2>
        <hr>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">上一頁</a></li>
          <li><a href="logout.php">登出</a></li>
        </ul>
		<h3>商品修改</h3>
		<br>
		<form action="edit_meal.php" method="post" enctype="multipart/form-data">
            <div>
                <legend>商品名稱</legend>
                <input type="text" name="meal-name" value="<?php echo $meal_name; ?>" required>
            </div>
            <br>
            <div>
                <legend>商品單價</legend>
                <input type="text" name="meal-price" value="<?php echo $meal_price; ?>" required>
            </div>
            <br>
            <div>
                <legend>商品說明</legend>
                <textarea name="meal-content" id="meal-content" cols="30" rows="10"><?php echo $meal_content; ?></textarea>
            </div>
            <br>
            <div>
                <legend>商品圖片</legend>
                <input type="file" name="meal-image" required>
            </div>
            <br>
            <input type="hidden" name="meal-id" value="<?php echo $meal_id; ?>">
            <input class="btn btn-lg btn-success" type="submit" value="修改">
            <input class="btn btn-lg btn-danger" type="reset" value="重設">
		</form>
		<br>
<?php include_once 'layout/footer.php'; ?>
	