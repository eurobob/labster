<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="description" content="">

    <title>Labster</title>
    <link rel="stylesheet" href="/wp-content/themes/labster/dist/css/main.css">
    
    <!--<script src="/wp-content/themes/labster/js/vendor/modernizr.custom.js"></script>-->
</head>
<body <?php echo is_front_page() ? "class='page--home'" : "" ?>>


<input type="radio" id="search-radio" class="hide" name="header-buttons">
<input type="radio" id="menu-radio" class="hide" name="header-buttons">
<input type="radio" id="close-radio" class="hide" name="header-buttons">

<label for="search-radio" class="search-toggle">
    <?php require('img' . DS . 'svg' . DS . 'markup' . DS . 'search.svg'); ?>
</label>

<label for="menu-radio" class="menu-toggle">
    <?php require('img' . DS . 'svg' . DS . 'markup' . DS . 'menu.svg'); ?>
</label>

<label for="close-radio" class="close-toggle">
    <?php require('img' . DS . 'svg' . DS . 'markup' . DS . 'close.svg'); ?>
</label>

<header class="header">
    <div id="particles-js" class="header__particles"></div>
    <h1 class="logo">Labster</h1>
</header>
<nav class="nav text--center caps">
    <ul class="nav__list">
        <li class="nav__item">
            <a class="nav__link mega" href="/courses">Courses</a>
        <li class="nav__item">
            <a class="nav__link mega" href="/features">Features</a>
        <li class="nav__item">
            <a class="nav__link mega" href="/about">About</a>
    </ul>
</nav>
<input type="text" class="search mega" placeholder="Start typing to search...">
<main class="main">