<?php get_template_part('header-author')?>
<section class="author">
    <figure>
        <img src="<?php print IMAGES . 'background-author.png'?>"alt="">
    </figure>
    <h1><?php echo the_author_meta('first_name')?> <?php echo the_author_meta('last_name')?></h1>

    <div>
        <p id="author-description"><?php echo the_author_meta('description')?></p>
        <a href="<?php echo the_author_meta('user_url')?>" target="_blank"><?php echo the_author_meta('user_url')?></a>
    </div>


    <?php $size =200; $email = get_the_author_meta('user_email')?>
    <?php $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;?>
    <img src="<?php echo $grav_url?>" alt="" id="gravatar">
</section>
<?php get_footer()?>
