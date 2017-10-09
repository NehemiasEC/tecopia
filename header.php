<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo("charset")?>">
    <title><?php bloginfo("name")?></title>
    <!--<link rel="stylesheet" href="<?php print CSS?>normalize.css">
    <link rel="stylesheet" href="<?php print CSS?>main.css">-->
    <meta name="description" content="<?php bloginfo("description")?>">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo("pingback")?>">
    <?php wp_head()?>
    <div id="fb-root"></div>

</head>
<body>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=196345770768046";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
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