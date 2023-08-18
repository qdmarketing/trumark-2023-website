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


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block <?php echo $align_class; ?> secondary-content <?php echo $background ? ' secondary-content--bg-offwhite block-no-margin' : ''; ?>">
    <div class="container-xl">
        <?php echo $headline ? '<h3 class="secondary-content__headline">' . $headline . '</h3>' : ''; ?>
        <div class="secondary-content__grid <?php echo $position ? ' secondary-content__grid--bg-right' : ' secondary-content__grid--bg-left'; ?>">
            <div class="secondary-content__col-1">
                <?php echo $content ? '<div class="secondary-content__content acf-wysiwyg">' . $content . '</div>' : ''; ?>
            </div>
            <div class="secondary-content__col-2">
                <?php

                echo $image ?  wp_get_attachment_image($image, 'full', false, array('class' => 'secondary-content__image'))  : ''; ?>

            </div>
        </div>




    </div>
</div>