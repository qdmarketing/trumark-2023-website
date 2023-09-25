<?php

$thumb = 'blog-sm';
$ID = get_the_id();

$class = "";
if ($args && $args['large']) {
    $thumb = 'blog-lg';
    $class .= ' blog-item--large';
}


if ($args && isset($args['ID']) && $args['ID']) {
    $ID = $args['ID'];
}
if (has_post_thumbnail($ID)) {
    $thumb = wp_get_attachment_image(get_post_thumbnail_id($ID), $thumb, false);
} else {
    $thumb = '<img src="https://via.placeholder.com/560x380" class="blog-item__image">';
}

?>

<div class="blog-item<?php echo $class; ?>">
    <a class="blog-item__image" href="<?php echo get_permalink($ID); ?>">
        <?php echo $thumb; ?>
    </a>
    <div class="blog-item__bottom">
        <a class="blog-item__headline" href="<?php echo get_permalink($ID); ?>">
            <?php echo get_the_title($ID); ?>
        </a>
        <div class="blog-item__excerpt">
            <?php the_excerpt($ID); ?>
        </div>
        <a class="blog-item__readmore" href="<?php echo get_permalink($ID); ?>">Read Full Article</a>
    </div>

</div>