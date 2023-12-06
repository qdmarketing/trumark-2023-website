<?php if ($args && $args['post_id']) {
    $post_id = $args['post_id'];
}

/**
 * Block Name: Interest Rate Table
 *
 *
 */








$rateid = $post_id;
$title = get_the_title($rateid);

$calculator_column_title = get_field('calculator_column_title', $rateid);




if (get_field('qd_rate_content', $rateid)) {
    echo '<div class="rate-post-content">';
    echo get_field('qd_rate_content', $rateid);
    echo '</div>';
}


if ($rateid) {
    echo '<div class="interest-rate-table">';
    $rateType = get_field('qd_table_matrix', $rateid);
    if (1 < 2) {  // Code copied from elsewhere.. quick fix

        $tableTitle = get_field('qd_matrix_table_title', $rateid);
        $columnCount = get_field('qd_number_of_columns', $rateid);

        $tableFootnotes = get_field('qd_table_matrix_footnotes', $rateid);

        // repeater field: note that the_sub_field and get_sub_field don't need a post id parameter
        if (have_rows('qd_table_matrix_column_header', $rateid)) {

            $thead = '<div class="thead ">';
            while (have_rows('qd_table_matrix_column_header', $rateid)) {
                the_row();
                $th1 =    esc_html(get_sub_field('th_1_column'));
                $th2 =    get_sub_field('th_2_column');
                $th3 =    get_sub_field('th_3_column');
                $th4 =    get_sub_field('th_4_column');
                $th5 =    get_sub_field('th_5_column');
                $th6 =    get_sub_field('th_6_column');

                $thead .= '<div class="interest-rate-table__tr ">';
                $thead .= '<div class="th">' . $th1 . '&nbsp;</div>';
                $thead .= '<div class="th">'  . $th2 .  '&nbsp;</div>';
                if ($columnCount >= 3) {
                    $thead .= '<div class="th">'  . $th3 .  '&nbsp;</div>';
                }
                if ($columnCount >= 4) {
                    $thead .= '<div class="th">'  . $th4 .  '&nbsp;</div>';
                }
                if ($columnCount >= 5) {
                    $thead .= '<div class="th">'  . $th5 .  '&nbsp;</div>';
                }
                if ($columnCount >= 6) {
                    $thead .= '<div class="th">'  . $th6 .  '&nbsp;</div>';
                }
                if ($calculator_column_title) {
                    $thead .= '<div class="th">'  . $calculator_column_title .  '&nbsp;</div>';
                }
                $thead .= '</div>';
            }
            $thead .= '</div>';
        }
        $rateCode = '<div class="interest-rate-table__table">';
        // $rateCode .= '<div class="rt active ">' . $tableTitle . '</div>';

        // echo '<div class="table">' . $thead . '</div>';
        // echo  '<div><h5 class="interest-rate__title">' . $title . '</h5></div>';
        $rateCode .= $thead;
        // repeater field: note that the_sub_field and get_sub_field don't need a post id parameter
        if (have_rows('qd_table_matrix_rows', $rateid)) {
            $rateCode .= '<div class="tbody">';
            while (have_rows('qd_table_matrix_rows', $rateid)) {
                the_row();
                $td1 =    get_sub_field('td_1_cell');
                $td2 =    get_sub_field('td_2_cell');
                $td3 =    get_sub_field('td_3_cell');
                $td4 =    get_sub_field('td_4_cell');
                $td5 =    get_sub_field('td_5_cell');
                $td6 =    get_sub_field('td_6_cell');
                $link = get_sub_field('link');

                //  $rateCode .= '<div class="rh"><span><div class="rhd" data-header="' . $th1 . '">' . $td1 . '</div></span></div>';
                $rateCode .= '<div class="interest-rate-table__tr">';
                $rateCode .= '<div class="td" data-header="' . $th1 . '">' . $td1 . '&nbsp;</div>';
                $rateCode .= '<div class="td" data-header="' . $th2 . '">'  . $td2 .  '&nbsp;</div>';
                if ($columnCount >= 3) {
                    $rateCode .= '<div class="td" data-header="' . $th3 . '">'  . $td3 .  '&nbsp;</div>';
                }
                if ($columnCount >= 4) {
                    $rateCode .= '<div class="td" data-header="' . $th4 . '">'  . $td4 .  '&nbsp;</div>';
                }
                if ($columnCount >= 5) {
                    $rateCode .= '<div class="td" data-header="' . $th5 . '">'  . $td5 .  '&nbsp;</div>';
                }
                if ($columnCount >= 6) {
                    $rateCode .= '<div class="td" data-header="' . $th6 . '">'  . $td6 .  '&nbsp;</div>';
                }
                if ($link) {
                    $rateCode .= '<div class="td interest-rate-table__link" data-header="Calculate Savings">'  . qntm_acf_link('a', 'simple-table__link', $link, 'fa-solid fa-calculator', false) .  '&nbsp;</div>';
                }
                $rateCode .= '</div>';
            }
            $rateCode .= '</div>';
        }

        $rateCode .= '</div>';
        // $rateCode .= '</div>'; 
        $rateCode .= '<div class="interest-rate-table__footnotes">' . $tableFootnotes .  '</div></div>';
        echo $rateCode;
    } else {
        //get rate content:

        $rateCode = '<div class="rate-post-content">';
        $rateCode .= get_field('qd_rate_content', $rateid);;
        $rateCode .= '</div>';
        $rateCode .= '<script>
                    jQuery(function() {
                        jQuery(".rate-post-content").prependTo(jQuery("#tab-content-a-rate-tab"));
                        jQuery(".rate-post-content").fadeIn("slow").css("display", "block");
                        jQuery(".grid-container").fadeIn("slow").css("display", "grid");
                    });
                    </script>';
        echo $rateCode;
    }
} else {
    // do nothing 
}
