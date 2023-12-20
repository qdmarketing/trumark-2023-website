<?php

/**
 * Block Name: Featured Rates
 *
 *  
 */


$blockName = str_replace('acf/', '', $block['name']);

$id = '';
$id = isset($block['anchor']) ? $block['anchor'] : $blockName . '-' . $block['id'];


// $align_class = $block['align'] ? 'align' . $block['align'] : '';
$align_class = '';
$blockClass = '';
$blockClass = isset($block['className']) ? $block['className'] : '';


$items = get_field('items');

$title = get_field('title');
$content = get_field('content');

$financial_tools_text = get_field('financial_tools_text');


$rates = get_field('selected_rates');


$manual_rates = get_field('manual_rates');

$manual_selected_rates = get_field('manual_selected_rates');





?>
<div class="featured-rates">
    <div class="container-xxl">
        <div class="featured-rates__tabs">
            <div class="featured-rates__tab featured-rates__tab--active" data-target="featured-rates__rates-grid">
                Explore Our Current&nbsp;Rates
            </div>
            <?php if (have_rows('financial_tools')) : ?>
                <div class="featured-rates__tab" data-target="featured-rates__tools-grid">
                    Member Support
                </div>
            <?php endif; ?>
        </div>
        <div class="featured-rates__rates-grid featured-rates__tab-page featured-rates__show-hide">
            <?php if ($rates && !$manual_rates) : ?>
                <?php foreach ($rates as $rate) :
                    //  $title = get_field('featured_rate_title', $rate);
                    $title = get_the_title($rate);
                    $text = get_field('featured_rate_text', $rate);
                    $percent = get_field('featured_rate_percent', $rate);
                    $rateLink = get_field('featured_rate_link', $rate);
                    $rateContent = '<div class="featured-rates__link"><span class="featured-rates__number">' . $percent . '</span><span class="percent">%</span><span class="apr">APR*</span></div>'
                ?>
                    <div class="featured-rates__col">
                        <p class="featured-rates__title"><?php echo $title; ?></p>
                        <p class="featured-rates__p"><?php echo $text; ?></p>


                        <?php

                        echo $rateLink ?  qntm_acf_link('a', '', $rateLink, $percent, $rateContent)  : '';
                        // echo qntm_acf_link('a', 'featured-rates__apply-now', $rateLink, false, $percent);

                        ?>
                    </div>
                <?php endforeach; ?>
            <?php elseif ($manual_rates) : ?>
                <?php foreach ($manual_selected_rates['rate'] as $rate) :
                    //  $title = get_field('featured_rate_title', $rate);
                    $title = $rate['rate_text'];
                    $text = $rate['rate_intro_text'];
                    $percent = $rate['rate_percent'];
                    $rateLink = $rate['rate_link'];
                    $rateType = $rate['rate_type'];
                    $rateBottom = $rate['rate_bottom_text'];
                    $rateContent = '<div class="featured-rates__link"><span class="featured-rates__number">' . $percent . '</span><span class="percent">%</span><span class="apr">' . $rateType . '*</span></div>'
                ?>
                    <div class="featured-rates__col">
                        <p class="featured-rates__title"><?php echo $title; ?></p>
                        <p class="featured-rates__p"><?php echo $text; ?></p>


                        <?php

                        echo $rateLink ?  qntm_acf_link('a', '', $rateLink, $percent, $rateContent)  : $rateContent;
                        // echo qntm_acf_link('a', 'featured-rates__apply-now', $rateLink, false, $percent);

                        ?>
                        <p class="featured-rates__btm-text"><?php echo $rateBottom; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <?php if (have_rows('financial_tools')) : ?>
            <div class="featured-rates__tools-grid featured-rates__tab-page featured-rates__show-hide" style="display:none;">

                <?php while (have_rows('financial_tools')) : the_row(); ?>

                    <?php
                    $link = get_sub_field('link');
                    $image = get_sub_field('image');
                    ?>
                    <div class="featured-rates__col">
                        <?php $image = $image ?  wp_get_attachment_image($image, 'full', false, array('class' => 'featured-rates__tool-img'))  . '<span>' . $link['title'] . '</span>' : ''; ?>
                        <?php echo $link ? qntm_acf_link('a', 'featured-rates__tool-link', $link, false, $image) : ''; ?>
                    </div>

                <?php endwhile; ?>

            </div>
        <?php endif; ?>


        <?php echo '<div class="featured-rates__view-all featured-rates__rates-grid featured-rates__show-hide" >' . qntm_acf_link('a', '', get_field('link'), false, false) . '</div>'; ?>
        <?php echo $financial_tools_text ? '<div class="featured-rates__tools-text featured-rates__tools-grid featured-rates__show-hide"  style="display:none;">' . $financial_tools_text . '</div>' : ''; ?>

    </div>
</div>