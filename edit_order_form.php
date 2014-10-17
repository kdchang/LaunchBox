<?php
include_once 'db_function.php';
include_once 'helpers/helper.php';
session_start();
$username = $_SESSION['username'];
$logined = $_SESSION['logined'];
if (!$logined) {
	redirect('admin.php');
}

$order_id = $_GET['order_id'];
$order_username = $_GET['order_username'];
$order_phone = $_GET['order_phone'];
$order_address = $_GET['order_address'];
$order_count = $_GET['order_count'];
$order_total_price = $_GET['order_total_price'];
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
		<h3>訂單修改</h3>
		<br>
		<form action="edit_order.php" method="post">
            <div>
                <legend>訂購人</legend>
                <input type="text" name="order-username" value="<?php echo $order_username; ?>" required>
            </div>
            <br>
            <div>
                <legend>聯絡電話</legend>
                <input type="text" name="order-phone" value="<?php echo $order_phone; ?>" required>
            </div>
            <br>
            <div>
                <legend>配送地址</legend>
                <input type="text" name="order-address" value="<?php echo $order_address; ?>" required>
            </div>
            <br>
            <div>
                <legend>訂購數量</legend>
                <select name="order-count" id="order-count" value="<?php echo $order_count; ?>">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="5">6</option>
                    <option value="5">7</option>
                    <option value="5">8</option>
                    <option value="5">9</option>
                </select>
            </div>
            <br>
            <div>
                <legend>訂單總價</legend>
                <input type="text" name="order-total-price" value="<?php echo $order_total_price; ?>" required>
            </div>
            <br>
            <input type="hidden" name="order-id" value="<?php echo $order_id; ?>">
            <input class="btn btn-lg btn-success" type="submit" value="修改">
            <input class="btn btn-lg btn-danger" type="reset" value="重設">
		</form>
		<br>
<?php include_once 'layout/footer.php'; ?>
	