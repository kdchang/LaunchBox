<?php
include_once 'helpers/helper.php';
session_start();
session_unset();
session_destroy();

redirect('index.php');
?>