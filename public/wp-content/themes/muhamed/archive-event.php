<?php require "models/Event.php"; ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php $event = Inpsyde\Events\Model\Event::fromPost(get_post()); ?>
    <div class="post-intro event-intro">
        <span class="date"><?php echo $event->startDate()->format('d').'. - '.$event->endDate()->format('d.m.Y.'); ?> > Germany</span>
        <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <img class="circle md-hide" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" />
        <?php endif; ?>
        <p>
            <?php echo the_excerpt(); ?>[<a href="<?php the_permalink(); ?>" class="readmore">read more</a>]
        </p>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>