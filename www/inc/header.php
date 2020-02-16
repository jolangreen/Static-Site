<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $page_title ?></title>
    <meta name="description" content="<?php echo $page_description?>"/>
    <meta name="keywords" content="<?php echo $page_keywords ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">

    <?php echo $insertStyles; ?>

    <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>favicon.ico" />
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/style.min.css" />
    
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