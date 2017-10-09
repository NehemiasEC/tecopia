<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo("charset")?>">
    <title><?php bloginfo("name")?></title>
    <link rel="stylesheet" href="<?php print CSS?>normalize.css">
    <?php wp_head()?>
    <link rel="stylesheet" href="<?php print CSS?>author.css">
    <meta name="description" content="<?php bloginfo("description")?>">
    <link rel="pingback" href="<?php bloginfo("pingback")?>">
    <div id="fb-root"></div>
</head>
<body>
<header>
    <figure>
        <a href="<?php bloginfo("url")?>"><img src="<?php print IMAGES?>logo.png" alt="Teconecta Logo"></a>
    </figure>
    <nav>
        <!-- navegacion principal-->
        <?php wp_nav_menu(array("menu"=>"Footer","container"=>"nav"))?>

    </nav>
    <div id="profile">
        <!-- menu del perfil del indivudo con api de facebook-->
    </div>
</header>