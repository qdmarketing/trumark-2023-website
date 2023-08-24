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
$background = get_field('background');
$shortcode = get_field('shortcode')


?>

<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> timeline <?php echo $background ? ' timeline--bg-offwhite' : ''; ?>">

    <div class="container-xxl">
        <?php echo $headline ? '<h3 class="timeline__headline">' . $headline . '</h3>' : ''; ?>
        <?php echo do_shortcode($shortcode); ?>
    </div>
</div>