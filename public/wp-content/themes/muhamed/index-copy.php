<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
    <p><?php echo the_excerpt(); ?></p>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>