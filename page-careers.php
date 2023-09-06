<?php
/*
Template Name: Careers
*/


// Opening Content
$top_content = get_field('top_content');
$top_left_content = get_field('top_left_content');
$top_right_content = get_field('top_right_content');

// Life at Trumark
$lat_headline = get_field('lat_headline');
$lat_content = get_field('lat_content');
$lat_pathways = get_field('lat_pathways');

// Carousel
$image_gallery = get_field('image_gallery');

// Community Involvement
$ci_headline = get_field('ci_headline');
$ci_content = get_field('ci_content');

// CTA
$careerscta = get_field('careers-cta');

// Testimonials
$tst_headline = get_field('tst_headline');
$tst_repeater = get_field('tst_repeater');

// TruMark Story
$trumarkstory = get_field('trumark-story');

?>
<?php get_header(); ?>

<div class="is-single-php">

    <?php if (have_posts()) : ?>

        <?php
        while (have_posts()) :
            the_post();
        ?>

            <?php get_template_part('template-parts/content', get_post_format()); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>

    <?php endif; ?>

    <div class="careers-opening-content entry-content">
        <div class="container-xl acf-wysiwyg">
            <?php echo $top_content  ? '<div class="careers-opening-content__top-content">' . $top_content . '</div>' : '';  ?>
            <?php echo $top_left_content  ? '<div class="careers-opening-content__top-left-content">' . $top_left_content . '</div>' : '';  ?>
            <?php echo $top_right_content  ? '<div class="careers-opening-content__top-right-content">' . $top_right_content . '</div>' : '';  ?>
        </div>
    </div>
    <div class="careers-lat">
        <div class="container-xl">
            <?php echo $lat_headline  ? '<h3 class="careers-lat__lat-headline">' . $lat_headline . '</h3>' : '';  ?>
            <?php echo $lat_content  ? '<div class="careers-lat__lat-content">' . $lat_content . '</div>' : '';  ?>
            <?php if (have_rows('lat_pathways')) : ?>
                <?php while (have_rows('lat_pathways')) : the_row(); ?>
                    <?php
                    $title = get_sub_field('headline');
                    $content = get_sub_field('content');
                    $image = wp_get_attachment_image(get_sub_field('image'), 'blog-sm', null, array('class' => 'careers-lat__item-image'));
                    echo $image ? $image : ''; ?>
                    <?php echo $title  ? '<div class="careers-lat__item-title">' . $title . '</div>' : '';  ?>
                    <?php echo $content  ? '<div class="careers-lat__item-content">' . $content . '</div>' : '';  ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="careers-carousel">
        <?php
        if ($image_gallery) : ?>
            <?php foreach ($image_gallery as $image_ID) : ?>
                <?php
                $image = wp_get_attachment_image($image_ID, 'large', null, array('class' => 'careers-carousel__image'));
                $image_url = wp_get_attachment_image_url($image_ID, 'full', null)
                ?>
                <div class="careers-carousel__item">
                    <a href="<?php echo $image_url; ?>" class="glightbox">
                        <?php echo $image; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="careers-ci">
        <div class="container-xl">
            <?php echo $ci_headline  ? '<h3 class="careers-ci__headline">' . $ci_headline . '</h3>' : '';  ?>
            <?php echo $ci_content  ? '<div class="careers-ci__content">' . $ci_content . '</div>' : '';  ?>
        </div>
    </div>
    <?php if ($careerscta) : ?>
        <div class="careers-cta entry-content">
            <?php get_template_part('resources/blocks/cta', null, array('prefix' => 'careers-cta_')); ?>
        </div>
    <?php endif; ?>
    <div class="careers-tst">
        <div class="container-xxl">
            <?php echo $tst_headline  ? '<h3 class="careers-tst-headline">' . $tst_headline . '</h3>' : '';  ?>
            <?php if (have_rows('tst_repeater')) : ?>
                <?php while (have_rows('tst_repeater')) : the_row(); ?>
                    <?php
                    $image_ID = get_sub_field('image');
                    $image = wp_get_attachment_image($image_ID, 'pathways', null, array('class' => 'careers-testimonials__image'));
                    $quote = get_sub_field('quote');
                    $title = get_sub_field('title');
                    $name = get_sub_field('name');
                    ?>
                    <div class="careers-tst__item">
                        <div class="careers-tst__item-top">
                            <?php echo $image; ?>
                            <?php echo $name  ? '<h4 class="careers-tst__name">' . $name . '</h4>' : '';  ?>
                            <?php echo $title  ? '<div class="careers-tst__title">' . $title . '</div>' : '';  ?>
                        </div>
                        <?php echo $quote  ? '<div class="careers-tst__quote">' . $quote . '</div>' : '';  ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if ($trumarkstory) : ?>
        <div class="careers-trumarkstory entry-content">
            <?php get_template_part('resources/blocks/cta', null, array('prefix' => 'trumark-story_')); ?>
        </div>
    <?php endif; ?>
</div>
<?php
get_footer();
