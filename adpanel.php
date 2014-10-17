<?php
include_once 'db_function.php';
include_once 'helpers/helper.php';
session_start();
$username = $_SESSION['username'];
$logined = $_SESSION['logined'];
if (!$logined) {
	redirect('admin.php');
}
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
          <li class="active"><a href="#order" role="tab" data-toggle="tab">訂單資訊</a></li>
          <li><a href="#upload" role="tab" data-toggle="tab">商品上架</a></li>
          <li><a href="#manage" role="tab" data-toggle="tab">商品管理</a></li>
          <li><a href="logout.php">登出</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="order">
            <?php include_once 'layout/order_tab.php'; ?>
          </div>
          <div class="tab-pane" id="upload">
            <?php include_once 'layout/upload_tab.php'; ?>
          </div>
          <div class="tab-pane" id="manage">
            <?php include_once 'layout/manage_tab.php'; ?>
          </div>
        </div>
<?php include_once 'layout/footer.php'; ?>

