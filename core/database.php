<?php
require_once './config.php';
$db = mysqli_connect(HOST,USER,PWD,DB);
$sql = $db->query("SELECT * FROM `users`");
$data = mysqli_fetch_object($sql);
?>