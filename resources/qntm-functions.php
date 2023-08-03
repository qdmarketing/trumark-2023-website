<?php

/********************************
ENABLE FONT AWESOME
 ********************************/


add_action('wp_head', function () {
    echo '<script src="https://kit.fontawesome.com/5318d5e5fe.js" crossorigin="anonymous"></script>';
});


/********************************
ENABLE ADVANCED CUSTOM FIELDS OPTION PAGES
 ********************************/

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

if (function_exists('acf_add_options_sub_page')) {
    acf_add_options_sub_page('Sitewide Options');
    acf_add_options_sub_page('Alerts');
    acf_add_options_sub_page('Blog Settings');
}

/********************************
display the menu item descriptions 
 ********************************/


function wpse_375968_add_menu_description_support()
{
    add_filter('walker_nav_menu_start_el', 'wpse_375968_menu_description', 10, 4);
}

function wpse_375968_menu_description($item_output, $item, $depth, $args)
{
    if (!empty($item->description)) {
        $item_output .= sprintf('<span class="menu-item-description">%s</span>', esc_html($item->description));
    }

    return $item_output;
}

add_action('after_setup_theme', 'wpse_375968_add_menu_description_support');





/************* THUMBNAIL SIZE OPTIONS *************/

//  Image Sizes

// add_image_size('product-features', 1200, 480, true);

add_image_size('mainstage', 1920, 1080, true);
add_image_size('pathways', 225, 225, true);

/********************************
        USEFUL UTILITIES
 ********************************/


/************* SIMPLE RENDER ACF LINKS *************/

function qntm_acf_link($elem, $class, $link, $icon, $content)
{
    if (!$link) {
        return;
    }

    if (!$content) {

        if ($icon) {
            $iconHtml = '<i class="' . $icon . '"></i> ';
        } else {
            $iconHtml = '';
        }

        $content = $iconHtml . $link['title'];
    }

    $elem = $elem ? $elem : 'a';
    $link_target = $link['target'] ? $link['target'] : '_self';
    $html = '<' . $elem . ' class="' . $class . '" href="' . $link['url'] . '" target="' . esc_attr($link_target) . '">' . $content . '</' . $elem . '>';

    return $html;
}

/********************************
SHORTCODE FOR CURRENT YEAR (PRIMARILY USED IN THE FOOTER)
 ********************************/

function s151_current_year()
{
    return date_i18n('Y');
}
add_shortcode('current_year', 's151_current_year');





/**
 * Returns the primary term for the chosen taxonomy set by Yoast SEO
 * or the first term selected.
 *
 * @link https://www.tannerrecord.com/how-to-get-yoasts-primary-category/
 * @param integer $post The post id.
 * @param string  $taxonomy The taxonomy to query. Defaults to category.
 * @return array The term with keys of 'title', 'slug', and 'url'.
 */
function get_primary_taxonomy_term($post = 0, $taxonomy = 'category')
{
    if (!$post) {
        $post = get_the_ID();
    }

    $terms        = get_the_terms($post, $taxonomy);
    $primary_term = array();

    if ($terms) {
        $term_display = '';
        $term_slug    = '';
        $term_link    = '';
        if (class_exists('WPSEO_Primary_Term')) {
            $wpseo_primary_term = new WPSEO_Primary_Term($taxonomy, $post);
            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
            $term               = get_term($wpseo_primary_term);
            if (is_wp_error($term)) {
                $term_display = $terms[0]->name;
                $term_slug    = $terms[0]->slug;
                $term_link    = get_term_link($terms[0]->term_id);
            } else {
                $term_display = $term->name;
                $term_slug    = $term->slug;
                $term_link    = get_term_link($term->term_id);
            }
        } else {
            $term_display = $terms[0]->name;
            $term_slug    = $terms[0]->slug;
            $term_link    = get_term_link($terms[0]->term_id);
        }
        $primary_term['url']   = $term_link;
        $primary_term['slug']  = $term_slug;
        $primary_term['title'] = $term_display;
        $primary_term['name'] = $term_display; // alias
    }
    if (count($primary_term) > 0) {

        return $primary_term;
    } else {
        return NULL;
    }
}


/*********************
	PAGE NAVI
 *********************/
/**
 * Summary of qntm_page_navi
 * @param $custom_query : Optional custom query may be passed into pagination. If no query is passed, the default global wp_query will be used
 * @param $prev : Text to be used for the 'Previous' button
 * @param $next : Text to be used for the 'Next' button
 * @param $pages_to_show : The number of pages to be shown within the pagination
 * @param $before : Any HTML/Text that should display prior to the pagination
 * @param $after : Any HTML/Text that should display prior to the pagination
 * @return
 */
function qntm_page_navi($custom_query = '', $prev = '', $next = '', $pages_to_show = 7, $before = '', $after = '')
{
    global $wpdb, $wp_query;

    //Check for custom query variable, if set, assign to navi_query, if not, assign main wp_query to navi_query
    if (isset($custom_query) && $custom_query != '') {
        $navi_query = $custom_query;
    } else {
        $navi_query = $wp_query;
    }

    //change $posts_per_page variable to be set with the new navi_query
    $posts_per_page = intval($navi_query->query_vars['posts_per_page']);
    $paged = intval(get_query_var('paged'));
    $numposts = $navi_query->found_posts; //update with navi_query
    $max_page = $navi_query->max_num_pages; //update with navi_query
    if ($numposts <= $posts_per_page) {
        echo $before . $after;
        return;
    }
    if (empty($paged) || $paged == 0) {
        $paged = 1;
    }
    $pages_to_show_minus_1 = $pages_to_show - 1;
    $half_page_start = floor($pages_to_show_minus_1 / 2);
    $half_page_end = ceil($pages_to_show_minus_1 / 2);
    $start_page = $paged - $half_page_start;
    if ($start_page <= 0) {
        $start_page = 1;
    }
    $end_page = $paged + $half_page_end;
    if (($end_page - $start_page) != $pages_to_show_minus_1) {
        $end_page = $start_page + $pages_to_show_minus_1;
    }
    if ($end_page > $max_page) {
        $start_page = $max_page - $pages_to_show_minus_1;
        $end_page = $max_page;
    }
    if ($start_page <= 0) {
        $start_page = 1;
    }

    echo $before . '<nav class="page-navigation"><ol class="qntm_page_navi">' . "";
    //if ($start_page >= 2 && $pages_to_show < $max_page) {

    if ($paged != 1) {
        $first_page_text = '';
        echo '<li class="bpn-first-page-link"><a href="' . get_pagenum_link() . '" title="First Page"><i class="fa-solid fa-chevrons-left"></i></a></li>';
    } else {
        echo '<li class="hidden bpn-first-page-link"><div class="inactivePreviousArrow"><i class="fa-solid fa-chevrons-left"></i></div></li>';
    }

    if ($prev !== false) {

        if ($paged != 1) {
            echo '<li class="bpn-prev-link">';
            previous_posts_link($prev);
        } else {
            echo '<li class="hidden bpn-prev-link">';
            echo '<div class="inactivePreviousArrow">' . $prev . '</div>';
        }
        echo '</li>';
    }
    for ($i = $start_page; $i  <= $end_page; $i++) {
        $additionalClass = "";
        if ($i == $start_page) {
            $additionalClass = "first";
        } else if ($i == $end_page) {
            $additionalClass = "last";
        }
        if ($i == $paged) {
            echo '<li class="bpn-current"><div class="currentPage ' . $additionalClass . '">' . $i . '</div></li>';
        } else {
            echo '<li class="bpn-num-link"><a href="' . get_pagenum_link($i) . '" class="' . $additionalClass . '">' . $i . '</a></li>';
        }
    }
    if ($next !== false) {
        echo '<li class="bpn-next-link">';
        if ($paged != $max_page) {
            next_posts_link($next, $max_page);
        } else {
            echo '<div class="inactiveNextArrow">' . $next . '</div>';
        }
        echo '</li>';
    }
    // if ($paged != $max_page) {
    //     echo '<li class="bpn-first-page-link"><a href="' . get_pagenum_link($max_page) . '" title="Last Page"><i class="fa-solid fa-chevrons-right"></i></a></li>';
    // } else {
    //     echo '<li class="bpn-first-page-link"><div class="inactiveNextArrow"><i class="fa-solid fa-chevrons-right"></i></div></li>';
    // }
    /*if ($end_page < $max_page) {
	$last_page_text = __( "Last", 'bonestheme' );
	echo '<li class="bpn-last-page-link"><a href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'">'.$last_page_text.'</a></li>';
}*/
    echo '</ol></nav>' . $after . "";
} /* end page navi */


function calculate_read_length($content)
{
    // Get the content of the blog post
    $content = strip_tags($content);

    // Estimate the reading time
    $words_per_minute = 200; // Adjust this value based on your preference
    $word_count = str_word_count($content);
    $read_length = ceil($word_count / $words_per_minute);

    return $read_length;
}


function exclude_featured_post_home($query)
{
    if ($query->is_home() && $query->is_main_query() && !is_admin()) {
        // Check if there are any sticky posts
        $sticky_posts = get_option('sticky_posts');

        if (!empty($sticky_posts)) {
            // Exclude the first sticky postd
            $exclude = array_shift($sticky_posts);
        } else {
            // No sticky posts, exclude the first post
            $exclude = get_option('page_on_front');
        }

        $query->set('post__not_in', array($exclude));
    }
}
add_action('pre_get_posts', 'exclude_featured_post_home');

function enable_classic_editor_for_posts($use_block_editor, $post_type)
{
    if ($post_type === 'post' || $post_type === 'location') {
        return false; // Disable block editor for posts
    }
    return $use_block_editor; // Return the original value for other post types
}
add_filter('use_block_editor_for_post_type', 'enable_classic_editor_for_posts', 10, 2);



/****************************
ENABLE ACF GOOGLE MAPS
 ***************************/
function my_acf_init()


{

    acf_update_setting('google_api_key', get_field('google_maps_api_key', 'option'));
}
add_action('acf/init', 'my_acf_init');
