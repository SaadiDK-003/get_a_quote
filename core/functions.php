<?php

function is_loggedin() {
    return (isset($_SESSION['user']) ? true : false);
}

function login($email, $pwd, $db) {
    $pwd = md5($pwd);
    $sql = $db->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$pwd'");
    $check = mysqli_num_rows($sql);
    if($check > 0) {
        if($sql) {
            $data = mysqli_fetch_object($sql);
            $_SESSION['user'] = $data->id;
            return true;
        }
    } else {
        return false;
    }
}
