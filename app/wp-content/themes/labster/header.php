<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="description" content="">

    <title>Labster</title>

    <!--[if lte IE 9]>
        <link rel="stylesheet" href="/wp-content/themes/labster/dist/css/ie.css">
    <![endif]-->
    <!--[if !IE]><!-->
    	<link rel="stylesheet" href="/wp-content/themes/labster/dist/css/main.css">
    <!--<![endif]-->
    
    <!--<script src="/wp-content/themes/labster/js/vendor/modernizr.custom.js"></script>-->
</head>
<body <?php echo is_front_page() ? "class='page--home'" : "" ?>>

<input type="checkbox" id="menu-checkbox" class="hide">
<label for="menu-checkbox" class="menu-toggle">
    <?php require('img' . DS . 'svg' . DS . 'markup' . DS . 'menu.svg'); ?>
</label>

<input type="checkbox" id="search-checkbox" class="hide">
<label for="search-checkbox" class="search-toggle">
    <?php require('img' . DS . 'svg' . DS . 'markup' . DS . 'search.svg'); ?>
</label>

<header class="header">
    <div id="particles-js" class="header__particles"></div>
    <h1 class="logo">Labster</h1>
</header>
<nav class="nav">
    <ul>
        <li class="nav__item">
            <a class="nav__link beta" href="Courses">Courses</a>
        <li class="nav__item">
            <a class="nav__link beta" href="Features">Features</a>
        <li class="nav__item">
            <a class="nav__link beta" href="About">About</a>
    </ul>
</nav>
<main class="main">