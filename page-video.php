<?php
/*
Template Name: Video Library
*/

$headline = get_field('page_headline');
$content = get_field('top_content');

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

    <div class="videolib">

        <div class="container-1240">
            <?php echo $headline ? '<h3 class="videolib__headline">' . $headline . '</h3>' : ''; ?>
            <?php echo $content ? '<div class="videolib__content">' . $content . '</div>' : ''; ?>
            <div class="videolib__grid">

                <?php echo do_shortcode('[ajax_load_more repeater="template_1" acf="true" acf_field_type="repeater" acf_field_name="video_library" posts_per_page="6"]'); ?>
            </div>
        </div>

    </div>
</div>

<?php
get_footer();
