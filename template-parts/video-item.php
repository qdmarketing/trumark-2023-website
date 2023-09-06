<?php
$thumbnail = get_sub_field('video_thumbnail');
$file_link = wp_get_attachment_url(get_sub_field('video_file')['ID']);

?>
<div class="videolib-item">
    <a class="videolib-item__link glightbox" href="<?php echo $file_link; ?>">
        <div class="videolib-item__image-wrap">

            <?php echo wp_get_attachment_image($thumbnail, 'blog-sm', null, array('class' => 'videolib-item__image')); ?>
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/videolib-play.svg" class="videolib-item__play">
        </div>
        <h3 class="videolib-item__title">
            <?php echo get_sub_field('video_title'); ?>
        </h3>
    </a>
</div>