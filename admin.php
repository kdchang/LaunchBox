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
</head>

<body>
    <div class="container">
        <h1>後台登入</h1>
        <form class="form-signin" role="form" action="login_auth.php" method="post">
            <h2 class="form-signin-heading"></h2>
            <input type="email" class="form-control" placeholder="Email address" name="email" required autofocus>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <br>
            <div><a href="">忘記密碼</a> <a href="signup.php">註冊新帳號</a> <a href="index.php">回首頁</a></div>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
        </form>

    </div>
    <!-- /container -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
