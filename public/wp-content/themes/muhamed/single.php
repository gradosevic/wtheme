<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php echo the_title();?></h1>
    <?php echo the_content();?>
    <span class="date"><?php echo get_the_date(); ?> > <?php echo get_the_author(); ?> > MOUNTAIN-MAP</span>
<?php endwhile; endif; ?>
<?php get_footer(); ?>