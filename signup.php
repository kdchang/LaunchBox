<?php
include_once 'helpers/helper.php';
session_start();
@$logined = $_SESSION['logined'];
if ($logined) {
	redirect('adpanel.php');
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
    <link rel="shortcut icon" href="../assets/images/icon_128.ico" />
</head>
<body>
    <div class="container">
        <h1>帳號註冊</h1>
        <form class="form-signin" role="form" action="signup_auth.php" method="post">
            <h2 class="form-signin-heading"></h2>
            <legend>稱呼</legend>
            <input type="text" class="form-control" name="username" placeholder="User Name" required>
            <br>
            <legend>電子信箱</legend><input type="email" class="form-control" name="email" placeholder="Email address" required autofocus>
            <br>
            <legend>密碼</legend>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <br>
            <div><a href="">忘記密碼</a> <a href="admin.php">已有帳號</a> <a href="index.php">回首頁</a></div>
            <br>
            <button class="btn btn-lg btn-success btn-block" type="submit">Sign Up</button>
        </form>

    </div>
    <!-- /container -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
