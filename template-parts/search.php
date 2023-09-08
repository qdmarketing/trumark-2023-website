<?php
$blog_id  = get_option('page_for_posts');

$blog_strapline = 'Search';
$blog_headline = 'Search Results For: ' . get_search_query();
// $blog_email_form = get_field('email_form', $blog_id);
// $blog_email_headline  = get_field('email_headline', $blog_id);
// $blog_email_content  = get_field('email_content', $blog_id);

?>


<div class="blog__top ">
    <div class="container-xl search-results-top">
        <?php echo $blog_strapline ? '<h1 class="blog__top__strapline">' . $blog_strapline . '</h1>' : ''; ?>
        <?php echo $blog_headline ? '<h2 class="blog__top__headline">' . $blog_headline . '</h2>' : ''; ?>
        <!-- <div class="blog__top__email">
            <?php //echo $blog_email_headline ? '<h3 class="blog__top__email__headline">' . $blog_email_headline . '</h3>' : ''; 
            ?>
            <div class="blog__top__email__form">
                <?php //echo $blog_email_form ?   do_shortcode('[gravityform id="' . $blog_email_form . '" title="false" description="false" ajax="false" tabindex="1000"]') : '';  
                ?>
            </div>
            <?php // echo $blog_email_content ? '<div class="blog__top__email__content">' . $blog_email_content . '</div>' : ''; 
            ?>
        </div> -->
    </div>
</div>



<div class="container-xl search-results">
    <?php if (have_posts()) : ?>
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <div class="search-results-item">
                <h4><?php echo get_the_title(); ?></h4>
                <div><?php
                        if (has_excerpt()) {
                            the_excerpt();
                        } else {
                            $content = apply_filters('the_content', get_the_content());
                            echo '<p>' . custom_trimmed_content($content) . '</p>';
                        }
                        ?>

                </div>
                <div>
                    <a class="readMoreButton search-results-item-viewall" href="<?php echo get_permalink(); ?>">Read More</a>
                </div>
                <div class="search-results-item__divider"></div>
            </div>

        <?php endwhile; ?>

    <?php else : ?>
        <div class="search-results-item">
            <h4>No results.</h4>
            <div>
                <a class="search-results-item__viewAll openSearch" href="/">Click To Try Another Search</a></a>
            </div>
        </div>
    <?php endif; ?>
</div>