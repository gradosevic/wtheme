<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post-intro">
        <h2>
            <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
        </h2>
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <img class="circle md-hide" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" />
        <?php endif; ?>
        <p>
            <?php echo the_excerpt(); ?>[<a href="<?php the_permalink(); ?>" class="readmore">read more</a>]
            <span class="date"><?php echo get_the_date(); ?> > <?php echo get_the_author(); ?> > MOUNTAIN-MAP</span>
        </p>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>