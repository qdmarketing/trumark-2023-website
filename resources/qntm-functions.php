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
    acf_add_options_sub_page('404 Settings');
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
add_image_size('checkerboard', 580, 400, true);
add_image_size('blog-main', 1160, 640, true);
add_image_size('blog-lg', 560, 380, true);
add_image_size('blog-sm', 360, 245, true);

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
    $screenreader = '<span class="screen-reader-text">' . $link['title'] . '</span>';

    $elem = $elem ? $elem : 'a';
    $link_target = $link['target'] ? $link['target'] : '_self';
    $html = '<' . $elem . ' class="' . $class . '" href="' . $link['url'] . '" target="' . esc_attr($link_target) . '">' . $content . $screenreader . '</' . $elem . '>';

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


function custom_breadcrumbs()
{
    // Get the ID of the current post
    $post_id = get_the_ID();

    // Get the current post object
    $post = get_post($post_id);

    // Initialize an empty array to store breadcrumb items
    $breadcrumbs = array();

    // Add the "Posts page" breadcrumb
    $posts_page_id = get_option('page_for_posts');
    if ($posts_page_id) {
        $posts_page_title = get_the_title($posts_page_id);
        $breadcrumbs[] = "<a href='" . get_permalink($posts_page_id) . "'>$posts_page_title</a>";
    }

    // Add the category breadcrumb if the post is in a category
    $category = get_primary_taxonomy_term($post_id);
    if (!empty($category)) {
        $breadcrumbs[] = "<a href='" . $category['url'] .   "'>" . $category['title'] . "</a>";
    }

    // Add the current post breadcrumb
    $breadcrumbs[] = $post->post_title;

    // Output the breadcrumbs
    echo implode(' > ', $breadcrumbs);
}


function qntm_social_social_share_buttons()
{
    $siteurlfromsettingsgeneral =  get_bloginfo('url');
    // $domainparts = parse_url($siteurlfromsettingsgeneral); // Whats this one for
    // $domain = isset($domainparts['host']) ? $domainparts['host'] : '';
    // Get singular which will allow to add the shortcode on WordPress Widget OR you could just use is_single
    $s151_social_url = urlencode(get_permalink());
    // get_the_title but add space %20
    $s151_social_title = str_replace(' ', '%20', get_the_title());
    // Core Web Vitals are important for shares
    $twitterURL = 'https://twitter.com/intent/tweet?text=' . $s151_social_title . '&url=' . $s151_social_url . '&via=' . $siteurlfromsettingsgeneral . '';
    $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $s151_social_url;
    $linkedInURL = 'https://www.linkedin.com/sharing/share-offsite/?url=' . $s151_social_url;
    $emailUrl = 'mailto:?subject=' . $s151_social_title . '&amp;body=' . $s151_social_url;

    $content = '<a href="' . $facebookURL . '" target="_blank" rel="nofollow noopener"><i class="fa-brands fa-facebook"></i></a>';
    $content .= '<a href="' . $twitterURL . '" target="_blank" rel="nofollow noopener"><i class="fa-brands fa-x-twitter"></i></a>';
    $content .= '<a href="' . $linkedInURL . '" target="_blank" rel="nofollow noopener"><i class="fa-brands fa-linkedin"></i></a>';
    $content .= '<a href="' . $emailUrl . '"   target="_blank" rel="nofollow noopener"><i class="fa-solid fa-envelope"></i></a>';
    return $content;
};

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


// function enqueue_google_maps_api()
// {
//     $api_key = get_field('google_maps_api_key', 'option'); // Replace with your actual API key
//     var_dump($api_key);
//     wp_enqueue_script('google-maps', "https://maps.googleapis.com/maps/api/js?key=$api_key", array(), null, true);
// }
// add_action('wp_enqueue_scripts', 'enqueue_google_maps_api');



add_filter('acf/fields/wysiwyg/toolbars', 'qntm_acf_toolbars');
function qntm_acf_toolbars($toolbars)
{

    // Add a new toolbar called "Very Simple"
    // - this toolbar has only 1 row of buttons
    $toolbars['Just List'] = array();
    $toolbars['Just List'][1] = array('bullist');

    return $toolbars;
}



/****************************
Add Formats Dropdown Menu To MCE
 ****************************/
if (!function_exists('wpex_style_select')) {
    function wpex_style_select($buttons)
    {
        array_push($buttons, 'styleselect');
        return $buttons;
    }
}
add_filter('mce_buttons', 'wpex_style_select');

/*****************************************************
Add new styles to the TinyMCE "formats" menu dropdown
 ******************************************************/
//
if (!function_exists('wpex_styles_dropdown')) {
    function wpex_styles_dropdown($settings)
    {

        // Create array of new styles
        $new_styles = array(
            array(
                'title'        => __('Blue Text', 'wpex'),
                'selector'    => 'p',
                'classes'    => 'has-blue-text'
            ),
            array(
                'title'        => __('Red Text', 'wpex'),
                'selector'    => 'h3, p, strong',
                'classes'    => 'has-red-text'
            ),
            //   array(
            // 	'title'		=> __('No Bullets','wpex'),
            // 	'selector'	=> 'ul',
            // 	'classes'	=> 'no-bullets'
            // 	),
            // array(
            // 	'title'		=> __('Styled Link', 'wpex'),
            // 	'selector'	=> 'a',
            // 	'classes'	=> 'styledLink'
            // ),

            // array(
            // 	'title'		=> __('Button Primary', 'wpex'),
            // 	'selector'	=> 'a',
            // 	'classes'	=> 'a-button-primary linkbtn'
            // ),
            // array(
            // 	'title'		=> __('Button Secondary', 'wpex'),
            // 	'selector'	=> 'a',
            // 	'classes'	=> 'a-button-secondary linkbtn'
            // ),
        );
        // Merge old & new styles
        $settings['style_formats_merge'] = false;
        // Add new styles
        $settings['style_formats'] = json_encode($new_styles);
        // Return New Settings
        return $settings;
    }
}
add_filter('tiny_mce_before_init', 'wpex_styles_dropdown');


// function register_custom_block_styles()
// {
//     wp_register_style('primary-text-style', false);
//     register_block_style(
//         'core/paragraph',
//         array(
//             'name'         => 'primary-text',
//             'label'        => __('Red Text', 'your-text-domain'),
//             'style_handle' => 'primary-text-style',
//         )
//     );
// }
// add_action('init', 'register_custom_block_styles');




// Add a custom metabox to display shortcode
function interest_rate_shortcode_metabox()
{
    add_meta_box(
        'interest_rate_shortcode',
        'Shortcode',
        'interest_rate_shortcode_callback',
        'qd_interest_rate', // Replace with your custom post type slug
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'interest_rate_shortcode_metabox');

// Metabox callback function
function interest_rate_shortcode_callback($post)
{
    echo '<p>Copy and paste this shortcode where you want to display this interest rate table:<br>';
    echo '[interest_rate id="' . $post->ID . '"]</p>';
}

function interest_rate_shortcode($atts)
{
    $atts = shortcode_atts(array(
        'id' => 0,
    ), $atts, 'qd_interest_rate');
    $post_id = intval($atts['id']);
    if ($post_id > 0) {
        $post = get_post($post_id);
        if ($post) {
            ob_start();
            get_template_part('single-qd_interest_rate', null, array('post_id' => $post_id));
            return ob_get_clean();
        }
    }
    return '';
}
add_shortcode('interest_rate', 'interest_rate_shortcode');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
function custom_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');



function renderTable($tableArray, $class)
{
    // Check if the array is empty
    if (empty($tableArray)) {
        return '';
    }

    $output = '<table class="' . $class . '">';

    // Render the caption if provided
    if (isset($tableArray['caption'])) {
        $output .= '<caption>' . $tableArray['caption'] . '</caption>';
    }

    // Render the table header
    $header = $tableArray['header'];
    $output .= '<thead><tr>';
    if ($header) {

        foreach ($header as $cell) {
            $output .= '<th>' . $cell['c'] . '</th>';
        }
    }
    $output .= '</tr></thead>';

    // Render the table body
    $body = $tableArray['body'];
    $output .= '<tbody>';
    foreach ($body as $row) {
        $output .= '<tr>';
        foreach ($row as $cell) {
            $output .= '<td>' . $cell['c'] . '</td>';
        }
        $output .= '</tr>';
    }
    $output .= '</tbody>';

    $output .= '</table>';

    return $output;
}



/**
 * Trims the content to the first 100 words and outputs it.
 *
 * @return void
 */
function custom_trimmed_content($content, $length = 50, $truncateSymbol = '...')
{
    $stripped_content = trim(strip_tags($content)); // Remove HTML tags
    $words = explode(' ', $stripped_content); // Split content into words
    $words = array_filter($words); //Removes Empty Elements
    $trimmed_content = implode(' ', array_slice($words, 0, $length)); // Take the number of words specified

    echo $trimmed_content . (count($words) > $length ? $truncateSymbol : ''); // Output the trimmed content with ellipsis if needed
}


function custom_set_big_image_size()
{
    $threshold = 2560; // You can change this value to your preferred threshold
    update_option('large_size_w', $threshold);
    update_option('large_size_h', $threshold);
}
add_action('after_setup_theme', 'custom_set_big_image_size');
