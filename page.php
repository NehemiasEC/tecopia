<?php get_header()?>
    yo soy el page
    <section id="main">
        <?php if(have_posts()):while(have_posts()):the_post();?>
            <article>
                <p><?php the_content()?></p>
            </article>
        <?php endwhile;else:?>
            <?php _e("no se encontro lo que buscaba");?>
        <?php endif?>
    </section>
<?php get_footer()?>