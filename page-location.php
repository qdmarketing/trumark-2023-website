<?php
/*
Template Name: Location Overview
*/

$custom_html = get_field('custom_html');
$disclaimer_prefix = get_field('disclaimer_prefix');
$disclaimer_text = get_field('disclaimer_text');

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
    <div class="location-overview__map">
        <?php echo $custom_html; ?>
    </div>
    <div class="entry-content">
        <?php get_template_part('resources/blocks/fifty'); ?>
        <div class="location-overview__disclaimer">
            <div class="container-xxl">
                <div class="location-overview__disclaimer-line"></div>

                <?php echo $disclaimer_prefix  ? '<span class="location-overview__disclaimer-prefix">' . $disclaimer_prefix . '</span>' : '';  ?>
                <?php echo $disclaimer_text  ? '<span class="location-overview__disclaimer-text">' . $disclaimer_text . '</span>' : '';  ?>
            </div>


        </div>
    </div>
</div>

<?php
get_footer();
