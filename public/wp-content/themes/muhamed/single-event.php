<?php require "models/Event.php"; ?>
<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php $event = Inpsyde\Events\Model\Event::fromPost(get_post()); ?>
    <?php //Note: title, content and excerpt are not provided by Event class ?>
    <h1><?php echo get_the_title();?></h1>
    <?php echo the_content();?>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>