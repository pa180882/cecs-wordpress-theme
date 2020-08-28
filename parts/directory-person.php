<?php

$is_content_empty = ucfwp_is_content_empty( $post->post_content );

?>

<div class="row no-gutters">
    <div class="col">
        <?php if( !$is_content_empty ): ?>
            <a class="person-link" href="<?php echo get_permalink( $post->ID ); ?>">
        <?php endif; ?>
            <?php echo ucfwp_get_person_thumbnail( $item, 'rounded box-shadow-soft h-75' ); ?>
        <?php if( !$is_content_empty ): ?>
            </a>
        <?php endif; ?>
    </div>

    <div class="col p-2">
        <h3 class="mt-2 mb-1 person-name"></h3><?php echo ucfwp_get_person_name( $post ); ?>
        <?php if ( $job_title = get_field( 'person_jobtitle', $post->ID ) ): ?>
            <div class="font-italic person-job-title">
                <?php echo $job_title; ?>
            </div>
        <?php endif; ?>
        <?php if ( $email = get_field( 'person_email', $post->ID ) ): ?>
            <div class="person-email">
                <?php if ( $is_content_empty ) { ?>
                <a href="mailto:<?php echo $email; ?>">
                <?php } ?>
                <?php echo $email; ?>
                <?php if ( $is_content_empty ) { ?>
                </a>
                <?php } ?>
            </div>
        <?php endif; ?>
        <?php if ( $phone = get_field( 'person_phone', $post->ID ) ): ?>
            <div class="person-job-title">
                <?php echo $phone; ?>
            </div>
        <?php endif; ?>
    </div>
</div>