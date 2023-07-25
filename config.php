<?php
// Site URL
$host = $_SERVER['HTTP_HOST'];
$dirPath = 'get_a_quote/';
if ($host == 'localhost') {
    $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://".$host."/".$dirPath;
    // Database Credentials LOCAL
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PWD', 'admin123');
    define('DB', 'get_a_quote');
} else {
    $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://".$host."/".$dirPath;
    // Database Credentials LIVE
    define('HOST', 'localhost');
    define('USER', 'octoinsurance_admin');
    define('PWD', 'O3x6q6;tFPy2');
    define('DB', 'octoinsurance_quote');
}

// Global Usage Variables
define('site_url', $url);
define('website_title', 'YOUR TITLE HERE');
