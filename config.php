<?php
// Site URL
$url = (empty($_SERVER['HTTPS']) ? 'http' : 'https')."://$_SERVER[HTTP_HOST]/get_a_quote/";

// Database Credentials
define('HOST','localhost');
define('USER','root');
define('PWD','');
define('DB','get_a_quote');

// Global Usage Variables
define('site_url',$url);
define('website_title','YOUR TITLE HERE');
?>