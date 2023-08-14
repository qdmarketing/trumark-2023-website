<?php

/**
 * Block Name: Icons Block
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
$content = get_field('content');


$images = get_field('image');





?>


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> fifty--<?php echo $background; ?>">
    <div class="container-xxl">
        <?php if (have_rows('image')) : ?>
            <?php while (have_rows('image')) : the_row(); ?>
                <?php
                $image = get_sub_field('image');
                $link = get_sub_field('link') ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>