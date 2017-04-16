<?php 
// YOU MUST CHANGE THIS! -- Define the Base URL for development or production.
define("BASE_URL", "http://localhost:8888/");
define("ROOT_PATH", "http://localhost:8888/");


// set class name as page
$pageName = basename($_SERVER['SCRIPT_NAME']);
$pageClassInit = str_replace("/", "", $pageName);
$pageClass = str_replace(".php", "", $pageClassInit);
if ($pageClass == NULL || $pageClass == "index" ) {
    $pageClass = "home";
}


// Use to implement Data URI images within the pages
function dataImage($path) {
    return 'data:image/jpeg;base64,' . base64_encode(file_get_contents( ROOT_PATH . 'images/' . $path ));
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $page_title ?></title>
    <meta name="description" content="<?php echo $page_description?>"/>
    <meta name="keywords" content="<?php echo $page_keywords ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">

    <?php echo $insertStyles; ?>

    <link rel="icon" type="image/x-icon" href="<? echo BASE_URL; ?>favicon.ico" />
    <link rel="stylesheet" href="<? echo ROOT_PATH; ?>css/bootstrap.css" />
    <link rel="stylesheet" href="<? echo ROOT_PATH; ?>css/font-awesome.css" />
    <link rel="stylesheet" href="<? echo ROOT_PATH; ?>css/style.min.css" />
    
</head>

<body class="<?php echo $pageClass; ?>">

<!-- Header
================================================== -->
<header>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <h1><a href="/" class="logo"></a></h1>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse pull-right">
               <ul id="menu-header-menu" class="nav navbar-nav">
                    <li class="current-menu-item"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Main Content
================================================== -->
<main id="main" class="main">