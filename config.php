<?php
// Site URL
$host = $_SERVER['HTTP_HOST'];
$dirPath = 'get_a_quote/';
if ($host == 'localhost') {
    $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://".$host."/".$dirPath;
    // Database Credentials LOCAL
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PWD', '');
    define('DB', 'get_a_quote');
} else {
    $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://".$host."/".$dirPath;
    // Database Credentials LIVE
    define('HOST', 'localhost');
    define('USER', 'tamecare_admin');
    define('PWD', 'f_aPrl2)Fc$D');
    define('DB', 'tamecare_panel');
}

// Global Usage Variables
define('site_url', $url);
define('website_title', 'YOUR TITLE HERE');
