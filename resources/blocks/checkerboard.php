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

$background = get_field('background');
$image = get_field('image');
$position = get_field('position');

?>

<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> checkerboard<?php echo $background ? ' checkerboard--bg-offwhite' : ''; ?>">
    <div class="container-xl">

        <div class="checkerboard__grid <?php echo $position ? 'checkerboard__grid--right' : 'checkerboard__grid--left' ?>">
            <div class="checkerboard__col1">
                <?php echo $headline ? '<div class="checkerboard__headline">' .  $headline . '</div>' : ''; ?>
                <?php echo $content ? '<div class="checkerboard__content">' . $content . '</div>' : ''; ?>
                <?php echo $link ? qntm_acf_link('a', 'checkerboard__link', $link, false, false) : ''; ?>
            </div>
            <div class="checkerboard__col2">
                <?php echo wp_get_attachment_image($image, 'checkerboard', false, 'class=checkerboard__image'); ?>
            </div>
        </div>



    </div>
</div>