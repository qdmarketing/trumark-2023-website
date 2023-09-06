<?php

// $default_posts_per_page = get_option('posts_per_page');
$default_posts_per_page = 9; // 9 works better for this layout
$custom_posts_per_page = $default_posts_per_page + 2;

?>

<div class="blog">

    <div class="blog__waves">
    </div>
    <div class="blog-index-top">
        <div class="blog-index-top__container container-1240">
            <?php get_template_part('template-parts/blog-topline'); ?>
        </div>
    </div>
    <?php $counter = 0;

    // Define a custom query with a different number of posts
    $custom_query_args = array(
        'post_type' => 'post',      // Change to your custom post type if needed
        'posts_per_page' => $custom_posts_per_page,      // Set the number of posts you want to display
        // Add other query parameters as needed
    );
    $custom_query = new WP_Query($custom_query_args);

    ?>
    <?php if (have_posts()) : ?>
        <div class="blog__posts">
            <div class="container-1240" id="blog-container">

                <?php while (have_posts()) : the_post() ?>
                    <?php
                    $counter++;
                    if ($counter < 3) {
                        $args = array(
                            'large' => true
                        );
                    } else {
                        $args = array(
                            'large' => false
                        );
                    }
                    ?>
                    <?php get_template_part('template-parts/blog-item', null, $args); ?>

                <?php endwhile; ?>




                <?php

                $filter = get_queried_object();
                if (is_tag()) {
                    $archiveFilter = 'tag="' . $filter->slug . '"';
                } elseif (is_category()) {
                    $archiveFilter = 'category="' . $filter->slug . '"';
                } elseif (is_author()) {
                    $archiveFilter = 'author="' . $filter->id . '"';
                } else {
                    $archiveFilter = '';
                }
                echo do_shortcode('[ajax_load_more container_type="div" repeater="template_1" post_type="post" ' . $archiveFilter . ' preloaded="true" offset="' . $custom_posts_per_page  . '" preloaded_amount="' . $default_posts_per_page . '" posts_per_page="' . $default_posts_per_page . '"]'); ?>

            </div>
            <div class="container-xl" id="load-more-container"></div>
        </div>
    <?php endif; ?>
</div>