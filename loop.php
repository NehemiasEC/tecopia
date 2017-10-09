<section id="main">
    <?php if(have_posts()):while(have_posts()):the_post();?>
        <article>
            <?php the_post_thumbnail('medium')?>
            <h2><a href="<?php the_permalink()?>" title="<?php the_title_attribute()?>"><?php the_title()?></a></h2>
            <p><?php the_excerpt()?></p>
            <time><?php the_time("l j F Y")?></time>
            <span>Autor: <?php $email=get_the_author_meta("email");?>
                <img src="<?php print get_gravatar($email,40,"mm","g")?>" alt="">
                <?php the_author_posts_link()?>
            </span>
            <span class="category"><?php the_category()?></span>
        </article>
    <?php endwhile;else:?>
        <?php _e("no se encontro lo que buscaba");?>
    <?php endif?>
    <?php
    (wp_nav_menu(array("menu"=>"Main","container"=>"nav", "menu-class"=>"motherfucker","container-class"=>"clase_contenedor")));
    post_class();
    ?>
    <h1>current user</h1>
    <?php get_user_info('display_name')?>
    <?php get_user_info('user_email')?>
    <?php get_the_author_meta('description')?>
    <?php $user= wp_get_current_user();
            echo $user->description;
    ?>
    <h1>end current user</h1>
</section>
<aside>

</aside>
<div class="navi">
    <?php previous_posts_link("Anteriores")?>
    <?php next_posts_link("siguientes")?>
</div>

<div>
    <h1>post top</h1>
</div>
<?php echo get_stylesheet_directory_uri().CSS.'main.css'?>
<!-- facebok script -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=196345770768046";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script>
    document.cookie="altura="+screen.height;
    document.cookie="anchura="+screen.width;
</script>
<!-- finaliza el facebook script-->