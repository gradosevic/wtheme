<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php echo the_title();?></h1>
    <?php echo the_content();?>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>