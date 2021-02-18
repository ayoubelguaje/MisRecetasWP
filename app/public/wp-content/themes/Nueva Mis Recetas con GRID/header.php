<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="icone.png">
    <link rel="stylesheet" href="<? echo get_stylesheet_directory_uri(); ?>/style/style.css">
    <link rel="stylesheet" href="<? echo get_stylesheet_directory_uri(); ?>/style/font-awsome/css/all.min.css">
    <? wp_head(); ?>
</head>

<body>

    <header class=" mb-2">
        <div class="container">
            <div class="block-center-row">
                <img src="<? echo get_stylesheet_directory_uri(); ?>/-resources/icone.png" alt="image">
            </div>
            <h1 class="">Mis <span>Recetas</span> </h1>
        </div>
    </header>
    <div class="container">
    <? wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'container' => 'nav',
            'container_class' => 'nav-main',
            'menu_id' => 'primary-menu'
        )
    ); ?>
    </div>
    
    <!--<nav class=" mt-2">
        <div class="container">
            <ul>
                <li><a class="active fnt-mob" href="index.html">Inicio</a></li>
                <li><a class="fnt-mob" href="recetas.html">Recetas</a> </li>
                <li><a href="receta.html">Receta</a></li>
                <li><a href="contactar.html">Contactar</a></li>
            </ul>
        </div>
    </nav>-->