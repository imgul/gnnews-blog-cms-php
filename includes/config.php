<?php
$server = 'http://localhost/gnnews-php/';

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'gnnews';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}


// Website Information
$blog_name = 'GN News';
$blog_description = 'GN News is a news website that provides you with the latest news and information.';
$blog_url = 'http://localhost/gnnews-php/';
$blog_logo = 'images/logo.png';
$blog_favicon = 'images/favicon.png';
$blog_version = '1.0.0';
