<?php

// ADD INTEREST RATES POST TYPE
function cpt_interest_rate()
{
    $postNameSingular = 'Interest Rate';
    $postNamePlural = 'Interest Rates';
    $postCodeName = 'qd_interest_rate';
    $parentLink = '/' . get_page_uri(get_option('qd_rates_page')) . '/rate';

    // creating (registering) the custom type
    register_post_type(
        $postCodeName,
        // let's now add all the options for this post type
        array(
            'labels' => array(
                'name' => __('Interest Rates', 'qntm'),
                'singular_name' => __($postNameSingular, 'qntm'),
                'all_items' => __('All ' . $postNamePlural, 'qntm'),
                'add_new' => __('Add New ' . $postNameSingular, 'qntm'),
                'add_new_item' => __('Add New ' . $postNameSingular, 'qntm'),
                'edit' => __('Edit', 'qntm'),
                'edit_item' => __('Edit ' . $postNamePlural, 'qntm'), // Edit Display Title
                'new_item' => __('New ' . $postNameSingular, 'qntm'), // New Display Title
                'view_item' => __('View ' . $postNameSingular, 'qntm'), // View Display Title
                'search_items' => __('Search ' . $postNameSingular, 'qntm'), // Search Custom Type Title
                'not_found' =>  __('Nothing found in the Database.', 'qntm'), // This displays if there are no entries yet
                'not_found_in_trash' => __('Nothing found in Trash', 'qntm'), // This displays if there is nothing in the trash
                'parent_item_colon' => ''
            ), // end of arrays
            'description' => __('This is the ' . $postNameSingular . ' post type', 'qntm'), // Custom Type Description
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 50, // this is what order you want it to appear in on the left hand side menu
            //'rewrite'	=> false, // you can specify its url slug
            // 'rewrite'    => array('slug' => $parentLink, 'with_front' => false), // you can specify its url slug
            'has_archive' => false, // you can rename the slug here
            'capability_type' => 'post',
            'hierarchical' => false,
            // the next one is important, it tells what's enabled in the post editor
            'supports' => array('title', 'revisions', 'acf'),
            'menu_icon' => 'dashicons-chart-line',
        ) // end of options
    ); // end of register post type
}
// adding the function to the Wordpress init
add_action('init', 'cpt_interest_rate');
