<?php
// page name
$page_name_ext =  basename($_SERVER['PHP_SELF']);
$page_name = substr($page_name_ext, 0, -4);

$page_title = ucfirst($page_name);
// Change the page title for each page
switch ($page_name) {
    case 'index':
        $page_title = 'Dashboard';
        break;
    case 'login':
        $page_title = 'Login';
        break;
    case 'register':
        $page_title = 'Register';
        break;
    default:
        $page_title;
        break;
}


// Different header depending on the page
switch ($page_name) {
    case 'index':
        echo '<!DOCTYPE html>
        <html>
        
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>' . $page_title . ' | GN News</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="robots" content="noindex">
            <!-- Google fonts - Popppins for copy-->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;display=swap">
            <!-- Prism Syntax Highlighting-->
            <link rel="stylesheet" href="dist/vendor/prismjs/plugins/toolbar/prism-toolbar.css">
            <link rel="stylesheet" href="dist/vendor/prismjs/themes/prism-okaidia.css">
            <!-- The Main Theme stylesheet (Contains also Bootstrap CSS)-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
            <link rel="stylesheet" href="dist/vendor/bootstrap/css/style.default.css" id="theme-stylesheet">
            <!-- Custom stylesheet - for your changes-->
            <link rel="stylesheet" href="dist/css/style.custom.css">
            <!-- Favicon-->
            <link rel="shortcut icon" href="dist/img/favicon.png">
        </head>
        
        <body>';
        break;

    case 'login':
        echo '<!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>' . $page_title . ' | GN News</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="robots" content="noindex">
            <!-- Google fonts - Popppins for copy-->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
            <!-- Prism Syntax Highlighting-->
            <link rel="stylesheet" href="dist/vendor/prismjs/plugins/toolbar/prism-toolbar.css">
            <link rel="stylesheet" href="dist/vendor/prismjs/themes/prism-okaidia.css">
            <!-- The Main Theme stylesheet (Contains also Bootstrap CSS)-->
            <link rel="stylesheet" href="dist/vendor/bootstrap/css/style.default.css" id="theme-stylesheet">
            <!-- Custom stylesheet - for your changes-->
            <link rel="stylesheet" href="dist/css/custom.css">
            <!-- Favicon-->
            <link rel="shortcut icon" href="dist/img/favicon.png">
        </head>
        
        <body>';
        break;
    case 'register':
        echo '<!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>' . $page_title . ' | GN News</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="robots" content="noindex">
            <!-- Google fonts - Popppins for copy-->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
            <!-- Prism Syntax Highlighting-->
            <link rel="stylesheet" href="dist/vendor/prismjs/plugins/toolbar/prism-toolbar.css">
            <link rel="stylesheet" href="dist/vendor/prismjs/themes/prism-okaidia.css">
            <!-- The Main Theme stylesheet (Contains also Bootstrap CSS)-->
            <link rel="stylesheet" href="dist/vendor/bootstrap/css/style.default.css" id="theme-stylesheet">
            <!-- Custom stylesheet - for your changes-->
            <link rel="stylesheet" href="dist/css/custom.css">
            <!-- Favicon-->
            <link rel="shortcut icon" href="dist/img/favicon.png">
        </head>
        <body>';
        break;
    case 'users-profile':
        echo '<!DOCTYPE html>
        <html>
        
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Bubbly - Boootstrap 5 Admin template by Bootstrapious.com</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="robots" content="noindex">
            <!-- Google fonts - Popppins for copy-->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;display=swap"
                rel="stylesheet">
            <!-- Prism Syntax Highlighting-->
            <link rel="stylesheet" href="dist/vendor/prismjs/plugins/toolbar/prism-toolbar.css">
            <link rel="stylesheet" href="dist/vendor/prismjs/themes/prism-okaidia.css">
            <!-- The Main Theme stylesheet (Contains also Bootstrap CSS)-->
            <link rel="stylesheet" href="dist/vendor/bootstrap/css/style.default.css" id="theme-stylesheet">
            <!-- Custom stylesheet - for your changes-->
            <link rel="stylesheet" href="dist/css/custom.css">
            <!-- Favicon-->
            <link rel="shortcut icon" href="dist/img/favicon.png">';
        break;
    case 'page':
        echo 'Page';
        break;
    default:
        echo 'Page 1';
        break;
}

include 'alerts.php';
