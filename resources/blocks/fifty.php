<?php

/**
 * Block Name: 50/50 Content
 *
 *
 */

$blockName = str_replace('acf/', '', $block['name']);

$id = '';
$id = isset($block['anchor']) ? $block['anchor'] : $blockName . '-' . $block['id'];

$align_class = $block['align'] ? 'align' . $block['align'] : '';
$blockClass = '';
$blockClass = isset($block['className']) ? $block['className'] : '';

$headline = get_field('headline');
$link = get_field('link');

$content = get_field('content');

$column_one = get_field('column_one');

$background = get_field('background');


?>


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> fifty<?php echo $background; ?>">
    <div class="container-xxl">
        <div class="fifty__top">
            <?php echo $headline ? '<h3 class="fifty__headline">' . $headline . '</h3>' : ''; ?>
            <?php echo $link ? qntm_acf_link('a', 'fifty__link', $link, false, false) : ''; ?>
        </div>
        <div class="fifty__grid">

            <?php $item = get_field('column_one'); ?>

            <?php require 'fifty-half.php'; ?>
            <?php $item = get_field('column_two'); ?>
            <?php require 'fifty-half.php'; ?>

            <?php if (have_rows('items')) : ?>

                <?php while (have_rows('items')) : the_row(); ?>

                <?php
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    echo $title ? '<div class="fifty__title">' . $title . '</div>' : '';
                    echo $description ? '<div class="fifty__description">' . $description . '</div>' : '';


                endwhile; ?>

            <?php endif; ?>

        </div>



    </div>
</div>