<?php

/**
 * Block Name: Checkmark List
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

$layout = get_field('layout');

$background = get_field('background');
?>


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> checkmark-list<?php echo $background ? ' checkmark-list--bg-offwhite' : ''; ?>">
    <div class="container-xxl">
        <div class="checkmark-list__top">
            <?php echo $headline ? '<h3 class="checkmark-list__headline">' . $headline . '</h3>' : ''; ?>
        </div>
        <div class="checkmark-list__grid">
            <?php if (have_rows('items')) : ?>

                <?php while (have_rows('items')) : the_row(); ?>

                <?php
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    echo $title ? '<div class="checkmark-list__title">' . $title . '</div>' : '';
                    echo $description ? '<div class="checkmark-list__description">' . $description . '</div>' : '';


                endwhile; ?>

            <?php endif; ?>

        </div>



    </div>
</div>