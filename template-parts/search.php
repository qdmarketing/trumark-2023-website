<?php
$blog_id  = get_option('page_for_posts');

$blog_strapline = 'Search';
$blog_headline = 'Search Results For &quot;' . get_search_query() . '&quot;';
$ms_content = get_field('search_results_mainstage_content', 'option');
$image = get_field('search_results_mainstage_image', 'option');
// $blog_email_form = get_field('email_form', $blog_id);
// $blog_email_headline  = get_field('email_headline', $blog_id);
// $blog_email_content  = get_field('email_content', $blog_id);

?>


<div class="mainstage mainstage--no-dots" data-count="1">


    <div class="mainstage-slide">
        <div class="mainstage-slide__wrapper">

            <div class="mainstage-slide__left">
                <div class="mainstage-slide__left-inner">
                    <div class="mainstage-slide__headline">
                        <?php echo $blog_headline; ?>
                    </div>
                    <div class="mainstage-slide__content"><?php echo $ms_content; ?></div>
                </div>
            </div>
            <div class="mainstage-slide__right">
                <?php echo wp_get_attachment_image($image, 'mainstage', null, array('class' => 'mainstage-slide__image')); ?>
            </div>
        </div>
    </div>
</div>



<div class="container-xxl searchresults">
    <?php if (have_posts()) : ?>
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <div class="searchresults-item">
                <h4><?php echo get_the_title(); ?></h4>
                <div class="searchresults-item__content">
                    <?php
                    if (has_excerpt()) {
                        the_excerpt();
                    } else {
                        $content = apply_filters('the_content', get_the_content());
                        echo '<p>' . custom_trimmed_content($content) . '</p>';
                    }
                    ?>

                </div>
                <div>
                    <a class="searchresults-item__button" href="<?php echo get_permalink(); ?>">Read More</a>
                </div>
                <div class="searchresults-item__divider"></div>
            </div>

        <?php endwhile; ?>

    <?php else : ?>
        <div class="searchresults-item">
            <h4>No results.</h4>
            <div>
                <a class="searchresults-item__viewAll openSearch" href="/">Click To Try Another Search</a></a>
            </div>
        </div>
    <?php endif; ?>
</div>