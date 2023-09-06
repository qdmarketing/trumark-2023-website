<?php

/**
 * Block Name: 50/50 Content
 *
 *
 */

$blockName = 'fifty';

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


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> fifty fifty--<?php echo $background; ?>">
    <div class="container-xxl">
        <div class="fifty__grid">
            <?php $item = get_field('column_one'); ?>
            <?php require 'fifty-half.php'; ?>
            <?php $item = get_field('column_two'); ?>
            <?php require 'fifty-half.php'; ?>


        </div>



    </div>
</div>