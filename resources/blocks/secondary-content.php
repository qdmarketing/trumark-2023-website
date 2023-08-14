<?php

/**
 * Block Name: Secondary Content Block
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

$image = get_field('image');
$position = get_field('position'); // false is left 
$background = get_field('background');



?>


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> fifty--<?php echo $background; ?>">
    <div class="container-xxl">




    </div>
</div>