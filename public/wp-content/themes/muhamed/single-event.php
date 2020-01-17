<?php require "models/Event.php"; ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php $event = Inpsyde\Events\Model\Event::fromPost(get_post()); ?>
    <h1><?php echo get_the_title();?></h1>
    <?php echo the_content();?>
    <div class="row event-details-content">
        <div class="event-details col-md-8">
            <div class="row">
                <p class="detail-name col-6">Date of Event:</p>
                <p class="detail-value col-6"><?php echo $event->startDate()->format('d. m. Y.'); ?></p>
            </div>
            <div class="row">
                <p class="detail-name col-6">Time:</p>
                <p class="detail-value col-6">
                    <?php echo $event->startDate()->format('d') . '. - ' . $event->endDate()->format('d. m. Y.'); ?>
                </p>
            </div>
            <div class="row">
                <p class="detail-name col-6">Location:</p>
                <p class="detail-value col-6">
                    <?php echo $event->startDate()->format('H:i') . ' - ' . $event->endDate()->format('H:i'); ?>
                </p>
            </div>
            <div class="row">
                <p class="detail-name col-6">Subscriber:</p>
                <p class="detail-value col-6">
                    <?php echo $event->subscribedMin() . ' - ' . $event->subscribedMax(); ?>
                </p>
            </div>
            <div class="row">
                <p class="detail-name col-6">Price:</p>
                <p class="detail-value col-6">100 EUR</p>
            </div>
            <div class="row">
                <p class="detail-name col-6">Included in price:</p>
                <p class="detail-value col-6">
                    <?php echo implode(', ', $event->includedInPrice()); ?>
                </p>
            </div>
            <div class="row">
                <p class="detail-name col-6">Registration end:</p>
                <p class="detail-value col-6">
                    <?php echo $event->registrationEnd()->format('d. m. Y.'); ?>
                </p>
            </div>
        </div>
        <div class="contact-person col-md-4">
            <p class="detail-name">Contact person:</p>
            <div class="detail-value">
                <p>
                    <?php echo $event->contactPerson()->firstName() . ' ' . $event->contactPerson()->lastName();  ?><br>
                    <?php echo $event->contactPerson()->position() ?><br>
                    <?php echo $event->contactPerson()->telephone(); ?><br>
                    <?php echo $event->contactPerson()->email(); ?>
                </p>
            </div>
        </div>
        <p><?php echo $event->additionalNotes(); ?></p>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>