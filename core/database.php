<?php
$dirPath = 'clientarea';
$url = $_SERVER['DOCUMENT_ROOT'].'/'.$dirPath.'/config.php';
require_once $url;
require_once 'functions.php';
$db = mysqli_connect(HOST,USER,PWD,DB);
$sql = $db->query("SELECT * FROM `users`");
$data = mysqli_fetch_object($sql);
